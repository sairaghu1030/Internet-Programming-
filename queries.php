<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre/Post Booking Queries - Wanderlust Travels</title>
</head>
<body>
    <h1>Pre and Post Booking Queries</h1>
    <p>Submit your queries regarding bookings, payments, or any other concerns.</p>
    <form action="process_query.php" method="POST">
        <label for="query_type">Query Type:</label><br>
        <select id="query_type" name="query_type" required>
            <option value="pre_booking">Pre-Booking</option>
            <option value="post_booking">Post-Booking</option>
        </select><br><br>

        <label for="details">Describe your query:</label><br>
        <textarea id="details" name="details" rows="6" cols="40" required></textarea><br><br>
        <button type="submit">Submit Query</button>
    </form>
</body>
</html>
