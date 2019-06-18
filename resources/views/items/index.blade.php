@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        @foreach($user->items as $item)
            <article class="d-inline col-4 p-1">
                <a href="{{ route('user.items.show', ['user' => $item->user->id, 'item' => $item->id]) }}">
                    @if($item->image_path == null)
                        <img src="/storage/no_image.png", alt="no_image" class="img-fluid">
                    @else
                        <img src="/storage/item_images/{{ $item->image_path }}" alt="{{ $item->title }}" class="img-fluid rounded">
                    @endif
                    <!-- {{ $item->title }} -->
                </a>
                    <!-- by {{ $item->user->name }} -->
            </article>
        @endforeach
    </div>
    @can('create', $item)
        <a href="{{ route('items.create') }}" class="btn btn-primary d-block w-50 m-4 mx-auto">新規作成</a>
    @endcan
</div>
@endsection
