<?php

namespace App\Http\Controllers;

use App\Models\CityHall;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::query()
        ->select('id', 'name', 'term','contact_type','cityhall_id')
        ->with('cityhall:id,name,phone')
        ->orderBy('name')
        ->latest()
        ->get();

        return view('contacts.index', ['contacts' => $contacts]);
    }

    public function create()
    {
        $cityHalls = CityHall::orderBy('name')->get(['id', 'name','phone']);
    }
}
