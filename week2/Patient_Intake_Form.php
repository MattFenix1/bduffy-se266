<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //Initial variables
        $fname = '';
        $lname = '';
        $married = '';
        $birthdate = '';
        $heightft = '';
        $heightinch = '';
        $weight = '';

        require '../External Files/Functions.php';
        if (isset($_POST['submit'])){ //Variables after submit button is pressed
            $fname = filter_input(INPUT_POST, 'fname');
            $lname = filter_input(INPUT_POST, 'lname');
            $married = filter_input(INPUT_POST, 'married', FILTER_VALIDATE_FLOAT);
            $birthdate = filter_input(INPUT_POST, 'birthdate', FILTER_VALIDATE_FLOAT);
            $heightft = filter_input(INPUT_POST, 'heightft', FILTER_VALIDATE_FLOAT);
            $heightinch = filter_input(INPUT_POST, 'heightinch', FILTER_VALIDATE_FLOAT);
            $weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_FLOAT);
            $age = age($birthdate);
            $bmi = bmi($heightft, $heightinch, $weight);
        }
    ?>
    <form method="POST"> <!--Beginning of form-->
        <label for="fname">First Name:</label><br> <!--First Name for form-->
        <input type="text" id="fname" name="fname" value="<?= $fname ?>" required><br>
        
        <label for="lname">Last Name:</label><br> <!--Last Name for form-->
        <input type="text" id="lname" name="lname" value="<?= $lname ?>" required>
        
        <p>Are you married?</p> <!--Choosing whether or not they are married, would not show up in results-->
        <input type="radio" id="yes" name="married" <?php if (isset($married) && $married == "yes") echo "checked"; ?> value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="married" <?php if (isset($married) && $married == "no") echo "checked"; ?> value="no">
        <label for="no">No</label><br>

        <label for="birthdate">Birth Date:</label> <!--Entering their birthdate, would not show up in results-->
        <input type="date" id="birthdate" name="birthdate" max="2024-04-02" value="<?= $birthdate ?>" required><br>

        <label for="height">Height:</label><br> <!--Entering their height in feet then inches-->
        <label>Feet:</label>
        <input type="number" name="heightft" value="<?= $heightft ?>" required><br>
        <label>Inches:</label>
        <input type="number" name="heightinch" value="<?= $heightinch ?>" required><br>

        <label for="weight">Weight (in lbs.):</label><br> <!--Entering their weight in pounds-->
        <input type="number" name="weight" value="<?= $weight ?>" required max="1000"><br><br>

        <input type="submit" name="submit" value="Submit"> <!--Submit button-->
    </form>

    <?php if (isset($_POST['submit'])): ?> <!--Results after hitting the submit button-->
        <hr>
        <p><span>First Name:</span> <?= $fname; ?></p>
        <p><span>Last Name:</span> <?= $lname; ?></p>
        <p><span>Married:</span> <?= $married; ?></p>
        <p><span>Birthdate:</span> <?= $birthdate; ?></p>
        <p><span>Height:</span> <?= $heightft; ?> Feet <?= $heightinch; ?> Inches</p>
        <p><span>Weight:</span> <?= $weight; ?></p>
        <p><span>Age:</span> <?= age($birthdate)?></p> <!--Could not get to show-->
        <p><span>BMI:</span> <?= $bmi?></p> <!--Could not get to show-->
        <p><span>BMI Classification:</span> <?= bmiDescription($bmi)?></p>
    <?php endif; ?>
</body>
</html>