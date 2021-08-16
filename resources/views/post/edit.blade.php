@extends('layout.master')

@section('content')

    <div class="col-md-6 offset-md-3">
        <form method="POST" action="{{ route('post.update.form') }}">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $post->id }}">
            @if(count($errors->all()))
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <div class="mb-3">
                <label for="exampleInputName1" class="form-label text-white">Title</label>
                <input name="title" type="text" class="form-control" id="exampleInputName1" required value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Content</label>
                <textarea name="content" class="form-control" id="exampleInputEmail1" rows="7" required>{{ $post->content }}
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary text-white">Edit</button>
        </form>
    </div>

@endsection
