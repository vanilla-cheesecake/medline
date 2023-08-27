<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllotmentController extends Controller
{
    public function index(){
        return view('allotment');
    }
}
