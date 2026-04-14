<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comics</title>
</head>

<body>
    @extends('layouts.master')

    @section('content')

        <div class="row">

            {{-- IMMAGINE --}}
            <div class="col-md-4">
                <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="{{ $comic['title'] }}">
            </div>

            {{-- INFO --}}
            <div class="col-md-8">

                <h1>{{ $comic['title'] }}</h1>

                <p class="text-muted">{{ $comic['series'] }}</p>

                <h4 class="text-success">{{ $comic['price'] }}</h4>

                <p class="mt-3">
                    {{ $comic['description'] }}
                </p>

                <p><strong>Artists:</strong></p>
                <ul>
                    @foreach ($comic['artists'] as $artist)
                        <li>{{ $artist }}</li>
                    @endforeach
                </ul>

                <p><strong>Writers:</strong></p>
                <ul>
                    @foreach ($comic['writers'] as $writer)
                        <li>{{ $writer }}</li>
                    @endforeach
                </ul>

                <p><strong>Type:</strong> {{ $comic['type'] }}</p>
                <p><strong>Sale date:</strong> {{ $comic['sale_date'] }}</p>

            </div>

        </div>

    @endsection
</body>

</html>