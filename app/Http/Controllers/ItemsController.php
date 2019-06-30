<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Item;
use Auth;
use Illuminate\Support\Facades\Cache;

class ItemsController extends Controller
{
    public function index()
    {
        $users = User::all();
        dd($users);
        return view('items.index', ['users' => $users]);
    }

    public function create()
    {
        //$this->authorize('create');
        return view('items.create');
    }

    public function show(Item $item)
    {
        $image_url = Storage::disk('s3')->url($item->image_path);
        // cache => 'path' => ['image_path1', 'image_path2'] 
        // $image_url = $item->image_path;
        // Cache::get('path', function () {
        //     return Storage::disk('s3')->get($item->image_path);
        // });

        // Cache::add($item->id, Storage::disk('s3')->get($item->image_path), 1800);
        // Storage::put('item_images/', Cache::get($item->id));
        // // dd($cache);
        // $image_url = asset('images/'). '/' . $item->image_path;
        // dd($image_url);
        // $exists = Storage::disk('s3')->exists($item->image_path);
        // dd($exists);
        return view('items.show', ['item' => $item, 'image_url' => $image_url]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'max:9999'
        ]);
        // dd(Storage::disk('s3'));
        $item = new Item;
        // dd($request);
        $item->title = $request->title;
        if(!is_null($request->image_path)){
            // $filePath = $request->file('image_path')->store('public/item_images');
            // $filePath = $request->file('image_path')->store('item_images', 's3');
            // $file = $request->file('image_path');
            // $filePath = Storage::disk('s3')->putFile('/item_images', $request->file('image_path'), 'public');
            // $item->image_path = str_replace('item_images/', '', $filePath);
            //  画像をpublic以下に保存するかつ画像のパスをキャッシュに保存 assets('images/')
            $item->image_path = '' . Storage::disk('s3')->putFile('/item_images', $request->file('image_path'), 'public');
        }
        // if ($request->hasFile('image_path')) {
        //     $path = Storage::disk('s3')->putFile('profiles', $request->image_path, 'public'); // Ｓ３にアップ
        //     echo "\npath=" . $path;
        //     $url = Storage::disk('s3')->url($path);
        //     echo "\nurl=" . $url;
        //     echo "\n";
        // }
        // $item = Auth::user()->items()->create([
        //     'title' => $request->title,
        //     'image_path' => $request->image_path,
        // ]);
        $item->user_id = auth()->user()->id;
        $item->save();

        return redirect()->route('user.items.index', ['user' => $item->user->id]);
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

        return redirect()->route('items.show', ['user' => $item->user->id, 'item' => $item->id]);
    }

    public function destroy(Item $item)
    {
        $this->authorize('delete', $item);
        if(isset($item->image_path)){
            // Storage::delete('public/item_images/'.$item->image_path);
            Storage::disk('s3')->delete($item->image_path);
        }
        Item::destroy($item->id);
        return redirect()->route('user.items.index', ['user' => $item->user->id]);
    }
}
