<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

if($num1 > $num2 && $num1 > $num3){
    echo "$num1 is the greatest number";
}elseif ($num2 > $num1 && $num2 > $num3) {
    echo "$num2 is the greatest number";
}else{
    echo "$num3 is the greatest number";
}