<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrewSearchController;
use App\Http\Controllers\CrewListController;
use App\Http\Controllers\AddCrewController;
use App\Http\Controllers\ShipsListController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EmbarkationController;
use App\Http\Controllers\DisembarkationController;
use App\Http\Controllers\LineUpController;
use App\Http\Controllers\BillingsController;
use App\Http\Controllers\AllotmentController;
use App\Http\Controllers\AboutUsController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::post('/', 'Auth\LoginController@login')->name('login');
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/crew-search', [CrewSearchController::class, 'index'])->name('crew-search');
    Route::get('/crew-list', [CrewListController::class, 'index'])->name('crew-list');
    Route::get('/add-crew', [AddCrewController::class, 'create'])->name('add-crew');
    Route::get('/ships-list', [ShipsListController::class, 'index'])->name('ships-list');
    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::get('/embarkation', [EmbarkationController::class, 'index'])->name('embarkation');
    Route::get('/disembarkation', [DisembarkationController::class, 'index'])->name('disembarkation');
    Route::get('/line-up', [LineUpController::class, 'index'])->name('line-up');
    Route::get('/billings', [BillingsController::class, 'index'])->name('billings');
    Route::get('/allotment', [AllotmentController::class, 'index'])->name('allotment');
    Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
    // Repeat for other protected routes...

    // Route::get('/add-crew', [AddCrewController::class, 'create'])->name('crew.create');
    Route::POST('/add-crew', [AddCrewController::class, 'store'])->name('crew.store')->middleware('web');

});
