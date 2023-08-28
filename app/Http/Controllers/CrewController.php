<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CrewController extends Controller
{
    //
    public function create()
    {
        return view('add_crew');
    }

    public function store(Request $request)
    //   public function store()
{
  // Validate the form data

        $validatedData = $request->validate([
            'profile_photo' => 'nullable', // You might have specific validation rules for file uploads
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|string',
            'birthdate' => 'nullable|date',
            'phone' => 'required|string',
            'mother' => 'required|string|max:255',
            'spouse' => 'nullable|string|max:255',
            'rank' => 'required|string|max:255',
            'src' => 'required|string|max:255',
            'sbook' => 'required|string|max:255',
            'sbook_date_issued' => 'nullable|date',
            'sbook_expiry_date' => 'nullable|date',
            'sbook_place_issued' => 'nullable|string|max:255',
            'pport' => 'required|string|max:255',
            'pport_date_issued' => 'nullable|date',
            'pport_expiry_date' => 'nullable|date',
            'pport_place_issued' => 'nullable|string|max:255',
            'coc_date_issued' => 'nullable|date',
            'coc_expiry_date' => 'nullable|date',
            'us_visa' => 'nullable|date',
            'yfever' => 'nullable|date',
            'status' => 'required|string|max:255',
            'radio_option' => 'nullable|in:MWE,ACTIVE',
        
        
 ]);
  
    // Create a new Crew instance and populate it with the form data
    $crew = new Crew();
    $crew->fill($validatedData);
    \DB::connection()->enableQueryLog();
     $crew->save();
    $queries = \DB::getQueryLog();
    \Log::info('Queries executed:', $queries);
    return redirect()->back()->with('success', 'Crew added successfully.');
   
}

}