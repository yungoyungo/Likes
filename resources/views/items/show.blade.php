@extends('layouts.app')

@section('content')
    <article class="text-center">
        <div class="row">
            <div class="col-md-6">
                <!-- <img src="{{ asset('storage/item_images/'.$item->image_path) }}"><br> -->
                @if($item->image_path == null)
                    <!-- <img src="/storage/no_image.png", alt="no_image" class="img-fluid"> -->
                    <img src="{{ asset('images/suko.png') }}", alt="no_image" class="img-fluid">
                @else
                    <img src="{{ $image_url }}" alt="image({{ $item->title }})" class="img-fluid">
                @endif
            </div>
            <h1 class="text-center col-md-6 py-4 my-auto">
                <div class="h1">{{ $item->title }}</div>
                <div class="text-secondary" style="font-size: 1rem;">uploaded by {{ $item->user->name }}</div>
            </h1>
        </div>
    </article>
 
    <br/>
 
    @can('view', $item)
        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">編集</a>
    @endcan

    @can('delete', $item)
        <form class="d-inline" action="{{ route('items.destroy', $item->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">削除</button>
        </form>
    @endcan

    <a href="{{ route('user.items.index', ['user' => $item->user->id]) }}" class="btn btn-secondary float-right">一覧へ戻る</a>
@endsection

@section('navbar_content')
@endsection