<?php

 $ABC=94;
 $abc=12;

 echo $ABC;






 //datatypes in PHP

 //PHP is loosely typed language

 $dt1='abc';
 $dt2=14;
 $dt3=3.9;
 $dt4=true;
 $dt5=null;
 $dt6=array(2,6,9); 
 echo $dt1;
 echo $dt2;
 var_dump($dt1);
 var_dump($dt6);

 //print "hello"

 echo "hello";
 echo "dt1";
 
//String manipulation Function

//Find string length
echo "<br><br>";
echo strlen("hello world");

//string word count
echo "<br><br>";
echo str_word_count("hello world");

//string reverse
echo "<br><br>";
echo strrev("hello world");

//string replace
echo "<br><br>";
echo str_replace("hello","hru..","hello world");

//is_int() Function
//is_float() Function
//Casting 

$abcd=125;
echo "<br><br>";
var_dump(is_int($abcd));

$abcd=125.3;
echo "<br><br>";
var_dump(is_float($abcd));

$abcd=125.2;
$intnum=(int)$abcd;
echo "<br><br>";
var_dump(is_float($abcd));
echo $intnum;


//Arithmatic operators
//+,-,*,/

$a=25
$b=5
echo "<br><br>";
echo "Multiplication=";
echo $a*$b;

echo "<br><br>";
echo "Addition=";
echo $a+$b;

echo "<br><br>";
echo "Subtraction=";
echo $a-$b;

echo "<br><br>";
echo "Division=";
echo $a/$b;

echo "<br><br>";
echo "Modulus=";
echo $a%$b;



?>