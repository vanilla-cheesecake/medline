<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCrewController extends Controller
{
    public function index(){
        return view('add_crew');
    }
}
