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
            <h1>Patients</h1>
        <?php
            include __DIR__ . '/model/model_patients.php';
            $patients = getPatients();
            $patients = searchPatients($fn, $ln, $m, $bd);
        ?>
        <h2>Search for Patient</h2>
        <form action="#" method="post">
            <input type="hidden" name="action" value="search">
            <label>First Name:</label>
            <input type="text" name="firstName" value="">
            <label>Last Name:</label>
            <input type="text" name="lastName" value="">
            <label>Married:</label>
            <input type="text" name="married" value="">
            <label>BirthDate:</label>
            <input type="DateTime" name="birthDate" value="">
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient First Name</th>
                    <th>Patient Last Name</th>
                    <th>Married</th>
                    <th>Patient Birth Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patients as $row): ?>
                    <tr>
                        <td><?= $row['id'];?></td>
                        <td><?= $row['patientFirstName']; ?></td>
                        <td> <?= $row['patientLastName'];?></td>
                        <td><?= $row['patientMarried'];?></td>
                        <td><?= $row['patientBirthDate'];?></td>
                        <td><a href="patients_update.php">Update Patient</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br />
        <a href="patients.php">Add Patient</a>
        </div>
    </div>
</body>
</html>