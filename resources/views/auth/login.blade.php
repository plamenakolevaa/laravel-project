<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <style>
        body{
          background-color: #34526f;
          
        }
    
      </style>
    <div class="container">
    <div class="row" style="margin-top:45">
        <div class="col-md-5 offset-md-3">
            <h3 class="text-white">Log In <span class="label label-default"></span></h3>
           
     
            <form action="{{ route('login') }}" method="post">
                <div class="form-group">
                    @csrf
{{--                     
            @if(count($errors))
            @foreach($errors as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif --}}
                    <label class="text-white">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email adress" value="{{ old('email') }}">
                    
                </div>
                <div class="form-group">
                    <label class= "text-white">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                </div>
                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                <br>
                <a href="{{ route('register') }}">I don't have an account, create new.</a>
            </form>
        </div>
    </div>
    </div>
</body>
</html>