<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hayley Jolliffe's Array Sort</title>
</head>
<body>
<?php 
// Create the array
$pizza_prices = [
	'Party' => 19.99,
	'Small' => 10.99,
	'X-Large' => 16.99, 
	'Medium' => 12.99,
	'Large' => 14.99,
	'Personal' => 9.97,
	];
// Print the original array:
print '<p>Originally the array looks like this: <br />';
foreach ($pizza_prices as $size => $price) {
	print "$size: $price<br />\n";
}
print '</p>';
// Sort by value in reverse order, then print again:
arsort($pizza_prices);
print '<p>After sorting the array by value using arsort(), the array looks like this: <br />';
foreach ($pizza_prices as $size => $price) {
	print "$size: $price<br>\n";
}
print '</p>';
// Sort by key, then print again:
ksort($pizza_prices);
print '<p>After sorting the array by key using ksort(), the array looks like this: <br />';
foreach ($pizza_prices as $size => $price) {
	print "$size: $price<br />\n";
}
print '</p>';
?>
</body>
</html>
