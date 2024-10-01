<?php

use App\Models\Address;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        // 'contacts' => Contact::get(),
        // 'contact' => User::get(),
        'conta' => Address::where('contact_id', 1),
    ]);
});

Route::get('/benchmark', function(){
    return Benchmark::dd([
        'data' => fn() => Address::where('contact_id', 1)
    ]);
});
