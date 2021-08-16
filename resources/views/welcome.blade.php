@extends('layout.master')

@section('content')

    <h1 class="text-center text-white">Welcome to PhotoBlog!</h1>
    <h6 class="font-weight-light text-center text-white">Share your best photos.<p> Feel free to be yourself and share everything from your daily moments to life's highlights.</p></h6>
    <img src="/images/welcomepage.png"class="rounded mx-auto d-block" alt="welcome">
    {{-- version with buttons --}}
    
    {{-- <div class= "container">
    {{-- <div class="btn-group-vertical"> --}}
                {{-- <div class="row">
                    <div class="col-md-6 offset-md-5">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Log In</a>
                    </div>
                </div>
              <div class="col-md-6 offset-md-5">.
                <a href="{{ route('register') }}"class="btn btn-success btn-lg btn-block">Register</a>
              </div>
        </div> --}} 
                
        
    
   



@endsection
