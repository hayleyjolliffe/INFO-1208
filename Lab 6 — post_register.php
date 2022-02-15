<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Hayley Jolliffe Registration</title>
    <style type="text/css" media="screen">
        .error {
            color:red;
        }
    </style>

</head>

<body>
<?php
// This script receives data from register.html
print "<h1>Registration Confirmation</h1>";
// Initialize the flag variable
$okay = true;
// Validate the email address
if (empty($_POST['email'])) {
    print '<p class="error"> Please enter your email address.</p>';
    $okay = false;
}
// Validate the password address
if (empty($_POST['password'])) {
    print '<p class="error"> Please enter your password.</p>';
    $okay = false;
}
// Check to see if the password entries match
if ($_POST['password'] != $_POST['confirm']) {
    print '<p class="error">Passwords do not match</p>';
    $okay = false;
}
// Validate the year of birth
if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)) {
    // Check to see if the year of birth is before current year
    if ($_POST['year'] < date('Y')) {
        $age = date('Y') - $_POST['year'];
    } else {
        print '<p class="error">Your birthdate is in the future!</p>';
        $okay = false;
    }
} else {
    print '<p class="error">Please enter a valid 4 digit year</p>';
    $okay = false;
}
// Validate the terms of service
if (!isset($_POST['terms'])) {
    print '<p class="error">You must accept the terms of service</p>';
    $okay = false;
}
// Validate the colour
if ($_POST['colour'] == 'black') {
    $colour_type = 'Midnight';
} elseif ($_POST['colour'] == 'blue') {
    $colour_type = 'Water';
} elseif ($_POST['colour'] == 'pink') {
    $colour_type = 'Roses';
} elseif ($_POST['colour'] == 'purple') {
    $colour_type = 'Royalty';
} else  {// Colour not selected!
    print '<p class="error"> Please select a colour</p>';
    $okay = false;
}
// If there are no errors, print a confirmation message
if ($okay) {
    print "Success! Thank you for registering.";
    print "<p>You are $age this year.</p>";
    print "<p>Your favourite colour is like $colour_type</p>";
}
?>
</body>
</html>
