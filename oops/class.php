<?php
//!use pasclae case to name classes 
//? pascle CAse = FirstName
//? Title case = Firstname
//? Snake case = first_name 
//? kabab case = first-name
include 'Add.php';
include 'Sub.php';
include 'Mul.php';
//?differne in inclide and require 
$nummber1=10 ; $nummber2=9;
$add = new Add($nummber1 , $nummber2) ;
$result = $add -> execute();
echo  " <br> addition is $result " ;

$sub = new Sub($nummber1 , $nummber2) ;
$result = $sub -> execute();
echo  " <br>substraction is  $result " ;

$mul = new Mul($nummber1 , $nummber2) ;
$result = $mul -> execute();
echo  " <br> multiplication  is $result " ;


//! homework is make clacualtor 