<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($task as $group => $details) : ?>
            <li><strong><?=$group?></strong><?=$details?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>