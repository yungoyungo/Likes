<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TopController extends Controller
{
    public function index(){
        // return view('welcome');
        if(Auth::check()){
            return redirect()->route('user.items.index',['user'=>auth()->user()]);
        }
        else{
            return redirect()->route('login');
        }
    }
}
