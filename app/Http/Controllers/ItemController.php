<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('show', compact('items'));
    }
    public function show(Item $item)
    {
        return view('show', compact('item'));
    }
    public function create()
    {
        return view('create');
    }
}
