<!doctype html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <title>Hayley Jolliffe test</title>
</head>
<body>
     <h1>Hayley Jolliffe's Pizza Toppings:</h1>
<?php
     $topping_list = "
      Pepperoni
      Mushrooms
      Bacon
      Onions
      Green Pepper
      Pineapple";

      $topping_menu = nl2br($topping_list);
      echo "<b>List of Toppings: </b>" . $topping_menu;
?>
</body>
</html>
