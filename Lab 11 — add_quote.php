<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add A Quotation</title>
</head>
<body>
<?php // Identify the file to use:
$file = './quotes.txt';
// Check for a form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( !empty($_POST['quote']) && ($_POST['quote'] != 'Enter your quotation here.') ) {

        if (is_writable($file)) { // Confirm that the file is writable
            file_put_contents($file, $_POST['quote'] . PHP_EOL, FILE_APPEND); // Write the data
            // Print a message
            print '<p>Your quotation has been stored.</p>';

        } else { // Could not open the file
            print '<p style="color: red;">Your quotation could not be stored due to a system error.</p>';
        }
    } else { // Failed to enter a quotation
        print '<p style="color: red;">Please enter a quotation!</p>';
    }
} // End of IF statement
?>
<form action="add_quote.php" method="post">
    <textarea name="quote" rows="5" cols="30">Enter your quotation here.</textarea><br>
    <input type="submit" name="submit" value="Add This Quote!">
</form>
</body>
</html>
