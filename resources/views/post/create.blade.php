@extends('layout.master')

@section('content')

    <div class="col-md-6 offset-md-3">
        <form method="POST" action="{{ route('post') }}" enctype="multipart/form-data">
            @csrf

            @if(count($errors->all()))
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <div class="mb-3">
                <label for="exampleInputName1" class="form-label text-white">Title</label>
                <input name="title" type="text" class="form-control" id="exampleInputName1" required value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Content</label>
                <textarea name="content" class="form-control" id="exampleInputEmail1" rows="7" required>{{ old('content') }}</textarea>
            </div>
            <div class="mb-3">
                <input type="file" name="file">
            </div>
            <button type="submit" class="btn btn-primary text-white">Create</button>
        </form>
    </div>

@endsection
