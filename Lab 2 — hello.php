<!DOCTYPE html>
<html lang="en">
<head>
<title>Hayley Jolliffe's CSS</title>
<link href="first.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="wrapper">

<div id="insider">
<h1><a href="https://duckduckgo.com" target="_blank">The Best Search Engine</a></h1>
<h2 class="green">Mission Status:</h2>
<p class="green">Hayley Jolliffe declares success</p>
<?php
$student_name = "Hayley Jolliffe";
$student_number = 000000;
echo "<h1 class=\"red\">Student Name: " . $student_name . "</h1>";
echo "<p class=\"heavy\">Student Number: " . $student_number . "</p>";
echo "<br /><br />";
print_r($_SERVER);
?>
</div><!-- END of insider -->

</div><!-- END of wrapper -->
</body>
</html>
