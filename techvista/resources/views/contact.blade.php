@extends('layouts.app')

@section('content')
<div class="container">
    <section id="contact-form">
        <h2>Contact Us</h2>
        <p>If you have any inquiries or would like to discuss a project, please fill out the form below, and we will get back to you as soon as possible.</p>
        <form action="{{ route('contact.submit') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="tel" id="phone" name="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" name="message" rows="6" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

    <section id="contact-details">
        <h2>Our Office</h2>
        <p>Visit us at our office or get in touch via phone or email.</p>
        <div class="row">
            <div class="col-md-6 text-center">
                <h3>Office Location</h3>
                <p>123 TechVista Ave,<br>Innovation City, 12345,<br>Country</p>
            </div>
            <div class="col-md-6 text-center">
                <h3>Contact Information</h3>
                <p><strong>Phone:</strong> +123-456-7890</p>
                <p><strong>Email:</strong> contact@techvista.com</p>
            </div>
        </div>
    </section>
</div>
@endsection
