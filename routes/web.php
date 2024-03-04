<?php

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest listings',
        'listings' => [
            [
                'id' => 1,
                'title'=>'listings one',
                'description' => 'This is one of the listimg in the system',
             ],
             [
                'id' => 2,
                'title'=>'listings two',
                'description' => 'This is one of the listimg in the system',
             ],

             [


                'id' => 3,
                'title'=>'listings three',
                'description' => 'This is one of the listimg in the system'

            ]
        ]
    ]);
});
