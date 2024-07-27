@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Project</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Project Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $project->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" required>{{ $project->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" id="status" value="{{ $project->status }}" required>
            </div>
            <div class="form-group">
                <label for="user_id">Assign to User</label>
                <select name="user_id" class="form-control" id="user_id" required>
                    @foreach (\App\Models\User::all() as $user)
                        <option value="{{ $user->id }}" {{ $project->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Project</button>
        </form>
    </div>
@endsection
