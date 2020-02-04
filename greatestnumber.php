<?PHP
$number1=10;
$number2=20;
$number3=30;
if($number1>$number2 and $number1>$number3){
    echo $number1;
}
else{
    if($number2>$number1 and $number2>$number3){
        echo $number2;
    }
    else{
        echo $number3;
    }
}




?>