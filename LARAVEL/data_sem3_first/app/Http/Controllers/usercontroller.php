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



    public function pagination(){
        $userdata = User::paginate(2); // get all data from user table with pagination

        return view('pagination',['users' => $userdata]);
    }


    public function insert(Request $request){ // get data from form and save in request object
        //dd($request -> all ()); // display all data from form
    
        $user = User::create([ // insert data into user table
            'name' => $request -> name, // get name from form
            'email' => $request -> email,
            'password' => $request -> password,
        ]);
    
        return redirect() -> route('userlisting'); // redirect to listing page
    }
    

}


?>