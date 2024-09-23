<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore the World | Tourist Guide</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #333;
            background-color: #f0f8ff; /* Light blue background */
        }

        header {
            background-color: #4CAF50;
            padding: 10px;
            text-align: center;
            color: white;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .hero {
            background: url('hero-image.jpg') no-repeat center center/cover;
            height: 60vh;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 50px;
            margin: 0;
        }

        .hero p {
            font-size: 20px;
        }

        .section {
            padding: 60px 20px;
            text-align: center;
        }

        .section h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .options-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }

        .option {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 250px;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .option h3 {
            margin-bottom: 10px;
            font-size: 24px;
        }

        .option a {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            font-size: 16px;
        }

        footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#guides">Access Travel Guides</a></li>
                <li><a href="#bookings">Receive Booking Confirmations</a></li>
                <li><a href="#book-ticket">Book a Ticket</a></li>
                <li><a href="#support">Customer Support</a></li>
                <li><a href="#queries">Pre and Post Booking Queries</a></li>
                <li><a href="#logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <h1>Welcome to Explore the World</h1>
        <p>Discover top destinations and plan your next adventure with us!</p>
        <a href="#guides" class="btn">Explore Now</a>
    </section>

    <section id="services" class="section">
        <h2>Our Services</h2>
        <div class="options-list">
            <div class="option">
                <h3>Access Travel Guides</h3>
                <p>Get in-depth information about various travel destinations.</p>
                <a href="homepage.php">Learn More</a>
            </div>
            <div class="option">
                <h3>Receive Booking Confirmations</h3>
                <p>View and manage your booking confirmations quickly.</p>
                <a href="#bookings">Check Bookings</a>
            </div>
            <div class="option">
                <h3>Book a Ticket</h3>
                <p>Find and book tickets for your desired destinations.</p>
                <a href="#book-ticket">Book Now</a>
            </div>
            <div class="option">
                <h3>Select Source and Destination</h3>
                <p>Choose your source and destination for a seamless journey.</p>
                <a href="#source-destination">Select Locations</a>
            </div>
            <div class="option">
                <h3>Customer Support</h3>
                <p>Need help? Get 24/7 support for all your travel needs.</p>
                <a href="#support">Contact Support</a>
            </div>
            <div class="option">
                <h3>Payment Options</h3>
                <p>Choose from multiple secure payment options for booking.</p>
                <a href="#payments">Make Payment</a>
            </div>
            <div class="option">
                <h3>Pre and Post Booking Queries</h3>
                <p>Have queries? Reach out to us before or after your booking.</p>
                <a href="#queries">Ask Now</a>
            </div>
            <div class="option">
                <h3>Logout</h3>
                <p>Securely log out from your account when done.</p>
                <a href="#logout">Logout</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Explore the World. All Rights Reserved.</p>
    </footer>
</body>
</html>
