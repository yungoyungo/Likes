<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('items.index', ['user' => $user]);
    }
}
