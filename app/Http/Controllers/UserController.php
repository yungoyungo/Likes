<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class UserController extends Controller
{
    public function list()
    {
        $items = Item::all();
        return view('list', compact('items'));
    }
}
