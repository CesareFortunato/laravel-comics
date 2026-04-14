<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    @extends('layouts.master')

    @section('content')

        <h1 class="mb-4">Comics</h1>

        <div class="row row-cols-1 row-cols-md-4 g-4">

            @foreach ($comics as $comic)
                @include('partials.comic-card', ['comic' => $comic])
            @endforeach

        </div>

    @endsection
</body>

</html>