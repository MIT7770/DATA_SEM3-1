<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

// ******
// Route::get('url_name',function(){
//     return view('view_name');
// });


Route::get('/', function () {
    return view('welcome');
});


Route::get('/listing',[usercontroller::class, 'listing']) -> name('userlisting'); 
// call listing function from usercontroller class and give name to route



Route::get('/pagination',[usercontroller::class,'pagination']); // call pagination function from usercontroller class and give name to route
