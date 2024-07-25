@extends( 'layouts.app' )

@section( 'content' )
	<h1>{{ $title }}</h1>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img width="800" height="600" src="/images/{{ $inquiry->image }}" class="img-fluid" alt="{{ $inquiry->name }}">
				<p class="lead">{{ $inquiry->short_description }}</p>
				<p>{{ $inquiry->description }}</p>
				<ul class="list-group">
					<li class="list-group-item"><strong>Started On:</strong> {{ $inquiry->started_on }}</li>
					<li class="list-group-item"><strong>Cost:</strong> {{ $inquiry->cost }}</li>
					<li class="list-group-item"><strong>Speed:</strong> {{ $inquiry->speed }}</li>
				</ul>
			</div>
		</div>
	</div>

@endsection
