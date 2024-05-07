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

function getPatient($id){
    global $db;

    $results = [];

    $stmt = $db->prepare("SELECT * FROM patients WHERE id = :id");

    $binds = array(
        ":id" => $id,
    );

    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
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
    $sql = "UPDATE patients SET patientFirstName = :firstName, patientLastName = :lastName, patientMarried = :married, patientBirthDate = :birthDate WHERE id = :idParam";
    $stmt = $db->prepare($sql);
    $binds = array(
        ":firstName" => $fn,
        ":lastName" => $ln,
        ":married" => $m,
        ":birthDate" => $bd,
        ":idParam" => $pid
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = 'Data Updated';
    }
    return($results);
}
function deletePatient($id){
    global $db;
    $results = "Data was not deleted.";
    $stmt = $db->prepare("DELETE FROM patients WHERE id=:id");
    $stmt->bindValue(':id', $id);
    if($stmt->execute() && $stmt->rowCount() > 0){
        $results = 'Data deleted.';
    }
    return $results;
}
$patients = getPatients();
