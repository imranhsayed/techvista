<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login - TechVista Innovations Ltd.</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="container">
        <h1>TechVista Innovations Ltd.</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="client-login.php">Login</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <section id="client-login">
        <div class="container">
            <h2>Client Login</h2>
            <p>Welcome back! Please log in to access your personalized account and project updates.</p>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <p>Forgot your password? <a href="forgot-password.php">Click here</a> to reset it.</p>
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
