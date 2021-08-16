@extends('layout.master')

@section('content')

    <div class="col-md-6 offset-md-3">

    <a class="btn btn-success" href="{{ route('post.form') }}">Add post</a>
   
        @foreach($posts as $post)
            @if(isset($message))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif

            <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <img src="{{ asset('storage/uploads/'. $post->image) }}" alt="" title="" class="post-image"></a>
                    <form method="POST" action="{{ route('post.delete.form') }}">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{ $post->id }}">
                        <a href="{{ route('post.edit.form', $post->id)  }}" class="btn btn-success">Edit</a>
                        <button class="btn btn-danger" type="submit">Delete</button>
                        

                    </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection
