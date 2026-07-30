<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('myportfolio');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:50',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:2000',
    ]);

    // TODO: Hook this into mail or storage as needed.
    return redirect('/')->with('status', 'Your message was sent successfully.');
    });