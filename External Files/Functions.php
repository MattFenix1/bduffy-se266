<?php
function verification($data){
    if($data >= 21){ /*Checks whether the data value is 21 or above.*/
        echo 'Come on in!';
    } 
    else {
        echo 'You may not enter.';
    };
    }

function calcResults(){
    var_dump($_POST);
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
}

function age($bdate){
    $date = new DateTime($bdate);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;
}

function bmi($ft, $in, $weight){
    $kg = $weight/2.20462;
    $height = ($ft*12+$in) * 0.0254;
    $bmi = $weight/($height*$height);
}

function bmiDescription($bmi){
    if($bmi < 18.5){
        echo 'You are UnderWeight.';
    }
    else if($bmi>= 18.5 and $bmi <= 24.9){
        echo 'You are Normal Weight.';
    }
    else if($bmi >= 25.0 and $bmi <= 29.9){
        echo 'You are OverWeight.';
    }
    else{
        echo 'You are Obese.';
    }
}