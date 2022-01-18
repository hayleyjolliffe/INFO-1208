<!DOCTYPE html>
<html lang="en-Us">
<head>
<meta charset="utf-8">
<title>Hotel Review</title>
</head>

<body>

<!-- PHP -->
<?php
// This script handles the data submitted by review.html
// Create the variables that will receive the data from the form
$hotel_chain = $_POST['hotel_chain'];
$name = $_POST['name'];
$email = $_POST['email'];
$response = $_POST['response'];

// Print the received data
print "<p> Thank you $name for submitting your review.</p>";
print "<p>You said that your stay at $hotel_chain was $response</p>"
?>
</body>
</html>
