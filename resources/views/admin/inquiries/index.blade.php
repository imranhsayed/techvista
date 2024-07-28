@extends('layouts.app')

@section('content')
<section id="inquiries" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">{{ $title }}</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Notes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inquiries as $inquiry)
                        <tr>
                            <td>{{ htmlspecialchars($inquiry->name, ENT_QUOTES, 'UTF-8') }}</td>
                            <td>{{ htmlspecialchars($inquiry->email, ENT_QUOTES, 'UTF-8') }}</td>
                            <td>{{ htmlspecialchars($inquiry->phone, ENT_QUOTES, 'UTF-8') }}</td>
                            <td>{{ htmlspecialchars($inquiry->message, ENT_QUOTES, 'UTF-8') }}</td>
                            <td>
                            <form action="{{ route('admin.inquiries.updateStatus', $inquiry->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" class="form-select" onchange="this.form.submit()">
                                        <option value="Pending" {{ $inquiry->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Followed Up" {{ $inquiry->status == 'Followed Up' ? 'selected' : '' }}>Followed Up</option>
                                        <option value="Converted" {{ $inquiry->status == 'Converted' ? 'selected' : '' }}>Converted</option>
                                        <option value="Declined" {{ $inquiry->status == 'Declined' ? 'selected' : '' }}>Declined</option>
                                    </select>
                                </form>
                            </td>
                            <td>
                            <form action="{{ route('admin.inquiries.updateNotes', $inquiry->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <textarea name="notes" class="form-control" rows="2">{{ $inquiry->notes }}</textarea>
                                    <button type="submit" class="btn btn-primary mt-2">Update Notes</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
