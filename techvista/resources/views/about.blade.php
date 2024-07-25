@extends('layouts.app')

@section('content')
<div class="container">
    <section id="company-background">
        <h2>Company Background</h2>
        <p>
            Founded in 2010, TechVista Innovations Ltd. has been at the forefront of technological advancements, delivering cutting-edge software solutions to a diverse range of industries. Our journey began with a simple vision: to empower businesses with innovative technology that drives success and growth. Over the years, we have expanded our expertise and services, consistently upholding our core values of integrity, excellence, and customer-centricity.
        </p>
        <p>
            Our mission is to provide world-class software development services that meet the unique needs of our clients. We believe in building long-term partnerships based on trust, quality, and mutual respect. At TechVista Innovations Ltd., we are committed to continuous learning and improvement, ensuring that our solutions are not only innovative but also secure and reliable.
        </p>
    </section>

    <section id="team-overview">
        <h2>Meet Our Team</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/ceo.jpg') }}" alt="John Doe - CEO" class="img-fluid rounded-circle">
                <h3>John Doe</h3>
                <p><strong>Chief Executive Officer</strong></p>
                <p>With over 20 years of experience in the tech industry, John Doe leads our team with a passion for innovation and a commitment to excellence. His strategic vision and leadership have been instrumental in the company's growth and success.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/cto.jpg') }}" alt="Jane Smith - CTO" class="img-fluid rounded-circle">
                <h3>Jane Smith</h3>
                <p><strong>Chief Technology Officer</strong></p>
                <p>Jane Smith is a seasoned technology expert with a deep understanding of software architecture and development. As CTO, she oversees the technical direction of our projects, ensuring that we leverage the latest technologies to deliver outstanding results.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/cmo.jpg') }}" alt="Michael Brown - CMO" class="img-fluid rounded-circle">
                <h3>Michael Brown</h3>
                <p><strong>Chief Marketing Officer</strong></p>
                <p>Michael Brown brings a wealth of marketing expertise to TechVista Innovations Ltd. As CMO, he is responsible for crafting and executing our marketing strategies, helping to expand our brand reach and drive business growth.</p>
            </div>
        </div>
    </section>
</div>
@endsection
