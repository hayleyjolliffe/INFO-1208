<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Hayley Jolliffe Registration Form</title>

</head>

<body>
<!-- Registration Form -->
<div>
    <p>Please fill out the form below to sign up and click Register</p>
    <form action="post_register.php" method="post">
        <p>Email Address: <input type="text" name="email" size="30"></p>
        <p>Password: <input type="password" name="password" size="30"></p>
        <p>Confirm Password: <input type="password" name="confirm" size="30"></p>
        <p>Month and Year of Birth:
            <select name="month">
            <option value="">Month</option>
            <?php // Print out 1-12 for months
            for ($i = 1; $i <=12; $i++) {
                  print "<option value=\"$i\">$i</option>\n";
            }
            ?>
            <input type="text" name="year" placeholder="YYYY" size="4"></p>
        <p>Favourite Colour: <select name="colour">
            <option value="">Pick one</option>
            <option value="black">Black</option>
            <option value="blue">Blue</option>
            <option value="pink">Pink</option>
            <option value="purple">Purple</option>
            </select></p>
        <p><input type="checkbox" name="terms" value="Yes">I agree to the terms of Service</p>
        <input type="submit" name="submit" value="Register">
    </form>
</div>
</body> 
</html>
