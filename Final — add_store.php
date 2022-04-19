<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add a Store</title>
</head>
<body>
<h1>Add a Store</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate the input
    $problem = FALSE;
    if (!empty($_POST['name']) && !empty($_POST['review'])) {
        $name = trim(strip_tags($_POST['name']));
    } else {
        print '<p style="color: red;">Could not add the review because:<br>' .
        $problem = TRUE:
    }
    if (!$problem) {
        // Connect to the store database
        require("creds.php");
        // Define the query
        $query = "INSERT INTO entries (id, name, review, date_entered) VALUES (0, '$name', '$review', NOW())";
        // Execute the query:
        if (@mysqli_query($conn, $query)) {
            print '<p>The review has been added!</p>';
        } else {
            print '<p style="color: red;">Could not add the review because:<br>' .
            mysqli_error($conn) . '.</p><p>The query being run was: ' . $query . '</p>';
        }
        mysqli_erorr($conn); // Close the connection to the database
    } // No problem
} // End of form submission IF
// Display the form
?>
<form action="add_review.php" method="post">
    <p>Enter Your Store Name: <input type="text" name="name" size="40" maxsize="100"></p>
</form>
</body>
</html>
