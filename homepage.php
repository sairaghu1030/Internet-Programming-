<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore the World | Tourist Guide</title>
    <style>
        body {
            background-color: #f0f8ff; /* Light blue */
            color: #333;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            padding: 10px;
            text-align: center;
            color: white;
            position: relative;
        }

        /* Home and Logout button styles */
        .nav-buttons {
            position:absolute  ;
            top: 20px;
            right: 10px;
        }

        .nav-buttons a {
            background-color: white;
            color: #4CAF50;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
            font-weight: bold;
            border: 2px solid #4CAF50;
        }

        .nav-buttons a:hover {
            background-color: #4CAF50;
            color: white;
        }

        .hero {
            background: url('hero-image.jpg') no-repeat center center/cover;
            height: 8vh;
            color: white;
            text-align: center;
            padding: 150px 20px;
        }

        .hero h1 {
            font-size: 50px;
            margin: 0;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .section {
            padding: 60px 20px;
            text-align: center;
        }

        .section h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        /* Flexbox for 3 items per row */
        .destination-list {
            display: flex;
            justify-content: space-between; /* Even spacing between items */
            flex-wrap: wrap;
            gap: 30px;
            max-width: 1200px; /* Limiting the width of the container */
            margin: 0 auto; /* Center the content */
        }

        .destination {
            width: calc(33.333% - 20px); /* Each destination takes up 1/3 of the container */
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: white;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .destination:hover {
            transform: scale(1.05);
        }

        /* Make sure images are full width and height */
        .destination img {
            width: 100%;
            height: 200px; /* Adjust the height as needed */
            object-fit: cover;
            border-bottom: 2px solid #4CAF50;
        }

        .destination h3 {
            font-size: 24px;
            margin: 10px 0;
        }

        .destination p {
            font-size: 16px;
            padding: 0 10px 20px;
            color: #555;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .gallery-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
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

        footer a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <header>
        <div class="nav-buttons">
            <a href="travelguides.php">Home</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Logout</a>
        </div>
        <section id="home" class="hero">
            <h1>Welcome to Explore the World</h1>
            <p>Your journey begins here. Discover breathtaking destinations.The journey is never ending. There's always gonna be growth, improvement, adversity; you just gotta take it all in and do what's right, continue to grow, continue to live in the moment.
Read more at https://www.brainyquote.com/topics/journey-quotes</p>
        </section>
    </header>

    <section id="destinations" class="section">
        <div class="destination-list">
            <div class="destination">
                <img src="paris.jpg" alt="Paris">
                <h3>Paris, France</h3>
                <p>The city of love, art, and culture. Visit the Eiffel Tower and enjoy world-class cuisine.</p>
            </div>
            <div class="destination">
                <img src="bali.jpg" alt="Bali">
                <h3>Bali, Indonesia</h3>
                <p>Experience the beauty of tropical beaches, lush forests, and vibrant culture.</p>
            </div>
            <div class="destination">
                <img src="nyc.jpeg" alt="New York City">
                <h3>New York City, USA</h3>
                <p>The city that never sleeps! Explore Times Square, Central Park, and Broadway.</p>
            </div>
            <div class="destination">
                <img src="tokyo.jpg" alt="Tokyo">
                <h3>Tokyo, Japan</h3>
                <p>A city of contrasts. Discover the perfect blend of traditional and modern culture.</p>
            </div>
            <div class="destination">
                <img src="rome.jpg" alt="Rome">
                <h3>Rome, Italy</h3>
                <p>Step into history with ancient ruins, stunning architecture, and delicious Italian food.</p>
            </div>
            <div class="destination">
                <img src="cape-town.jpg" alt="Cape Town">
                <h3>Cape Town, South Africa</h3>
                <p>Breathtaking landscapes and rich history. Visit Table Mountain and enjoy wildlife safaris.</p>
            </div>
        </div>
    </section>

    

    <footer>
        <p>&copy; 2024 Explore the World. All Rights Reserved.</p>
       
    </footer>
</body>
</html>
