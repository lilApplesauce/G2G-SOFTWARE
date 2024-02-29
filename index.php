<?php

?>

<html lang="en">
<?php require "Layout/header.php"; ?>

<?php
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])){
    echo "Welcome ";
   echo $_POST["name"];
   echo "<br>";
   echo "Your Email Address is: ";
   echo $_POST["email"];
}
else {
echo "Create an account to order items!";
}

?>


<?php require "Layout/footer.php"; ?>

</html>