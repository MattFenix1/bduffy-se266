<?php
include __DIR__ . '/db.php';
function login($username, $password){
    global $db;
    $results =[];
    $stmt = $db->prepare("SELECT * FROM movieusers WHERE username = :user AND passwords = :pass");

    $binds = array(
        ":user" => $username,
        ":pass" => $password
    );

    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return( $stmt->rowCount() > 0);

}
function logoff(){
    kill_session();
}