<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hayley Jolliffe - Thank you for your order</title>
</head>
<body>
<? php
// This script gets data from array_form.html
print "<p>You have ordered a <b>{$_POST['pizza_size']}</b> pizza with the following toppings: <br />"
// Print each selected topping:
if (isset($_POST['toppings']) AND is_array($_POST['toppings'])) {
    foreach ($_POST['toppings'] as $topped) {
        print "$topped<br />\n";
    }
} else {
    print 'Please select at least one topping';
}
print '</p>';
?>
</body>
</html>
