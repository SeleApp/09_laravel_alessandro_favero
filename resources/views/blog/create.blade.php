<x-layout>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <h2 class="mb-4">Inserisci un nuovo post</h2>

            <form method="POST" action="{{ route('blog.store') }}" class="card card-body shadow-sm">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Autore</label>
                    <input type="text" name="author" id="author" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Contenuto</label>
                    <textarea name="body" id="body" rows="6" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Salva nel database</button>
            </form>
        </div>
    </div>
</x-layout>
