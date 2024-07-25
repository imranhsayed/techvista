@extends('layouts.app')

@section('content')
<div class="container">
    <section id="project-showcase">
        <h2>Project Showcase</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('images/project1.jpg') }}" alt="Project 1" class="img-fluid">
                <h3>Project 1: E-commerce Platform</h3>
                <p>A robust e-commerce platform developed for a leading retail company, featuring a seamless user experience and secure payment integration.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/project2.jpg') }}" alt="Project 2" class="img-fluid">
                <h3>Project 2: Healthcare Management System</h3>
                <p>An advanced healthcare management system designed to streamline patient records, appointments, and billing processes for a major hospital.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/project3.jpg') }}" alt="Project 3" class="img-fluid">
                <h3>Project 3: Mobile Banking App</h3>
                <p>A user-friendly mobile banking app developed for a financial institution, providing customers with easy access to their accounts and services on the go.</p>
            </div>
        </div>
    </section>

    <section id="client-testimonials">
        <h2>Client Testimonials</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-text">"TechVista Innovations Ltd. transformed our vision into reality with their exceptional software development skills. Their team was professional, responsive, and dedicated to delivering a top-quality product."</p>
                        <p class="card-text"><strong>- Client Name, Company</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-text">"The team at TechVista exceeded our expectations with their innovative solutions and commitment to our project. We highly recommend their services for anyone looking to develop cutting-edge software."</p>
                        <p class="card-text"><strong>- Client Name, Company</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="technologies-used">
        <h2>Technologies Used</h2>
        <p>We utilize a diverse range of technologies, frameworks, and tools to deliver high-quality software solutions. Our expertise includes:</p>
        <ul>
            <li>Frontend: HTML5, CSS3, JavaScript, Vue.js, React</li>
            <li>Backend: PHP, Laravel, Node.js, Python</li>
            <li>Mobile: Flutter, React Native</li>
            <li>Cloud: AWS, Azure, Google Cloud</li>
            <li>Databases: MySQL, PostgreSQL, MongoDB</li>
            <li>Others: Docker, Kubernetes, Jenkins</li>
        </ul>
    </section>
</div>
@endsection
