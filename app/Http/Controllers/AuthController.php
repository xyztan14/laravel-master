<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(){
        return view('register');
    }
    public function signup(Request $request){
        $fullname = $request->fullname;
        $address = $request->address;
        $description = $request->description;
        return view('selamat', compact('fullname', 'address', 'description'));
    }
}
