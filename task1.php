<?php

$unit = 51;
$price1 = 3.5;
$price2 = 4;
$price3 = 6.5;



if($unit <= 50){
    echo "the price is " .  $unit*$price1 . "$";
}elseif($unit > 50 && $unit < 150) {
    $calc = $unit * $price2;
    echo "the price is {$calc}$";
}elseif($unit >= 150){
    echo "the price is " . $unit*$price3 . "$";
}

?>