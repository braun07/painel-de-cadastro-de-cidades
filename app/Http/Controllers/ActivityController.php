<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityType;
use App\Models\CityHall;
use App\Models\Contact;
use App\Models\Receptivity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::query()
        ->select('id', 'time', 'description', 'status', 'pendencies', 'receptivity_id', 'activity_type_id', 'contact_id',)
        ->with('contact:id,name,city_hall_id', 'activityType:id,name', 'receptivity:id,name', 'contact.cityHall:id,name',)
        ->orderBy('id')
        ->latest()
        ->get();
        // dd($activities);
        return view('activities.index', ['activities' => $activities]);
    }


    public function create()
    {
        $activityTypes = ActivityType::orderBy('name')->get(['id', 'name']);
        $receptivities = Receptivity::orderBy('name')->get(['id', 'name']);
        $contacts = Contact::orderBy('name')->get(['id', 'name']);

        return view('activities.create', ['activityTypes' => $activityTypes, 'receptivities' => $receptivities, 'contacts' => $contacts]);
    }


    public function store()
    {
        $validatedData = request()->validate([
            'time' => 'required',
            'description' => 'required|max:255',
            'status' => 'required|max:255',
            'pendencies' => 'required|max:255',
            'receptivity_id' => 'required|max:255',
            'activity_type_id' => 'required|max:255',
            'contact_id' => 'required|max:255',
        ]);

        $activities = Activity::create($validatedData);

        return redirect()->route('activities.index', $activities);

    }


    public function show(Activity $activity)
    {
        $activity->load(['contact'=> fn ($query) =>$query
        ->select('id', 'time', 'description', 'status', 'pendencies', 'receptivity_id', 'activity_type_id', 'contact_id', 'city_hall_id',)
        ->with('contact:id,name', 'activityType:id,name', 'receptivity:id,name', 'contact.cityHall:id,name',)
        ->orderBy('id')
        ->latest()
        ]);
        $contacts = Contact::orderBy('name')->get(['id', 'name']);

        return view('activities.show', ['activity' => $activity, 'contacts' => $contacts]);
    }


    public function edit(Activity $activity)
    {
        $cityHalls = CityHall::orderBy('name')->get(['id', 'name']);
        $contacts = Contact::orderBy('name')->get(['id', 'name']);
        $activityTypes = ActivityType::orderBy('name')->get(['id', 'name']);
        $receptivities = Receptivity::orderBy('name')->get(['id', 'name']);

        return view('activities.edit', ['activity' => $activity, 'contacts' => $contacts, 'activityTypes' => $activityTypes, 'receptivities' => $receptivities, 'cityHalls' => $cityHalls]);

    }


    public function update(Request $request, Activity $activity)
    {
        $validatedData = $request->validate([
            'time' => 'required',
            'description' => 'required|max:255',
            'status' => 'required|max:255',
            'pendencies' => 'required|max:255',
            'receptivity_id' => 'required|max:255',
            'activity_type_id' => 'required|max:255',
            'contact_id' => 'required|max:255',
        ]);

        $activity->update($validatedData);

        return redirect()->route('activities.index',['activity'=>$activity]);
    }



    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activities.index');
    }
}