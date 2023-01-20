@extends('layouts.app')

@section('title')
    | Create A Project
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputName" class="form-label">Nome</label>
                <input type="text" class="form-control" value="{{ old('title') }}" name="name" id="inputName"
                    placeholder="Inserire il nome del progetto">
            </div>
            <div class="mb-3">
                <label for="inputClientName" class="form-label">Nome del cliente</label>
                <input type="text" class="form-control" value="{{ old('client_name') }} name="client_name"
                    id="inputClientName" placeholder="Inserire il nome del cliente">
            </div>
            <div class="mb-3">
                <label for="inputImage" class="form-label">Immagine</label>
                <input type="text" class="form-control" value="{{ old('cover_image') }} name="cover_image"
                    id="inputImage" placeholder="Inserire il link all'immagine">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Decrizione</label>
                <textarea rows="3" class="form-control" value="{{ old('summary') }} name="summary" id="desc"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
@endsection
