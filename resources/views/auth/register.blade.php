<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
            <h3 class="text-white">Register</h3><hr>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label class="text-white">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your full name" value="{{ old('name') }}">
                </div>
             
            <form action="" method="post">
                <div class="form-group">
                    <label class="text-white">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email adress" value="{{ old('email') }}">
                   
                </div>
                <div class="form-group">
                    <label class="text-white">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Enter password">
                    
                </div>
                <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                <br>
                <a href="{{ route('login') }}">I already have an account, sign in.</a>
            </form>
        </div>
    </div>
    </div>
</body>
</html>