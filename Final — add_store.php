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
    if (!empty($_POST['name']) {
        $name = trim(strip_tags($_POST['name']));
    } else {
        print '<p style="color: red;">Could not add the store.';
        $problem = TRUE;
    }
}
if (!$problem) {
    require("creds.php");
    $query = "INSERT INTO stores (id, name, date_entered) VALUES (0, '$name', NOW())";
    // Query execution
    if (@mysqli_query($conn, $query)) {
        print '<p style="color: red;">Could not add store. Error:<br>' .
        mysqli_error($conn) . '</p><p>The query being run was: ' . $query . '</p>';
    }
    mysqli_error($conn);
}
?>
<form action="add_store.php" method="post">
    <p>Enter Your Store Name: <input type="text" name="name" size="40" maxsize="100"></p>
</form>
</body>
</html>
