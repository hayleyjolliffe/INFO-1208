<?php
// KJARTAN'S SAMPLE DELETE CODE
$query="DELETE FROM entries WHERE id={$_POST['id']} LIMIT 1";
$r=mysqli_query($conn,$query);
if (mysqli_affected_rows($conn)==1) {
    //it worked!
}

// KJARTAN'S SAMPLE UPDATE CODE
$query="UPDATE entries SET name='$name', review='$review' WHERE
id={$_POST['id']}";
$r=mysqli_query($conn,$query);
if (mysqli_affected_rows($conn)==1) {
    //it worked!
}
?>
