<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Edit Category</h1>
        <form action="{{route('ct.update', $data->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $data->title }}" class="form-control"><br>
            <input type="text" name="price" value="{{ $data->price }}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
    
</body>
</html>