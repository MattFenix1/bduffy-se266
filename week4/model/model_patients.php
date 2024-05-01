<?php

include(__DIR__ . '/db.php');

function getPatients(){
    global $db;

    $results = [];

    $stmt = $db->prepare("SELECT * FROM patients ORDER BY patientLastName");

    if($stmt->execute() && $stmt->rowCount() > 0){
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return ($results);
}

function addPatient($fn, $ln, $m, $bd){
    global $db;
    $results = "";
    $sql = "INSERT INTO patients SET patientFirstName = :firstName, patientLastName = :lastName, patientMarried = :married, patientBirthDate = :birthDate";
    $stmt = $db->prepare($sql);
    $binds = array(
        ":firstName" => $fn,
        ":lastName" => $ln,
        ":married" => $m,
        ":birthDate" => $bd
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = 'Data Added';
    }
    return($results);
}

$patients = getPatients();
