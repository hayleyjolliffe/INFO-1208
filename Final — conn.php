<?php
$username = "reviews_system";
$password = "foobar";
$host = "localhost";
$database = "reviews";
if ($conn = mysqli_connect($host, $username, $password, $database)) {
    print '<p>Connection established</p>';
    // Close the connection
    mysqli_close($conn);
} else {
    print '<p style="color: red;">Error connecting to the database.</p>';
}
?>
