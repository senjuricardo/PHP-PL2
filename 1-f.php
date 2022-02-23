<?php

$averageSale = readline("please enter your average sale ");
$credit =0;
if ($averageSale >0 && $averageSale <=200){
    echo " your average sale is ".$averageSale." and you have no credits";
}
else if ($averageSale <401){
    $credit = $averageSale * 0.2;
    echo " your average sale is ".$averageSale." and your credit is ".$credit;
}
else if ($averageSale <=600){
    $credit = $averageSale * 0.3;
    echo " your average sale is ".$averageSale." and your credit is ".$credit;
}
else if ($averageSale >600){
    $credit = $averageSale * 0.4;
    echo " your average sale is ".$averageSale." and your credit is ".$credit;
}
