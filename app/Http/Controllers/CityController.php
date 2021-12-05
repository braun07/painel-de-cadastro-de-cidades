<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::query()
        ->select('id', 'name', 'state')
        ->latest()
        ->orderBy('name')
        ->paginate();
        return view('cities.index',['cities' => City::all()]);
    }

    public function create()
    {
        $cities = City::orderBy('name')->get([
            'id',
            'name',
            'state'
        ]);
        return view('cities.create', ['cities' => $cities]);
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
        $city = City::findOrFail($id);
        $city->delete();
        return redirect()->route('cities.index')->with('success', '<b>$city->name</b> deletada.');
    }
}
