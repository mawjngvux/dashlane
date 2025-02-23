<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashlane</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-32x32-dark.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container gray-bg">
        <div class="row">
            <div class="col-md-8">
                <img class="logo" src="{{ asset('images/Dashlane_Lockup_Green_1200X628-01.png')}}" alt="logo">
                <h1>Welcome to Dashlane on the web</h1>
                <p>Access your logins and personal data in the web app - quickly and securely</p>
            </div>
            <div class="col-md-4 white-bg">
                <p>New to Dashlane?</p>
                <button type="button" class="btn btn-success">Create an account</button>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <h3>Log in to Dashlane</h3>
                    <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>