@extends('layouts.app')

@section('content')
<div class="container py-4">
    @foreach($items as $item)
        <article>
            <h2>
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
