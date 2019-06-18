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

    public function show(User $user, Item $item)
    {
        return view('items.show', ['user' => $user, 'item' => $item]);
    }
}
