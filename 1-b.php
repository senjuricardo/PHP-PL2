<?php

$written = readline("please insert the written note ");
$oral = readline("please insert the oral note ");

$aproval = $written * 0.7 + $oral *0.3;

if ($aproval >=10){
    echo "approved";}
    else{
        echo "disapproved";}



