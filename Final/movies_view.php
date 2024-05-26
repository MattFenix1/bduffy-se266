<?php
session_start();
$_SESSION['username'];
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
    <?php if(empty($_SESSION['username'])){?>
        <p>You did not login yet.</p>
    <?php }?>
    <?php if(!empty($_SESSION['username'])){?>
    <div>
        <header>
            <img src="../External Files/clapper.png" alt="Clapper" class = "image">
            <h1>Movie List</h1>
        </header>
        <nav>
            <a href="users_view.php">Logoff</a>
        </nav>
        <div>
                <h2>Movies</h2>
                <a href="add_movies.php">Add Movie</a>
            <?php
                include __DIR__ . '/model/model_movies.php';
                $movies = getMovies();
            ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Movie Title</th>
                    <th>Where To Find</th>
                    <th>Additional People?</th>
                    <th>Watched?</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movies as $row): ?>
                    <tr>
                        <td><?= $row['id'];?></td>
                        <td><?= $row['moviename']; ?></td>
                        <td><?= $row['wheretofind'];?></td>
                        <td><?= $row['addpeople'];?></td>
                        <td><?= $row['watched'];?></td>
                        <td><a href="update_movies.php?id=<?= $row['id']; ?>">EDIT</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
    <footer>
        <p>&#169;Bryan Duffy</p>
    </footer>
    <?php }?>
</body>
</html>