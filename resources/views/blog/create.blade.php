<x-layout>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <h2 class="mb-4">Inserisci un nuovo film</h2>

            <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data" class="card card-body shadow-sm">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label for="director" class="form-label">Regista</label>
                    <input type="text" name="director" id="director" class="form-control" value="{{ old('director') }}">
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Anno</label>
                    <input type="number" name="year" id="year" class="form-control" value="{{ old('year') }}">
                </div>

                <div class="mb-3">
                    <label for="plot" class="form-label">Trama</label>
                    <textarea name="plot" id="plot" rows="6" class="form-control">{{ old('plot') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="img" class="form-label">Immagine</label>
                    <input type="file" name="img" id="img" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Salva nel database</button>
            </form>
        </div>
    </div>
</x-layout>
