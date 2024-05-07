<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Log-In</h2>
    <form method = "POST">
        <label>Username: </label>
        <input type = "text" name = "username" value = "">
        <br>
        <label>Password: </label>
        <input type = "text" name = "password" value = "">
        <br>
        <input type = "submit" name = "login" value = "Login">
    </form>
    <?php
    if (isset($_POST['submit'])){
        header("Location: patients_view.php");
    }
    ?>
</body>
</html>