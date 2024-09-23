<?php
session_start();

// Simple validation (Replace with actual database checks)
if ($_POST['username'] == 'user' && $_POST['password'] == 'user123') {
    $_SESSION['username'] = $_POST['username'];

    // Check if 'role' is set in POST data, else assign a default value
    if (isset($_POST['role'])) {
        $_SESSION['role'] = $_POST['role'];
    } else {
        $_SESSION['role'] = 'guest'; // Assign default role if not provided
    }
} else {
    echo "Invalid login credentials!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Wanderlust Travels</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: purple;
            text-align: center;
            padding: 20px;
        }
        .container {
            width: 40%;
            margin: auto;
            padding: 20px;
            background-image: url('images/mkk.jpg');
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .option {
            margin: 10px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f0f0f0;
            cursor: pointer;
        }
        .option:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Your role: <?php echo $_SESSION['role']; ?></p> <!-- Display the role -->
        <p>Select an option below:</p>

        <div class="option" onclick="window.location.href='travelguides.php'">
            Access Travel Guides
        </div>
        
        <div class="option" onclick="window.location.href='bookingconfirmations.php'">
            Receive Booking Confirmations
        </div>
        <div class="option" onclick="window.location.href='bookticket.php'">
            Book a Ticket
        </div>
        <div class="option" onclick="window.location.href='sourcedestination.php'">
            Select Source and Destination
        </div>
        <div class="option" onclick="window.location.href='customersupport.php'">
            Customer Support
        </div>
        <div class="option" onclick="window.location.href='paymentoptions.php'">
            Payment Options
        </div>
        <div class="option" onclick="window.location.href='queries.php'">
            Pre and Post Booking Queries
        </div>

        <div class="option" onclick="window.location.href='logout.php'">
            Logout
        </div>
    </div>
</body>
</html>
