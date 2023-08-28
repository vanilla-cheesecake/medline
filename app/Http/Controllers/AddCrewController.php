<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crew; // Import the Crew model


class AddCrewController extends Controller
{
    public function index(){
        return view('add_crew');
    }
    public function create()
    {
        return view('add_crew');
    }

    public function store(Request $request)
    {
        // Validate form data
        // CHANGE THE DATA VALIDATION TO NULLABLE OR REQUIRED ANYTIME
        $validatedData = $request->validate([
            'profile_photo' => 'nullable|image|max:2048',
            'firstname' => 'required|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'birthdate' => 'nullable|date',
            'phone' => 'nullable|string',
            'mother' => 'nullable|string|max:255',
            'spouse' => 'nullable|string|max:255',
            'rank' => 'nullable|string|max:255',
            'src' => 'nullable|string|max:255',
            'sbook' => 'nullable|string|max:255',
            'sbook_date_issued' => 'nullable|date',
            'sbook_expiry_date' => 'nullable|date',
            'sbook_place_issued' => 'nullable|string|max:255',
            'pport' => 'nullable|string|max:255',
            'pport_date_issued' => 'nullable|date',
            'pport_expiry_date' => 'nullable|date',
            'pport_place_issued' => 'nullable|string|max:255',
            'coc_date_issued' => 'nullable|date',
            'coc_expiry_date' => 'nullable|date',
            'us_visa' => 'nullable|date',
            'yfever' => 'nullable|date',
            'status' => 'nullable|string|max:255',
            'radio_option' => 'nullable|in:MWE,ACTIVE',
        ]);

        // Create a new crew member record
        Crew::create($validatedData);

        return redirect()->route('add-crew')->with('success', 'Crew member added successfully!');
    }
}


