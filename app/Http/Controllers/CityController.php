<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }


    public function create()
    {
        return view('cities.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'state' => 'required|max:255',
        ]);
        $city = City::create($validatedData);
        return redirect()->route('cities.index',$city);
    }


    public function show(City $city)
    {
        return view('cities.show', ['city' => $city]);
    }


    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('cities.edit', ['city' => $city]);
    }


    public function update(Request $request, City $city)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'state' => 'required|max:255',
        ]);
        $city->update($validatedData);
        return redirect()->route('cities.index', $city)->with('success', '<b>$cities->name</b> atualizada.');
    }


    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
    }
}