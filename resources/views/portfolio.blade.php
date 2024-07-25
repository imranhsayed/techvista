@extends('layouts.app')

@section('content')
	<section id="project-showcase">
		<div class="container">
			<h2>Project Showcase</h2>
			<div class="gallery">
				<div class="project">
					<img src="images/project1.jpg" alt="Project 1">
					<h3>Project 1: E-commerce Platform</h3>
					<p>A robust e-commerce platform developed for a leading retail company, featuring a seamless user experience and secure payment integration.</p>
				</div>
				<div class="project">
					<img src="images/project2.jpg" alt="Project 2">
					<h3>Project 2: Healthcare Management System</h3>
					<p>An advanced healthcare management system designed to streamline patient records, appointments, and billing processes for a major hospital.</p>
				</div>
				<div class="project">
					<img src="images/project3.jpg" alt="Project 3">
					<h3>Project 3: Mobile Banking App</h3>
					<p>A user-friendly mobile banking app developed for a financial institution, providing customers with easy access to their accounts and services on the go.</p>
				</div>
				<!-- Add more projects as needed -->
			</div>
		</div>
	</section>

	<section id="client-testimonials">
		<div class="container">
			<h2>Client Testimonials</h2>
			<div class="testimonials">
				<div class="testimonial">
					<p>"TechVista Innovations Ltd. transformed our vision into reality with their exceptional software development skills. Their team was professional, responsive, and dedicated to delivering a top-quality product."</p>
					<p><strong>- Client Name, Company</strong></p>
				</div>
				<div class="testimonial">
					<p>"The team at TechVista exceeded our expectations with their innovative solutions and commitment to our project. We highly recommend their services for anyone looking to develop cutting-edge software."</p>
					<p><strong>- Client Name, Company</strong></p>
				</div>
				<!-- Add more testimonials as needed -->
			</div>
		</div>
	</section>

	<section id="technologies-used">
		<div class="container">
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
		</div>
	</section>
@endsection
