<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crew; // Import the Crew model

class CrewListController extends Controller
{
    public function index(){
        $crewMembers = Crew::all(); // Retrieve all crew members
        return view('crew_list', ['crewMembers' => $crewMembers]);

    }
}
