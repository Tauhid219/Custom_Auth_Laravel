<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message= Session::get('success'))
                    <div class="alert alert-success">
                        {{$message}}
                    </div>
                @else
                <div class="alert alert-success">
                    <h3>Hello Admin, You are loggen in!</h3>
                </div>
                @endif
                <a href="{{route('signout')}}"><button class="btn btn-danger">Sign Out</button></a>
            </div>
        </div>
    </div>
</body>
</html>