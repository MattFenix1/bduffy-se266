<?php
include __DIR__ . '/model/model_users.php';
session_start();

if (isset($_POST['login'])){
    $un = filter_input(INPUT_POST, 'username');
    $pw = filter_input(INPUT_POST, 'password');

    $results = login($un, $pw);
    
    if($results){
        $_SESSION['username'] = $un;
        header("Location: movies_view.php");
    }
}

// if (isset($REQUEST['login'])){
//     $results = login($un, $pw);

//     foreach($results as $r){
//         $verify = password_verify($password, $r['password']);

//         if($verify){
//             $_SESSION['username'] = $r['username'];
//         }
//     }
//     header("Location: movies_view.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../External Files/style.css">
</head>
<body>
<div>
    <header>
        <img src="../External Files/clapper.png" alt="Clapper" class = "image">
        <h1>Movie List</h1>
    </header>
    <br>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" value="">
        <br>
        <br>
        <label>Password:</label>
        <input type="password" name="password" value="">
        <br>
        <br>
        <input type="submit" name="login" value="Login">
    </form>
    <footer>
    <p>&#169;Bryan Duffy</p>
    </footer>
</div>
</body>
</html>