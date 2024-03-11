<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listings
    public function index(){
        // dd(request('tag'));
        return view('listings.index', [
            'listings' => Listings::latest()->filter(request(['tag','search']))->get(),
        ]);

    }

    // show single listing
    public function show(Listings $listing){
        return view('listings.show',[
            'listing' => $listing
        ]);

    }

    // show create form
    public function create(){
        return view('listings.create');
    }

    // store new listing
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'tags' =>'required',
            'company' =>['required', Rule::unique('listings','company')],
            'loaction' =>'required',
            'email' =>['required', 'email'],
            'website' =>'required',
            'description' =>'required'
        ]);

        Listings::create($formFields);

        return redirect('/');
    }
}
