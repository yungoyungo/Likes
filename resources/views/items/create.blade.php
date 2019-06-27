@extends('layouts.app')

@section('content')
<div class="container text-center">
    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="imagePreview"></div>
        <div class="input-group col-md-6 mx-auto">
            <label class="input-group-btn">
                <span class="btn btn-primary">
                    ファイルを選択<input type="file" style="display:none" name="image_path">
                </span>
            </label>
            <input type="text" class="form-control" readonly="">
        </div>
        
        <!-- <div class="custom-file col-md-6 d-block mx-auto">
            <input type="file" class="custom-file-input" id="customFile" name="image_path">
            <label class="custom-file-label" for="customFile">ファイルを選択</label>
        </div> -->

        <div class="form-title">
            <input type="text" class="form-control col-md-6 mx-auto my-4 text-center" name="title" placeholder="タイトル" value="{{ old('title') }}">
        </div>

        <input type='submit' class="btn btn-outline-primary w-25" value="追加">
    </form>
</div>

@endsection
