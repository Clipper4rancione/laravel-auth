@extends('layouts.app')

@section('content')
    <div class="containerh-100">
        <div class="table-container my-4 p-4">
            <table class="table table-striped">
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
                            <td>
                                <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $projects->links() }}
    </div>
@endsection
