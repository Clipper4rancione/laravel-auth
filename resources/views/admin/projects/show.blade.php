@extends('layouts.app')

@section('content')
    <div class="container show-wrapper">
        <div class="row d-flex h-100 mt-5">
            <div class="col-5 img-area">
                <img src="{{ $project->cover_image }}" alt="">
            </div>
            <div class="col-7">
                <div class="text-area">
                    <h2>{{ $project->name }}</h2>
                    <p><strong>Client Name:</strong> {{ $project->client_name }}</p>
                    <p><strong>Summary:</strong> {{ $project->summary }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
