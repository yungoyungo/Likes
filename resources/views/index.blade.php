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
</div>
@endsection
