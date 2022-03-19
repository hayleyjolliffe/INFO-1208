<?php // Test cookies using customize.php
// Check to see if the form has been submitted:
if (isset($_POST['font_size'], $_POST['font_color'])) {

    // Send the cookies:
    setcookie('font_size', $_POST['font_size']);
    setcookie('font_color', $_POST['font_color']);
    // Message to be printed later:
    $msg = '<p>Your settings have been entered! Now see
    them <a href="view_settings.php">in action</a>.</p>';
} // End of submitted IF.
?>
