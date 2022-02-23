<?php

$salary = readline("please enter your salary ");
$role = readline("please enter your role. 101 -manager; 102 -engineer; 103 -technician ");
$newSalary=0;

if ($role == 101){
    $newSalary = $salary * 1.25;
    $difference = $newSalary-$salary;
    echo  "your salary was ".$salary.". your new salary is ".$newSalary." with the difference of ".$difference;
}
else if ($role == 102){
    $newSalary = $salary * 1.20;
    $difference = $newSalary-$salary;
    echo  "your salary was ".$salary.". your new salary is ".$newSalary." with the difference of ".$difference;
}
else if ($role == 103){
    $newSalary = $salary * 1.15;
    $difference = $newSalary-$salary;
    echo  "your salary was ".$salary.". your new salary is ".$newSalary." with the difference of ".$difference;
}
else {
    $newSalary = $salary * 1.10;
    $difference = $newSalary-$salary;
    echo  "your salary was ".$salary.". your new salary is ".$newSalary." with the difference of ".$difference;
}


