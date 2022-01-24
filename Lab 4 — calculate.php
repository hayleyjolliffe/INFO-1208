<!DOCTYPE html>
<html lang="en-Us">

<head>
<meta charset="utf-8">
<title>Product Shipping Calculator</title>
<style type="text/css">
    .number {
        font-weight:bold;
        color: red;
    }
</style>
</head>

<body>
<?php
/* This script takes values from calculator.html
and calculates the total cost and monthly payments */

// Get the values from the $_POST array
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];

// Calculate the total
$total = (($price * $quantity) + $shipping) - $discount;

// Determine the tax rate
$taxrate = $tax / 100;
$taxrate++;

// Factor in the tax rate
$total = $total * $taxrate;

// Calculate the monthly payments
$monthly = $total / $payments;

// Apply formatting to the monthly payment
$total = number_format($total, 2);
$monthly = number_format($monthly, 2);

// Print out the results
print "<p>You have selected to purchase:<br />
<span class=\"number\">$quantity widget(s) at $<span class=\"number\">$price</span> each.
The shipping cost is $<span class=\"number\">$shipping</span>. <br />
You have selected a <span class=\"number\">$tax%</span> tax rate.<br />

After your $<span class=\"number\">$discount</span> discount, the total cost is
$<span class=\"number\">$total</span>.<br />

Divided over <span class=\"number\">$payments</span> monthly payments, it comes to
$<span class=\"number\">$monthly</span> each month.</p>";

?>

</body>
</html>
