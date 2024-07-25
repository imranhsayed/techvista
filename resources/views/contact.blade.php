@extends('layouts.app')

@section('content')
	<div class="d-flex justify-content-center">
		<h1>{{ $title }}</h1>
	</div>
	<div class="d-flex justify-content-center">
		<div class="card col-8">

			<div class="card-body">
				<form action="{{ route('InquiryStore') }}" method="POST" class="form" novalidate>
					@csrf
					<div class="form-group">
						<p><label for="name">Name</label><br />
							<input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}"><br />
							@error('name')<span class="text text-danger">{{ $message }}</span>@enderror</p>
					</div>

					<div class="form-group">
						<p><label for="email">Email</label><br />
							<input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}"><br />
							@error('email')<span class="text text-danger">{{ $message }}</span>@enderror</p>
					</div>

					<div class="form-group">
						<p><label for="phone">Phone</label><br />
							<input id="phone" type="text" name="phone" class="form-control" value="{{ old('phone') }}"><br />
							@error('phone')<span class="text text-danger">{{ $message }}</span>@enderror</p>
					</div>

					<div class="form-group">
						<p><label for="message">Message</label><br />
							<textarea rows="10" name="message" id="message" class="form-control">{{ old('message') }}</textarea><br />
							@error('message')<span class="text text-danger">{{ $message }}</span>@enderror
						</p>
					</div>

					<div class="form-group">
						<p><button class="btn btn-primary" type="submit">Submit</button></p>
					</div>
				</form>
			</div>

		</div>
	</div>
@endsection
