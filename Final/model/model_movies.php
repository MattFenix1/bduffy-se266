<?php
function getMovies(){
    global $db;

    $results = [];

    $stmt = $db->prepare("SELECT * FROM patients ORDER BY patientLastName");

    if($stmt->execute() && $stmt->rowCount() > 0){
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return ($results);
};
function getMovie($id){

};
function addMovie($movietitle, $wheretofind, $addpeople, $watched){
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
};
function deleteMovie($id){

};
function updateMovie($m, $wh, $a, $wa){
    global $db;
    $results = "";
    $sql = "UPDATE movies SET movietitle = :mt, wheretofind = :wh, addpeople = :a, watched = :wa";
    $stmt = $db->prepare($sql);
    $binds = array(
        ":mt" => $mt,
        ":wh" => $wh,
        ":a" => $a,
        ":wa" => $wa
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = 'Data Updated';
    }
    return($results);
};