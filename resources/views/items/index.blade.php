@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        @foreach($user->items as $item)
            <article class="d-inline col-6 col-lg-4 p-1">
                <a href="{{ route('items.show', ['item' => $item->id]) }}">
                    @if($item->image_path == null)
                        <!-- <img src="/storage/no_image.png", alt="no_image" class="img-fluid"> -->
                        <img src="{{ asset('images/no_image.png') }}", alt="no_image" class="img-fluid">
                    @else
                        <!-- <img src="/storage/item_images/{{ $item->image_path }}" alt="{{ $item->title }}" class="img-fluid rounded"> -->
                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="img-fluid rounded">
                    @endif
                    <!-- {{ $item->title }} -->
                </a>
                    <!-- by {{ $item->user->name }} -->
            </article>
        @endforeach
    </div>
    @auth
        @if($user->id === auth()->user()->id)
            <a href="{{ route('items.create') }}" class="btn btn-primary d-block w-50 m-4 mx-auto">新規作成</a>
        @endif
    @endauth
</div>
@endsection
