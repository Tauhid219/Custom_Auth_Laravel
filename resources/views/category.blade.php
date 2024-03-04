<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Category List</h1>
        <a href="{{ route('ct.create') }}"><button type="submit" class="btn btn-xs btn-success">Add New</button></a>
        <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>Title</th>
                <th>Price</th>
            </tr>
            @foreach ($data as $k => $v)
                <tr>
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $v->title }}</td>
                    <td>{{ $v->price }}</td>
                    <td>
                        <div class="row">
                            <div class="col-sm">
                                <a href="{{ route('ct.edit', $v->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            </div>
                            <div class="col-sm">
                                <form action="{{ route('ct.destroy', $v->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

</body>

</html>
