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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#payNowModal">
                            Pay Now
                        </button>
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back to Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="payNowModal" tabindex="-1" aria-labelledby="payNowModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="payNowModalLabel">Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    PAYMENT GATEWAY COMING SOON. HOLD YOUR HORSES.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
