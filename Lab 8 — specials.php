<?php
// This is the specials file
define('TITLE', 'Today\'s Specials');

// Include the header.html template
include('templates/header.html');
?>

<h1>Hayley Jolliffe's Pizza Specials</h1>
<?php
// Set timezone
date_default_timezone_set('America/Toronto');
print "<p>These are our specials for " . date('l F j, Y') . "</p>";
?>
<p>Extra Large Sea Pizza - $10.99</p>
<table>
<tr><td>
<h2>Toppings:</h2>
<ul>
    <li>Anchovies</li>
    <li>Crab</li>
    <li>Shrimp</li>
    <li>Tuna</li>
</ul>
</td><td>
<img src="images/seafood.jpg" alt="" />
</td></tr>
</table>
<?php
// Include the footer.html template
include('templates/footer.html');
?>
