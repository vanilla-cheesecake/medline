<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmbarkationController extends Controller
{
    public function index(){
        return view('embarkation');
    }
}
