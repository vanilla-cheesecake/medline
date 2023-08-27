<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineUpController extends Controller
{
    public function index(){
        return view('line_up');
    }
}
