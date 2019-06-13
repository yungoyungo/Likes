<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }
    public function create()
    {
        return view('items.create');
    }
    public function edit()
    {
        return 'edit';
    }
}
