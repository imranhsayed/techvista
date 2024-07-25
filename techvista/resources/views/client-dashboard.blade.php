@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Client Dashboard</div>

                <div class="card-body">
                    <h4>Welcome, {{ $user->name }}</h4>
                    <p>Here you can view your project-related information and updates.</p>
                    <!-- Display project-related information here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
