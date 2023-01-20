@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Client name</th>
                    <th scope="col">Summary</th>
                    <th scope="col">Cover Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{ $project->id }}</th>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->client_name }}</td>
                        <td>{{ $project->summary }}</td>
                        <td>{{ $project->cover_image }}</td>
                        <td>XXX</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $projects->links() }}
    </div>
@endsection
