<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrewListController extends Controller
{
    public function index(){
        return view('crew_list');
    }
}
