@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

	<section id="introduction">
		<div class="container">
			<h2>Welcome to TechVista Innovations Ltd.</h2>
			<p>
				At TechVista Innovations Ltd., we are dedicated to providing top-notch software development services that cater to your unique business needs. Our mission is to empower businesses with innovative software solutions, guided by our core values of integrity, excellence, and collaboration. We specialize in creating customized software solutions that drive efficiency, productivity, and growth.
			</p>
		</div>
	</section>

	<section id="visuals">
		<div class="container">
			<h2>Our Success Stories</h2>
			<div class="gallery">
{{--				<img src="images/project1.jpg" alt="Project 1">--}}
{{--				<img src="images/project2.jpg" alt="Project 2">--}}
{{--				<img src="images/team.jpg" alt="Our Team">--}}
			</div>
			<p>Explore our portfolio of successful projects and get a glimpse of our dedicated team at work.</p>
		</div>
	</section>
</div>
@endsection
