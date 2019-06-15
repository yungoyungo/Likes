@extends('layouts.app')

@section('content')
<div class="container text-center">
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-title">
            <label for="title">タイトル</label> 
            <input class="" name="title" value="{{ $item->title }}">
        </div>
        
        <div class="form-image_url">
            {{ $item->image_path }}
            <br>
            <input type="file" name="image_path" value="{{ $item->image_path }}"> 
        </div>

        <input type='submit' value="追加">
    </form>
</div>
@endsection
