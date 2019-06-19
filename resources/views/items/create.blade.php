@extends('layouts.app')

@section('content')
<div class="container text-center">
    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- <div class="form-image_url">
            <input type="file" name="image_path"> 
        </div> -->

        <div class="custom-file col-md-6 d-block mx-auto">
            <input type="file" class="custom-file-input" id="customFile" name="image_path">
            <label class="custom-file-label" for="customFile">ファイルを選択</label>
        </div>

        <div class="form-title">
            <input type="text" class="form-control col-md-6 mx-auto my-4 text-center" name="title" placeholder="タイトル" value="{{ old('title') }}">
        </div>

        <input type='submit' class="btn btn-outline-primary w-25" value="追加">
    </form>
</div>
@endsection
