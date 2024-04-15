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
        ?>

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