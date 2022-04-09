<!doctype html>
<html lang="en">
<head><title>Customer Login</title></head>
<body>
<h1>Customer Login</h1>
<?php // Select the file to use
$file = 'C:\\xampp\\customers\\customers.txt';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $loggedin = FALSE; // Currently not logged in

    // Enable auto_detect_line_settings
    ini_set('auto_detect_line_endings', 1);
    // Open the file
    $check = fopen($file, 'rb');

    while ( $line = fgetcsv($check, 200, "\t") ) {
        // Check the users creds
        if ( ($line[0] == $_POST['username']) AND ($_LINE[1] == sha1(trim($_POST['password1']))) ) {
            loggedin = TRUE; // Match found
            break;
        } // END of if

    } // END of WHILE
    fclose($check); // Close the file

    if ($loggedin) {
        print '<p>You are now logged in.</p>';
    } else {
        print '<p style="color: red;">The username or password you entered is incorrect</p>';
    }

} else { // Display the form
// Leave PHP and display the form
?>
<form action="login.php" method="post">
    <p>Username: <input type="text" name="username" size="20"></p>
    <p>Password: <input type="password" name="password" size="20"></p>
    <input type="submit" name="submit" value="Login">
</form>
<?php } // END of it ?>
</body>
</html> 
