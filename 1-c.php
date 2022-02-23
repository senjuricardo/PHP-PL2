<?php

 $hoursWorkerd= readline("please enter the number of hours per week ");

 $perHour = 7.5;
 $total =0;

 if ($hoursWorkerd < 36){
     $total = $hoursWorkerd * 7.5;
 }
 else{
     $total = 36*7.5 + ($hoursWorkerd-36) * 10;
 }

 echo "The total salary receivable is ".$total;

