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
			@foreach( $inquiries as $inquiry )
				<tr>
					<td><img width="300" height="200" src="/images/{{ $inquiry->image }}" alt="{{ $inquiry->name }}"></td>
					<td>{{ $inquiry->name }}</td>
					<td>{{ $inquiry->short_description }}</td>
					<td><a class="btn btn-primary" href="/inquiries/{{ $inquiry->id }}">More</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
