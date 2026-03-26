<x-layout>
    <h2 class="mb-4">Tutti i post creati</h2>

    @if ($posts->isEmpty())
        <div class="alert alert-info">Nessun post presente nel database.</div>
    @else
        <div class="row g-4">
            @foreach ($posts as $post)
                <div class="col-12 col-md-6 col-lg-4">
                    <x-post-card :post="$post" />
                </div>
            @endforeach
        </div>
    @endif
</x-layout>
