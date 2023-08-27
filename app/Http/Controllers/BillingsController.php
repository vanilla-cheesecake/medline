<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingsController extends Controller
{
    public function index(){
        return view('billings');
    }
}
