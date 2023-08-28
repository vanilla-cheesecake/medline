<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crew; // Import Model Crew

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalCrewCount = Crew::count();
        return view('home', compact('totalCrewCount'));
    }
}
