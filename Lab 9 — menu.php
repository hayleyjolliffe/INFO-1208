<?php
// Obtain Session Information
session_start();
// This is the specials file
define('TITLE', 'Our Menu');
// Include the header.html template
include('templates/header.html');
?>
<h1>Hayley Jolliffe's Pizza Menu</h1>
<?php
// Set timezone
date_default_timezone_set('America/Toronto');
print '<p><b>Hello, ' . $_SESSION['email'] . '!</b></p>';
print '<p>You have logged at: <b>' . date('g:i a ', $_SESSION['loggedin']) . '</b></p>';
?>
<p>Choose from our outstanding menu below!</p>
<table>
<tr><td>
<h3>Alternative Meat Pizza - $14.99</h3>
<ul>
<b>Toppings included:</b>
<li>Elk</li>
<li>Alligator</li>
<li>Snake</li>
<li>Boar Bacon</li>
</ul>
</td><td>
<img src="images/alternative_pizza.png" alt=""/>
</td></tr>
<tr><td>
<h3>Fruitarian Pizza - $24.99</h3>
<ul>
<b>Toppings included:</b>
<li>Bananas</li>
<li>Kiwi</li>
<li>Blueberries</li>
<li>Strawberries</li>
</ul>
</td><td>
<img src="images/fruit_pizza.png" alt=""/>
</td></tr>
<?php
// Logout link
print '<p><a href="logout.php">Logout</a></p>';
// Include the footer.html template
include('templates/footer.html');
?>
