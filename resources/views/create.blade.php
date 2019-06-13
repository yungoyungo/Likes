@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="form-title">
        <label for="title">タイトル</label> 
        <input class="" name="title" value="{{ old('title') }}">
    </div>
    
    <div class="form-image_url">
        <input type="file" name="image_url"> 
    </div>

    <div class="form-content">
        <label for="content" class="form-content">内容</label> 
        <textarea class="" name="content" cols="50" rows="10">{{ old('content') }}</textarea>       
    </div>
</div>
@endsection
