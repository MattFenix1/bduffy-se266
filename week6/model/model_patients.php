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

function updatePatient($fn, $ln, $m, $bd){
    global $db;
    $results = "";
    $sql = "UPDATE patients SET patientFirstName = :firstName, patientLastName = :lastName, patientMarried = :married, patientBirthDate = :birthDate";
    $stmt = $db->prepare($sql);
    $binds = array(
        ":firstName" => $fn,
        ":lastName" => $ln,
        ":married" => $m,
        ":birthDate" => $bd
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = 'Data Updated';
    }
    return($results);
}
function searchPatients($first, $last, $married, $birth){
    global $db;
    $binds = array();

    $sql = "SELECT * FROM patients WHERE 0=0";
    if ($first != ""){
        $sql .= "AND patientFirstName LIKE :first";
        $binds['first'] = '%'.$first.'%';
    }
    if ($last != ""){
        $sql .= "AND patientLastName LIKE :last";
        $binds['last'] = '%'.last.'%';
    }
    if ($married != ""){
        $sql .= "AND patientMarried LIKE :married";
        $binds['married'] = '%'.married.'%';
    }
    if ($birth != ""){
        $sql .= "AND patientBirthDate LIKE :birth";
        $binds['birth'] = '%'.birth.'%';
    }
    $results = array();
    $stmt = $db->prepare($sql);
    if ($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return ($results);
}
$patients = getPatients();
