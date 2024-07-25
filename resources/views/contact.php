<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us - TechVista Innovations Ltd.</title>
	<link rel="stylesheet" href="css/contact.css">
</head>
<body>
<header>
	<div class="container">
		<h1>TechVista Innovations Ltd.</h1>
		<nav>
			<ul>
				<li><a href="/techvista">Home</a></li>
				<li><a href="/techvista/about.php">About Us</a></li>
				<li><a href="/techvista/services.php">Services</a></li>
				<li><a href="/techvista/portfolio.php">Portfolio</a></li>
				<li><a href="/techvista/contact.php">Contact</a></li>
				<li><a href="/techvista/faq.php">FAQ</a></li>
				<li><a href="/techvista/client-login.php">Login</a></li>
			</ul>
		</nav>
	</div>
</header>

<main>
	<section id="contact-form">
		<div class="container">
			<h2>Contact Us</h2>
			<p>If you have any inquiries or would like to discuss a project, please fill out the form below, and we will get back to you as soon as possible.</p>
			<form action="submit_contact.php" method="post">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>

				<label for="phone">Phone:</label>
				<input type="tel" id="phone" name="phone">

				<label for="message">Message:</label>
				<textarea id="message" name="message" rows="6" required></textarea>

				<button type="submit">Submit</button>
			</form>
		</div>
	</section>

	<section id="contact-details">
		<div class="container">
			<h2>Our Office</h2>
			<p>Visit us at our office or get in touch via phone or email.</p>
			<div class="details">
				<div class="location">
					<h3>Office Location</h3>
					<p>123 TechVista Ave,<br>Innovation City, 12345,<br>Country</p>
				</div>
				<div class="contact-info">
					<h3>Contact Information</h3>
					<p><strong>Phone:</strong> +123-456-7890</p>
					<p><strong>Email:</strong> contact@techvista.com</p>
				</div>
			</div>
		</div>
	</section>
</main>

<footer>
	<div class="container">
		<p>&copy; 2024 TechVista Innovations Ltd. All Rights Reserved.</p>
	</div>
</footer>
</body>
</html>
