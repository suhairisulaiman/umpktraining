@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Todos Index') }}</div>

                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Creator</th>
                        </thead>
                        <tbody>
                            @foreach ($todos as $todo)
                                <tr>
                                    <td> {{ $todo->id }}</td>
                                    <td> {{ $todo->title }}</td>
                                    <td> {{ $todo->description }}</td>
                                    <td> {{ $todo->created_at->diffForHumans() }}</td>
                                    <td> {{ $todo->updated_at->diffForHumans() }}</td>
                                    <td> {{ $todo->user->name}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/todos/{{ $todo->id }}">Show</a>
                                        <a class="btn btn-success" href="/todos/{{ $todo->id }}/edit">Edit</a>
                                        <a class="btn btn-danger" href="/todos/{{ $todo->id }}/delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection