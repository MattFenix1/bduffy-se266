<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <div>
            <h1>Movies</h1>
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
                        <td><?= $row['movieid'];?></td>
                        <td><?= $row['moviename']; ?></td>
                        <td><?= $row['wheretofind'];?></td>
                        <td><?= $row['addpeople'];?></td>
                        <td><?= $row['watched'];?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>