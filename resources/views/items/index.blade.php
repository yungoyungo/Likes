@extends('layouts.app')

@section('content')
<div class="container py-4">
    @foreach($items as $item)
        <article>
            <h2>
                @if($item->image_path == null)
                    <img src="/storage/no_image.png", width="150", height="150">
                @else
                    <img src="/storage/item_images/{{ $item->image_path }}", width="150", height="150">
                @endif
                <a href="{{ url('items', $item->id) }}">
                    {{ $item->title }}
                </a>
                 by {{ $item->user->name }}
            </h2>
        </article>
        <hr>
    @endforeach
    @auth
        <a href="{{ route('items.create') }}" class="btn btn-primary">新規作成</a>
    @endauth
</div>
@endsection
