<div class="card h-100 shadow-sm">
    @if ($movie->img)
        <img src="{{ Storage::url($movie->img) }}" class="card-img-top" alt="Copertina di {{ $movie->title }}">
    @else
        <img src="https://picsum.photos/600/400" class="card-img-top" alt="Immagine di default">
    @endif

    <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Regista: {{ $movie->director }}</h6>
        <p class="mb-2"><strong>Anno:</strong> {{ $movie->year }}</p>
        <p class="card-text">{{ $movie->plot }}</p>
    </div>
</div>
