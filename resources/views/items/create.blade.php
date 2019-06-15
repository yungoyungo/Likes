@extends('layouts.app')

@section('content')
<div class="container text-center">
    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-title">
            <label for="title">タイトル</label> 
            <input class="" name="title" value="{{ old('title') }}">
        </div>
        
        <div class="form-image_url">
            <input type="file" name="image_path"> 
        </div>

        <input type='submit' value="追加">
    </form>
</div>
@endsection
