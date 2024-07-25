@extends( 'layouts.app' )

@section( 'content' )
	<h1>{{ $title }}</h1>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img width="800" height="600" src="/images/{{ $train->image }}" class="img-fluid" alt="{{ $train->name }}">
				<p class="lead">{{ $train->short_description }}</p>
				<p>{{ $train->description }}</p>
				<ul class="list-group">
					<li class="list-group-item"><strong>Started On:</strong> {{ $train->started_on }}</li>
					<li class="list-group-item"><strong>Cost:</strong> {{ $train->cost }}</li>
					<li class="list-group-item"><strong>Speed:</strong> {{ $train->speed }}</li>
				</ul>
			</div>
		</div>
	</div>

@endsection
