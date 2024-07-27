@extends('layouts.app')

@section('content')
<section id="company-background" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Company Background</h2>
        <p class="text-center text-secondary">
            Founded in 2010, TechVista Innovations Ltd. has been at the forefront of technological advancements, delivering cutting-edge software solutions to a diverse range of industries. Our journey began with a simple vision: to empower businesses with innovative technology that drives success and growth. Over the years, we have expanded our expertise and services, consistently upholding our core values of integrity, excellence, and customer-centricity.
        </p>
        <p class="text-center text-secondary">
            Our mission is to provide world-class software development services that meet the unique needs of our clients. We believe in building long-term partnerships based on trust, quality, and mutual respect. At TechVista Innovations Ltd., we are committed to continuous learning and improvement, ensuring that our solutions are not only innovative but also secure and reliable.
        </p>
    </div>
</section>

<section id="team-overview" class="py-5">
    <div class="container">
        <h2 class="text-center">Meet Our Team</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="images/ceo.jpg" alt="John Doe - CEO" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                <h3>John Doe</h3>
                <p><strong>Chief Executive Officer</strong></p>
                <p class="text-secondary">With over 20 years of experience in the tech industry, John Doe leads our team with a passion for innovation and a commitment to excellence. His strategic vision and leadership have been instrumental in the company's growth and success.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="images/cto.jpg" alt="Jane Smith - CTO" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                <h3>Jane Smith</h3>
                <p><strong>Chief Technology Officer</strong></p>
                <p class="text-secondary">Jane Smith is a seasoned technology expert with a deep understanding of software architecture and development. As CTO, she oversees the technical direction of our projects, ensuring that we leverage the latest technologies to deliver outstanding results.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="images/cmo.jpg" alt="Michael Brown - CMO" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                <h3>Michael Brown</h3>
                <p><strong>Chief Marketing Officer</strong></p>
                <p class="text-secondary">Michael Brown brings a wealth of marketing expertise to TechVista Innovations Ltd. As CMO, he is responsible for crafting and executing our marketing strategies, helping to expand our brand reach and drive business growth.</p>
            </div>
        </div>
    </div>
</section>
@endsection
