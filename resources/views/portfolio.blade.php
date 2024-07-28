@extends('layouts.app')

@section('content')
<section id="project-showcase" class="py-5">
    <div class="container">
        <h2 class="text-center">Project Showcase</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="images/pexels-life-of-pix.jpg" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h3 class="card-title">Project 1: E-commerce Platform</h3>
                        <p class="card-text">A robust e-commerce platform developed for a leading retail company, featuring a seamless user experience and secure payment integration.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="images/pexels-life-of-pix.jpg" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h3 class="card-title">Project 2: Healthcare Management System</h3>
                        <p class="card-text">An advanced healthcare management system designed to streamline patient records, appointments, and billing processes for a major hospital.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="images/pexels-life-of-pix.jpg" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h3 class="card-title">Project 3: Mobile Banking App</h3>
                        <p class="card-text">A user-friendly mobile banking app developed for a financial institution, providing customers with easy access to their accounts and services on the go.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="client-testimonials" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Client Testimonials</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <p class="card-text">"TechVista Innovations Ltd. transformed our vision into reality with their exceptional software development skills. Their team was professional, responsive, and dedicated to delivering a top-quality product."</p>
                        <p class="card-footer text-right"><strong>- Client Name, Company</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <p class="card-text">"The team at TechVista exceeded our expectations with their innovative solutions and commitment to our project. We highly recommend their services for anyone looking to develop cutting-edge software."</p>
                        <p class="card-footer text-right"><strong>- Client Name, Company</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="technologies-used" class="py-5 bg-light">
    <div class="container">
        <div class="p-4 bg-white shadow rounded">
            <h2 class="text-center mb-4">Technologies Used</h2>
            <p class="text-center mb-5">We utilize a diverse range of technologies, frameworks, and tools to deliver high-quality software solutions. Our expertise includes:</p>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="box p-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-0 mb-3">
                                <strong>Frontend:</strong> HTML5, CSS3, JavaScript, Vue.js, React
                            </li>
                            <li class="list-group-item p-0 mb-3">
                                <strong>Backend:</strong> PHP, Laravel, Node.js, Python
                            </li>
                            <li class="list-group-item p-0 mb-3">
                                <strong>Mobile:</strong> Flutter, React Native
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="box p-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-0 mb-3">
                                <strong>Cloud:</strong> AWS, Azure, Google Cloud
                            </li>
                            <li class="list-group-item p-0 mb-3">
                                <strong>Databases:</strong> MySQL, PostgreSQL, MongoDB
                            </li>
                            <li class="list-group-item p-0 mb-3">
                                <strong>Others:</strong> Docker, Kubernetes, Jenkins
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
