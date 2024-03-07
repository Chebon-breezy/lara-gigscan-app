<?php

use App\Models\Listings;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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
Route::get('/', [ListingController::class, 'index']);   

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
