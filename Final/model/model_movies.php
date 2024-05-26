<?php
include(__DIR__ . '/db.php');
function getMovies(){
    global $db;
    $results = [];
    $stmt = $db->prepare("SELECT * FROM movies ORDER BY moviename");
    if($stmt->execute() && $stmt->rowCount() > 0){
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return ($results);
};
function getMovie($id){
    global $db;
    $results = [];
    $stmt = $db->prepare("SELECT * FROM movies WHERE id = :id");
    $binds = array(
        ":id" => $id,
    );
    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    return ($results);
};
function addMovie($mn, $wh, $a, $wa){
    global $db;
    $results = "";
    $sql = "INSERT INTO movies SET moviename = :mn, wheretofind = :wh, addpeople = :a, watched = :wa";
    $stmt = $db->prepare($sql);
    $binds = array(
        ":mn" => $mn,
        ":wh" => $wh,
        ":a" => $a,
        ":wa" => $wa
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = 'Data Added';
    }
    return($results);
};
function deleteMovie($id){
    global $db;
    $results = "Data was not deleted.";
    $stmt = $db->prepare("DELETE FROM movies WHERE id=:id");
    $stmt->bindValue(':id', $id);
    if($stmt->execute() && $stmt->rowCount() > 0){
        $results = 'Data deleted.';
    }
    return $results;
};
function updateMovie($mn, $wh, $a, $wa, $id){
    global $db;
    $results = "";
    $sql = "UPDATE movies SET moviename = :mn, wheretofind = :wh, addpeople = :a, watched = :wa WHERE id = :id";
    $stmt = $db->prepare($sql);
    $binds = array(
        ":mn" => $mn,
        ":wh" => $wh,
        ":a" => $a,
        ":wa" => $wa,
        ":id" => $id
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = 'Data Updated';
    }
    return($results);
};