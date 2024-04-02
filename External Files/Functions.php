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