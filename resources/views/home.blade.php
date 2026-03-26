<x-layout>
    @if (session()->has('success_message'))
        <div class="alert alert-success">{{ session('success_message') }}</div>
    @endif

    <div class="row justify-content-center text-center">
        <div class="col-12 col-md-8">
            <h1 class="display-5 mb-3">Benvenuto nel Blog Cinema</h1>
            <p class="lead mb-4">Crea i tuoi post e visualizza tutti gli articoli salvati nel database.</p>
            <div class="d-flex justify-content-center gap-2">
                <a href="{{ route('blog.create') }}" class="btn btn-primary">Crea un post</a>
                <a href="{{ route('blog.index') }}" class="btn btn-outline-dark">Vedi tutti i post</a>
            </div>
        </div>
    </div>
</x-layout>
