@extends( 'layouts.app' )

@section( 'content' )
	<h1>{{ $title }}</h1>

	<table class="table table-striped">
		<thead>
		<th>&nbsp;</th>
		<th>Title</th>
		<th>Description</th>
		<th>&nbsp;</th>
		</thead>
		<tbody>
			@foreach( $trains as $train )
				<tr>
					<td><img width="300" height="200" src="/images/{{ $train->image }}" alt="{{ $train->name }}"></td>
					<td>{{ $train->name }}</td>
					<td>{{ $train->short_description }}</td>
					<td><a class="btn btn-primary" href="/trains/{{ $train->id }}">More</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
