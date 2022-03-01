<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Hayley Jolliffe Array</title>

</head>

<body>

<h1>List of months</h1>

<?php
$months = [
1 => 'Jan',
'Feb',
'Mar',
'Apr',
'May',
'Jun',
'Jul',
'Aug',
'Sep',
'Oct',
'Nov',
'Dec'
];
// Print the number of every month
foreach ($months as $name => $month) {
	print "<p>$month is month number: $name</p>\n";
}
// Print the current number of months
$current = count($months);
print "<p>There are $current months</p>";
// Add 2 new months to the list
$months[] = 'Winter';
$months[] = 'Construction';
// Print the new number of months
$new = count($months);
print "<p>Now there are $new months</p>";
print_r ($months);
?>
    

</body> 
</html>
