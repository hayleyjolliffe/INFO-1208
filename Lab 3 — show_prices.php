<!DOCTYPE html>
<html lang="en-Us">
<head>
<meta charset="utf-8">
<title>Welcome to Hayley Jolliffe's page</title>
</head>

<body>
<?php
// Get the size of the selected pizza
$size = $_GET['size'];
print "<p>You have  selected a <b>$size</b> Pizza!</p>";
if ($size == 'large') {
	print "A Large pizza costs $16.99";
}
elseif ($size == 'medium') {
	print "A Medium pizza costs $14.99";
}
else {
	print "A Small pizza costs $12.99";
}
?>
</body>
</html>
