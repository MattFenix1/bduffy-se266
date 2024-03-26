<?php

function fizzBuzz(){
    for ($i = 1; $i <= 100; $i++){ //Counts from 1 to 100
        if($i % 2 == 0 && $i % 3 == 0){
            echo "FizzBuzz" . "<br>"; //Checks if a multiple of 2 and 3 then goes to a new line.
        }
        elseif($i / 3 == round($i/3)){
            echo "Buzz" . "<br>"; //Checks if a multiple of 3 and goes to a new line.
        }
        elseif($i / 2 == round($i/2)){
            echo "Fizz" . "<br>"; //Checks if a multiple of 2 and goes to a new line.
        }
        else{
            echo $i . "<br>"; //Displays the number and goes to a new line.
        }
    }
}

require 'FizzBuzz_View.php';