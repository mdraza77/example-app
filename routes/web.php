<?php

use Illuminate\Support\Facades\Route;

Route::get('/{name?}', function ($name= null) {
    $demo = "<h2>Md Raza</h2>";
    $data = compact('name', 'demo');
    return view('home')->with($data);
});
