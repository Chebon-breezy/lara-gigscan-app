<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all listings
    public function index(){
        return view('listings.index', [
            'listings' => Listings::all(),
        ]);

    }

    // show single listing
    public function show(Listings $listing){
        return view('listings.show',[
            'listing' => $listing
        ]);

    }
}
