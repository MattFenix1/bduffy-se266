<?php
    include __DIR__ . '/model/model_movies.php';
        $error = '';
        $moviename = '';
        $wheretofind = '';
        $addpeople = '';
        $watched = '';
        if (isset($_POST['moviename'])){
            $moviename = filter_input(INPUT_POST, 'moviename');
            $wheretofind = filter_input(INPUT_POST, 'wheretofind');
            $addpeople = filter_input(INPUT_POST, 'addpeople', FILTER_VALIDATE_FLOAT);
            $watched = filter_input(INPUT_POST, 'watched', FILTER_VALIDATE_FLOAT);
            $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_FLOAT);
        }
        if(isset($_POST['submit']) && $error == ""){
            addMovie ($moviename, $wheretofind, $addpeople, $watched);
            header('Location: movies_view.php');
        }
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
<header>
    <img src="../External Files/clapper.png" alt="Clapper" class = "image">
    <h1>Movie List</h1>
</header>
<nav>
    <a href="users_view.php">Logoff</a>
</nav>
    <form method="POST">
        <label for="moviename">Movie Title:</label><br>
        <input type="text" id="moviename" name="moviename" value="<?= $moviename ?>" required><br>
        
        <label for="wheretofind">Where To Find:</label><br>
        <input type="text" id="wheretofind" name="wheretofind" value="<?= $wheretofind ?>" required>
        
        <p>Additional People?</p>
        <input type="radio" id="yes" name="addpeople" value= 1>
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="addpeople" value= 0>
        <label for="no">No</label><br>

        <p>Watched?</p>
        <input type="radio" id="yes" name="watched" value= 1>
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="watched" value= 0>
        <label for="no">No</label><br>

        <input type="submit" name="submit" value="Add">
    </form>
    <a href="movies_view.php">View All Movies</a>
<footer>
    <p>&#169;Bryan Duffy</p>
</footer>
</body>
</html>