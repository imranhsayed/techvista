@extends('layouts.app')

@section('content')
<header class="bg-primary bg-gradient text-white">
    <div class="container p-5 text-center">
        <h1 class="fw-bolder">Welcome to TechVista Innovations Ltd.</h1>
        <p class="lead">A Pioneer in Web Industry</p>
        <p>At TechVista Innovations Ltd., we are dedicated to providing top-notch software development services that cater to your unique business needs. Our mission is to empower businesses with innovative software solutions, guided by our core values of integrity, excellence, and collaboration. We specialize in creating customized software solutions that drive efficiency, productivity, and growth.</p>
        <a class="btn btn-lg btn-light" href="/">Start Your Journey</a>
    </div>
</header>

<section id="canadian" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2>Our Success Stories</h2>
                <div class="gallery">
                    {{-- <img src="images/project1.jpg" alt="Project 1"> --}}
                    {{-- <img src="images/project2.jpg" alt="Project 2"> --}}
                    {{-- <img src="images/team.jpg" alt="Our Team"> --}}
                </div>
                <p>Explore our portfolio of successful projects and get a glimpse of our dedicated team at work.</p>
            </div>
        </div>
    </div>
</section>
@endsection
