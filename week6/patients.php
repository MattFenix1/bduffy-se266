<?php
    include __DIR__ . '/model/model_patients.php';
    include '../External Files/Functions.php';
        $error = '';
        $fname = '';
        $lname = '';
        $married = '';
        $birthdate = '';
        if (isset($_POST['submit'])){ //Variables after submit button is pressed
            $fname = filter_input(INPUT_POST, 'fname');
            $lname = filter_input(INPUT_POST, 'lname');
            $married = filter_input(INPUT_POST, 'married', FILTER_VALIDATE_FLOAT);
            $birthdate = filter_input(INPUT_POST, 'birthdate');
        }
        if(isset($_POST['submit']) && $error == ""){
            addPatient ($fname, $lname, $married, $birthdate);
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
<?php if (isset($_POST['submit']) && $error == ""): ?>
    <h2>Patient was added</h2>
        
    <ul>
        <li><?= "First Name: $fname"; ?></li>
        <li><?= "Last Name: $lname"; ?></li>
        <li><?= "Married: $married" ?></li>
        <li><?= "BirthDate: $birthdate" ?></li>
    </ul>
    <a href="patients_view.php">View All Patients</a>
<?php endif; ?>
    <form method="POST"> <!--Beginning of form-->
        <label for="fname">First Name:</label><br> <!--First Name for form-->
        <input type="text" id="fname" name="fname" value="<?= $fname ?>" required><br>
        
        <label for="lname">Last Name:</label><br> <!--Last Name for form-->
        <input type="text" id="lname" name="lname" value="<?= $lname ?>" required>
        
        <p>Are you married?</p> <!--Choosing whether or not they are married-->
        <input type="radio" id="yes" name="married" value= 1>
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="married" value= 0>
        <label for="no">No</label><br>

        <label for="birthdate">Birth Date:</label> <!--Entering their birthdate-->
        <input type="date" id="birthdate" name="birthdate" max="2024-04-02" value="<?= $birthdate ?>" required><br>

        <input type="submit" name="submit" value="Submit"> <!--Submit button-->
    </form>
    <a href="patients_view.php">View All Patients</a>
</body>
</html>