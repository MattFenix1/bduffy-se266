<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tasks for the Day:</h1>
    <ul>
        <li>
            <strong>Name: </strong> <?=$task['title'];?>
        </li>
        <li>
            <strong>Time Due: </strong> <?=$task['due'];?>
        </li>
        <li>
            <strong>Person Responsible: </strong> <?=$task['assigned to'];?>
        </li>
        <li>
            <strong>Status: </strong> 
            <?php
            if ($task['completed']) : ?>
                <span class="icon">&#9989;</span> <!--Creates the checkbox-->
            <?php else : ?>
                <span class="icon">Incomplete</span>
            <?php endif;?>
        </li>
    </ul>
</body>
</html>