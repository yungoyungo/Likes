@extends('layouts.app')

@section('content')
    <h1>
        {{ $item->title }}
    </h1>
    
    <hr/>

    <article>
        image_path : {{ $item->image_path }}<br>
        <!-- <img src="{{ asset('storage/item_images/'.$item->image_path) }}"><br> -->
        @if($item->image_path == null)
            <img src="/storage/no_image.png", width="150", height="150">
        @else
            <img src="/storage/item_images/{{ $item->image_path }}">
        @endif
        <div class="body">uploaded by {{ $item->user->name }}</div>
    </article>
 
    <br/>
 
    @auth
        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">編集</a>

        <form class="d-inline" action="{{ route('items.destroy', $item->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">delete</button>
        </form>
    @endauth

    <a href="{{ route('items.index') }}" class="btn btn-secondary float-right">一覧へ戻る</a>
@endsection

@section('navbar_content')
    <a href="{{ route('items.index') }}">index</a>
@endsection