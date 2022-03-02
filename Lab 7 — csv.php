<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hayley Jolliffe Transformed</title>
</head>
<body>
<?php
// Turn the posted string into an array:
$grades_array = explode(',' , $_POST['grades']);
// Sort the array:
sort($grades_array);
// Turn the array back into a string
$string_grades = implode('<br />', $grades_array);
// Print the results:
print "<p>A sorted version of the submitted grades is: <br />$string_grades</p>";
?>
</body>
</html>
