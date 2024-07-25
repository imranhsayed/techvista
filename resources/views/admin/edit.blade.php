@extends('layouts.app')

@section('content')
	<div class="d-flex justify-content-center">
		<h1>{{ $title }}</h1>
	</div>
	<div class="d-flex justify-content-center">
		<div class="card col-8">

			<div class="card-body">

				<form action="{{ route('TrainUpdate', ['id' => $post->id]) }}"
				      method="post" class="form" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<p><label for="name">Name</label><br />
							<input type="text" name="name" class="form-control"
							       value="{{ old('name', $post->name) }}"><br />
							<x-val-error field='name' />
						</p>
					</div>

					<div class="form-group">
						<p><label for="started_on">Started On</label><br />
							<input type="text" name="started_on" class="form-control"
							       value="{{ old('started_on', $post->started_on) }}"><br />
							@error('started_on')<span class="text text-danger">{{ $message }}</span>@enderror</p>
					</div>

					<div class="form-group">
						<p><label for="cost">Cost</label><br />
							<input type="text" name="cost" class="form-control"
							       value="{{ old('cost', $post->cost) }}"><br />
							@error('cost')<span class="text text-danger">{{ $message }}</span>@enderror</p>
					</div>

					<div class="form-group">
						<p><label for="speed">Speed</label><br />
							<input type="text" name="speed" class="form-control"
							       value="{{ old('speed', $post->speed) }}"><br />
							@error('speed')<span class="text text-danger">{{ $message }}</span>@enderror</p>
					</div>

					<div class="form-group">
						<p><label for="short_description">Short Description</label><br />
							<textarea rows="5" name="short_description" id="short_description"
							          class="form-control">{{ old('short_description', $post->short_description ) }}</textarea><br />
							@error('short_description')<span class="text text-danger">{{ $message }}</span>@enderror
						</p>
					</div>

					<div class="form-group">
						<p><label for="description">Description</label><br />
							<textarea rows="10" name="description" id="description"
							          class="form-control">{{ old('description', $post->description) }}</textarea><br />
							@error('description')<span class="text text-danger">{{ $message }}</span>@enderror
						</p>
					</div>

					<div class="form-group">
						<p><label for="image">Image</label><br />
						<p><img width="200" height="100" class="image_thumb" src="/images/{{ $post->image }}"
						        alt="{{ $post->title }}" /></p>
						<input type="file" name="image" id="image"></p>
					</div>

					<div class="form-group">
						<p><button class="btn btn-primary" type="submit">Submit</button></p>
					</div>
				</form>
			</div>

		</div>
	</div>

@endsection
