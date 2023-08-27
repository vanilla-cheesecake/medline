<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrewSearchController extends Controller
{
    public function index(){
        return view('crew_search');
    }
}
