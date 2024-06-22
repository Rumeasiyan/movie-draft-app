<!DOCTYPE html>
<html>

<head>
    <title>Movie List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Movies List</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('create') }}"> Add New Movie</a>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Year</th>
                <th>Rating</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->name }}</td>
                <td>{{ $movie->year }}</td>
                <td>{{ $movie->rating }}</td>
                <td>
                    <form action="{{ route('delete',$movie->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('edit',$movie->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>