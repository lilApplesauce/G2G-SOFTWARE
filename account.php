<?php

?>
<?php require "Layout/header2.php"; ?>
<title>Create an Account</title>

<form action="index.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="email" name="email"><br>
    Password: <input type="password" name="password" minlength="8"><br>
    <div style="text-align: center">
    <input type="submit">
    </div>
</form>

<?php
if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])){

}
else{

}
?>

<?php require "Layout/footer.php"; ?>
