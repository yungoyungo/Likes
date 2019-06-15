@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        @foreach($items as $item)
            <article class="d-inline col-6 col-md-4 p-1">
                <a href="{{ url('items', $item->id) }}">
                    @if($item->image_path == null)
                        <img src="/storage/no_image.png", class="img-fluid">
                    @else
                        <img src="/storage/item_images/{{ $item->image_path }}" class="img-fluid">
                    @endif
                    <!-- {{ $item->title }} -->
                </a>
                    <!-- by {{ $item->user->name }} -->
            </article>
        @endforeach
    </div>
    @auth
        <a href="{{ route('items.create') }}" class="btn btn-primary d-block w-50 m-4 mx-auto">新規作成</a>
    @endauth
</div>
@endsection
