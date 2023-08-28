<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crew; // Import the Crew model

class CrewSearchController extends Controller
{
    public function index(){
        $crewMembers = Crew::all(); // Retrieve all crew members
        return view('crew_search', ['crewMembers' => $crewMembers]);
    }
}
