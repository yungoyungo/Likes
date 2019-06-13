<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Auth;

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
    public function store(Request $request)
    {
        // dd($request);
        $article = Auth::user()->items()->create([
            'title' => $request->title,
            'image_path' => $request->image_path,
        ]);

        return redirect()->route('items.index');
    }
    public function edit()
    {
        return 'edit';
    }
    public function destroy(Item $item)
    {
        Item::destroy($item->id);
        return redirect()->route('items.index');
    }
}
