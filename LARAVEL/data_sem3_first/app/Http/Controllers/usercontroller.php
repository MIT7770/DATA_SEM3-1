<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{

    public function listing(){
        $userdata = User::get(); // get all data from user table

        return view('listing',['users' => $userdata]); // pass data to view
    }

}


?>