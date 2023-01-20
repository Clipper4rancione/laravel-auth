@extends('layouts.app')

@section('content')
    <div class="container show-wrapper">
        <div class="row d-flex">
            <div class="col-3 img-area">
                <img src="{{ $project->cover_image }}" alt="">
            </div>
            <div class="col-9">
                <h2>{{ $project->name }}</h2>
                <p>Client Name: {{ $project->client_name }}</p>
                <p>Client Name: {{ $project->client_name }}</p>
            </div>
        </div>
    </div>
@endsection
