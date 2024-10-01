<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4">Movie List</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Nationality:</strong> {{ $movie->nationality }}</li>
                                <li class="list-group-item"><strong>Release Date:</strong> {{ $movie->date }}</li>
                                <li class="list-group-item"><strong>Vote:</strong> {{ $movie->vote }}</li>
                              </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>