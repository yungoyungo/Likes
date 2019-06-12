<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class UserController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('index', compact('items'));
    }
    public function show(Item $item)
    {
        return view('show', compact('item'));
    }
}
