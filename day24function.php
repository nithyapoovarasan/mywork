<?php
/* call by value */
function add($a){
return $a+=$a;
}
echo(add(10));  echo "<br>";
function sum($a){
return $a+=$a;
}
$a=50;
echo("<br> first sum: ".sum($a)); echo "<br>";

/* default value */

function sum1($a,$b=56){
return $a+=$b;
}
echo("<br> first sum: ".sum1($a,65)); echo "<br>";
echo("<br> second sum: ".sum1($a)); echo "<br>";

/* length arguments */

function sum2(...$a)
{
print_r($a);echo("<br>");
$total=0;
foreach($a as $valu){
  $total+=$valu;
}
 return $total;
}echo("<br>");
echo("<br> first sum: ".sum2(12,352,34,75,46));echo("<br>");
echo("<br> second sum: ". sum2(6,1)); echo("<br>");

/* call by reference */
function calbyval($a){ //call by value
    $b=63;
return $b+=$a;
}
echo("<br> cal by val sum: ".calbyval($a));
echo("<br> a value: ".$a);  echo "<br>";
function calbyre(&$a){ //call by reference &
    $b=82;
return $b+=$a;//b=b+a
return $a+=$b;//a=a+b
}
echo("<br> cal by ref sum: ".calbyre($a)); 
echo("<br> a value: ".$a);  echo "<br>";


?>
