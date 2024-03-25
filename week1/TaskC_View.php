<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        foreach ($animals as $animal){ /*References the array from TaskC.php*/
            echo "<li>$animal</li>";/*Puts array into list format*/
        }
        ?>
    </ul>
</body>
</html>