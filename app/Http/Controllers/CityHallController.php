<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\CityHall;
use Illuminate\Http\Request;

class CityHallController extends Controller
{

    public function index()
    {
        $cityHalls = CityHall::query()
            ->select('id', 'name', 'phone', 'population', 'city_id')
            ->with('city:id,name,state')
            ->latest()
            ->get();

        return view('city-halls.index', ['cityHalls' => $cityHalls]);
    }


    public function create()
    {
        $cities = City::orderBy('name')->get([ 'id', 'name', 'state' ]);
        return view('city-halls.create', ['cities' => $cities]);

    }


    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'population' => 'required|max:255',
            'city_id' => 'required',]);
        $cityHalls = CityHall::create($validatedData);
        return redirect()->route('city-halls.index',$cityHalls);

    }


    public function show(CityHall $cityHall)
    {
        $cityHall->load(['contacts'=> fn ($query) =>$query
            ->select('id', 'name', 'term', 'city_hall_id', 'contact_type_id')
            ->with('contactType:id,name')
            ->withCount('activities')
            ->latest()]);
        $cities = City::orderBy('name')->get(['id', 'name']);
        return view('city-halls.show', ['cityHall' => $cityHall, 'cities' => $cities]);
    }


    public function edit(CityHall $cityHall)
    {
        $cities = City::orderBy('name')->get([ 'id', 'name' ]);
        return view('city-halls.edit', ['cityHall' => $cityHall, 'cities' => $cities]);
    }


    public function update(Request $request, CityHall $cityHall)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:11',
            'population' => 'required|integer',
            'city_id' => 'required',
        ]);
        $cityHall->update($validatedData);
        return redirect()->route('city-halls.index', $cityHall)->with('success', '<b>$cityHall->name</b> atualizada.');
    }


    public function destroy(CityHall $cityHall)
    {
        return redirect()->route('city-halls.index')->with('success', '<b>$cityHall->name</b> excluída.');
    }
}
