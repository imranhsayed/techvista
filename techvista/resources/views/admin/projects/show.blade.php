@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $project->name }}</h1>
        <p>{{ $project->description }}</p>
        <p>Status: {{ $project->status }}</p>
        <p>Assigned to: {{ $project->user->name }}</p>
    </div>
@endsection
