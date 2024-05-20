<?php
    include __DIR__ . '/model/model_movies.php';
        $error = '';
        $movietitle = '';
        $wheretofind = '';
        $addpeople = '';
        $watched = '';
        if (isset($_POST['movietitle'])){
            $movietitle = filter_input(INPUT_POST, 'movietitle');
            $wheretofind = filter_input(INPUT_POST, 'wheretofind');
            $addpeople = filter_input(INPUT_POST, 'addpeople', FILTER_VALIDATE_FLOAT);
            $watched = filter_input(INPUT_POST, 'watched', FILTER_VALIDATE_FLOAT);
            $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_FLOAT);
        }
        if(isset($_POST['submit']) && $error == ""){
            updateMovie ($movietitle, $wheretofind, $addpeople, $watched);
            header('Location: movies_view.php');
        }
        if(isset($_POST['delete'])){
            deleteMovie($id);
            header('Location: movies_view.php');
        }
        if (isset($_GET['id'])){
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_FLOAT);

            $patient = getMovie($id);

            $movietitle = $movie['movietitle'];
            $wheretofind = $movie['wheretofind'];
            $addpeople = $movie['addpeople'];
            $watched = $movie['watched'];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <form method="POST">
        <label for="movietitle">Movie Title:</label><br>
        <input type="text" id="fname" name="movietitle" value="<?= $fname ?>" required><br>
        
        <label for="wheretofind">Where To Find:</label><br>
        <input type="text" id="lname" name="wheretofind" value="<?= $lname ?>" required>
        
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

        <input type="submit" name="submit" value="Update">
        <input type="submit" name="delete" value="Delete">
    </form>
    <a href="patients_view.php">View All Movies</a>
</body>
</html>