<?php
$civilStatus= readline("please enter your civil status. 0 for single, 1 for married  ");
$age= readline("please enter your age ");

    if ($civilStatus ==00 && $age < 25){
    echo "group 1";}
    else
        if($civilStatus ==0 && $age >= 25 ){
        echo "group 2";
    }
    else
        if($civilStatus ==1 && $age < 34){
        echo "group 3";
    }
    else
        if($civilStatus ==1 && $age >= 34){
        echo "group 4";
    }






