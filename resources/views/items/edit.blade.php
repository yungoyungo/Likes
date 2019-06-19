@extends('layouts.app')

@section('content')
<div class="container text-center">
    <form action="{{ route('items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <img src="/storage/item_images/{{ $item->image_path }}" alt="image({{ $item->title }})" class="w-50 my-3">
        <div class="custom-file col-md-6 d-block mx-auto">
            
            <input type="file" class="custom-file-input" id="customFile" name="image_path" value="{{ $item->image_path }}">
            <label class="custom-file-label" for="customFile">画像を選択</label>
        </div>

        <div class="form-title my-4">
            <label for="">タイトル</label>
            <input type="text" class="form-control col-md-6 mx-auto text-center" name="title" placeholder="タイトル" value="{{ $item->title }}">
        </div>

        <input type='submit' class="btn btn-outline-primary w-25" value="編集">
    </form>
</div>
@endsection
