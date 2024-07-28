@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Project</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.projects.update', $project->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" required>{{ $project->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="Pending" {{ $project->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="Followed Up" {{ $project->status == 'Followed Up' ? 'selected' : '' }}>Followed Up</option>
                                    <option value="Converted" {{ $project->status == 'Converted' ? 'selected' : '' }}>Converted</option>
                                    <option value="Declined" {{ $project->status == 'Declined' ? 'selected' : '' }}>Declined</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="invoice">Invoice</label>
                                <input type="text" class="form-control" id="invoice" name="invoice" value="{{ $project->invoice }}">
                            </div>
                            <div class="form-group">
                                <label for="invoice_amount">Invoice Amount</label>
                                <input type="number" class="form-control" id="invoice_amount" name="invoice_amount" value="{{ $project->invoice_amount }}" step="0.01">
                            </div>
                            <div class="form-group">
                                <label for="user_id">Assign to User</label>
                                <select class="form-control" id="user_id" name="user_id" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ $project->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
