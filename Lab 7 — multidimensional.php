<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Hayley Jolliffe Multidimensional Array</title>

</head>

<body>
<?php
// first array containing meat toppings
$meat = [1 => 'Pepperoni', 'Bacon', 'Ham'];

// second array containing veggie toppings
$veggie = [1 => 'Spinach', 'Onions', 'Jalapenos'];

// third array containing other toppings
$other = [1 => 'Mushrooms', 'Feta', 'Cheddar', 'Pineapple'];

// main array containing all of the toppings available
$toppings = ['MEAT' => $meat, 'VEGGIE' => $veggie, 'OTHER' => $other];

print "<p>The default meat topping is: <b>{$toppings['MEAT'][1]}</b></p>";
?>
</body> 
</html>
