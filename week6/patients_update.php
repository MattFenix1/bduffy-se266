<?php
    include __DIR__ . '/model/model_patients.php';
    include '../External Files/Functions.php';
        $error = '';
        $fname = '';
        $lname = '';
        $married = '';
        $birthdate = '';
        if (isset($_POST['fname'])){ //Variables after submit button is pressed
            $fname = filter_input(INPUT_POST, 'fname');
            $lname = filter_input(INPUT_POST, 'lname');
            $married = filter_input(INPUT_POST, 'married', FILTER_VALIDATE_FLOAT);
            $birthdate = filter_input(INPUT_POST, 'birthdate');
            $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_FLOAT);
        }
        if(isset($_POST['submit']) && $error == ""){
            updatePatient ($fname, $lname, $married, $birthdate);
            header('Location: patients_view.php');
        }
        if(isset($_POST['delete'])){
            deletePatient($id);
            header('Location: patients_view.php');
        }
        if (isset($_GET['id'])){
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_FLOAT);

            $patient = getPatient($id);

            $fname = $patient['patientFirstName'];
            $lname = $patient['patientLastName'];
            $married = $patient['patientMarried'];
            $birthdate = $patient['patientBirthDate'];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $action ?> Patients</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

        <input type="submit" name="submit" value="Update"> <!--Submit button-->
        <input type="submit" name="delete" value="Delete">
    </form>
    <a href="patients_view.php">View All Patients</a>
</body>
</html>