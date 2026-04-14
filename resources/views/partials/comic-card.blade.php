<div class="col">
    <div class="card h-100">

        {{-- immagine --}}
        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">

        <div class="card-body">
            <h5 class="card-title">{{ $comic['title'] }}</h5>
            <span class="badge bg-primary">{{ $comic['type'] }}</span>
            <p class="card-text">{{ $comic['price'] }}</p>

        </div>

    </div>
</div>