<?php
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
?>