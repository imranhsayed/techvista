@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header text-center">Inquirys</div>

					<div class="card-body">
						{{--Create Tran Link--}}
						<a href="{{ route('InquiryCreate') }}" class="btn btn-success mb-3">Create Inquiry</a>

						{{-- Search Form --}}
						<form action="{{ route('list') }}" method="GET" class="form-inline mb-3">
							<input type="text" name="search" class="form-control mr-2" placeholder="Search by name or description" value="{{ request()->query('search') }}">
							<button style="margin-top: 16px;" type="submit" class="btn btn-primary">Search</button>
						</form>

						{{--List Inquirys--}}
						<table class="table table-striped">
							<thead>
							<tr>
								<th>&nbsp;</th>
								<th>Name</th>
								<th>Short Description</th>
								<th>Started On</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							</thead>
							<tbody>
							@foreach( $inquiries as $inquiry )
								<tr>
									<td>
										<img class="train_thumb" width="100" height="50" src="/images/{{ $inquiry->image }}"
										     alt="{{ $inquiry->name }}">
									</td>
									<td>
										{{ $inquiry->name }}
									</td>
									<td>{{ $inquiry->short_description }}</td>
									<td>{{ $inquiry->started_on }}</td>
									<td>
										<a href="{{ route('InquiryEdit', ['id' => $inquiry->id]) }}" class="btn btn-primary btn-sm">Edit</a>
									</td>
									<td>
										<form action="{{ route('InquiryDelete', ['id' => $inquiry->id]) }}" method="POST">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger btn-sm">Delete</button>
										</form>
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
