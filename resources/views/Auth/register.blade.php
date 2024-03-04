<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Register Page</h1>
        <div>
            <a href="{{route('login')}}"><button class="btn btn-primary">Have an Account?</button></a>
        </div>&nbsp;
        <form action="{{ route('register.custom') }}" method="post">
            @csrf
            <div>
                <input type="text" placeholder="Enter Name" name="name" id="name">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>&nbsp;
            <div>
                <input type="text" placeholder="Enter Email" name="email" id="email">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>&nbsp;
            <div>
                <input type="text" placeholder="Enter Password" name="password" id="password">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>&nbsp;
            <div>
                <input type="submit" value="Sign Up" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>

</html>
