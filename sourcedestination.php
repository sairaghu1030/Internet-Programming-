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
    <title>Source and Destination - Wanderlust Travels</title>
</head>
<body>
    <h1>Select Source and Destination</h1>
    <form action="process_source_destination.php" method="POST">
        <label for="source">Source:</label>
        <input type="text" id="source" name="source" required><br><br>
        
        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" required><br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
