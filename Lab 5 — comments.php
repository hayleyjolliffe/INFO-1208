<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>H_Jolliffe</title>
</head>

<body>
<?php
// This script receives data from comments.html

// Get variables from the POST array
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

// Create full name variable
$full_name = $fist_name . ' ' . $last_name;

// Print out a message to the user
print "<p>Thank you $full_name, for the following comments:</p>";
print "<p>$comments</p>";
?>
</body>
</html>
