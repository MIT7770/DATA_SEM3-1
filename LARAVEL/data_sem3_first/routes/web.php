<?php

use Illuminate\Support\Facades\Route;

// ******
// Route::get('url_name',function(){
//     return view('view_name');
// });


Route::get('/', function () {
    return view('welcome');
});



