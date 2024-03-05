<?php

use App\Models\Listings;
use Illuminate\Support\Facades\Route;

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

//all Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest listings',
        'listings' => Listings::all(),
    ]);
});   

//Single Listing
Route::get('/listings/{id}', function($id) {
    return view('listing',[
      'listing' => Listings::find($id)
    ]);   
});
