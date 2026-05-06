<x-layout>
    <h2 class="mb-4">Tutti i film creati</h2>

    @if ($movies->isEmpty())
        <div class="alert alert-info">Nessun film presente nel database.</div>
    @else
        <div class="row g-4">
            @foreach ($movies as $movie)
                <div class="col-12 col-md-6 col-lg-4">
                    <x-post-card :movie="$movie" />
                </div>
            @endforeach
        </div>
    @endif
</x-layout>
