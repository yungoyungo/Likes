<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Auth;

class ItemsController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny');
        // if(Auth::check()){
            $items = Item::where('user_id', auth()->user()->id)->get();
            return view('items.index', compact('items'));
        // }
        // else{
        //     return view('login', 'loginController@login');
        // }
    }

    public function create()
    {
        $this->authorize('view');
        return view('items.create');
    }
    public function store(Request $request)
    {
        $item = new Item;
        // dd($request);
        $item->title = $request->title;
        if(!is_null($request->image_path)){
            $filePath = $request->file('image_path')->store('public/item_images');
            $item->image_path = str_replace('public/item_images/', '', $filePath);
        }
        // $item = Auth::user()->items()->create([
        //     'title' => $request->title,
        //     'image_path' => $request->image_path,
        // ]);
        $item->user_id = auth()->user()->id;
        $item->save();

        return redirect()->route('items.index');
    }

    public function show(Item $item)
    {
        $this->authorize('view', $item);
        return view('items.show', compact('item'));
    }

    public function edit(Item $item)
    {
        $this->authorize('view', $item);
        return view('items.edit', compact('item'));
    }
    
    public function update(Item $item, Request $request)
    {
        $this->authorize('update', $item);
        $item->title = $request->title;
        $item->save();

        return redirect()->route('user.items.show', ['user' => $item->user->id, 'item' => $item->id]);
    }

    public function destroy(Item $item)
    {
        $this->authorize('destroy', $item);
        Item::destroy($item->id);
        return redirect()->route('items.index');
    }
}
