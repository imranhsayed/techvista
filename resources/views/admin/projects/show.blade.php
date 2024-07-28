@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $project->title }}</div>
                    <div class="card-body">
                        <p><strong>Description:</strong> {{ $project->description }}</p>
                        <p><strong>Status:</strong> {{ $project->status }}</p>
                        <p><strong>Assigned to:</strong> {{ $project->user->name }}</p>
                        <p><strong>Invoice:</strong> {{ $project->invoice }}</p>
                        <p><strong>Invoice Amount:</strong> ${{ number_format($project->invoice_amount, 2) }}</p>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back to Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
