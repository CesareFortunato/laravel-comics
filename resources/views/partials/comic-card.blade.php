<div class="col">
    <div class="card h-100">

        {{-- immagine --}}
        <a href="{{ url('/comics/' . $loop->index) }}">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
        </a>

        <div class="card-body">
            <h5 class="card-title">{{ $comic['title'] }}</h5>
            <span class="badge bg-primary">{{ $comic['type'] }}</span>
            <p class="card-text">{{ $comic['price'] }}</p>

        </div>

    </div>
</div>