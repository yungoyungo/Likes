@extends('layouts.app')

@section('content')

    <article>
        <!-- <img src="{{ asset('storage/item_images/'.$item->image_path) }}"><br> -->
        @if($item->image_path == null)
            <img src="/storage/no_image.png", alt="no_image" class="img-fluid">
        @else
            <img src="/storage/item_images/{{ $item->image_path }}" alt="image({{ $item->title }})" class="img-fluid">
        @endif
        <hr/>
        <h1 class="text-center">
            {{ $item->title }}
        </h1>
        <hr/>
        image_path : {{ $item->image_path }}<br>
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