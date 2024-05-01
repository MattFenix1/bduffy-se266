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

function updatePatient($fn, $ln, $m, $bd, $pid){
    global $db;
    $results = "";
    $sql = "UPDATE patients SET patientFirstName = :firstName, patientLastName = :lastName, patientMarried = :married, patientBirthDate = :birthDate WHERE id = $pid";
    $stmt = $db->prepare($sql);
    $binds = array(
        ":firstName" => $fn,
        ":lastName" => $ln,
        ":married" => $m,
        ":birthDate" => $bd,
        ":id" => $pid
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = 'Data Updated';
    }
    return($results);
}
function deletePatient($id){
    $deleteSuccess = false;
    $teamTable = $this->teamData;
    $stmt = $teamTable->prepare("DELETE FROM patients WHERE id=:idParam");
    $stmt->bindValue(':idParam', $id);
    $deleteSuccess = ($stmt->execute() && $stmt->rowCount > 0);
    return $deleteSuccess;
}
$patients = getPatients();
