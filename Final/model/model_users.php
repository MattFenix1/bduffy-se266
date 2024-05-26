<?php
include __DIR__ . '/db.php';
function login($username, $password){
    global $db;
    $results =[];
    $stmt = $db->prepare("SELECT * FROM movieusers WHERE username = $username AND passwords = $password");
    if($stmt->execute() && $stmt->rowCount() > 0){
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return ($results);




}
function logoff(){
    kill_session();
}