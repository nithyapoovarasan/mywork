<?php
echo("Hello"); echo "<br>";
print "Welcome";echo "<br>";
printf("Hai");echo "<br>";

$var1=50;
echo($var1);echo "<br>";
$fname="priya";
$lname='dharasan';
$degree="Msc";
echo $fname,$lname ,$degree;
$lname="dhara'san";echo "<br>";
echo $lname;echo "<br>";
printf("This is".$fname);echo "<br>";
$age=35;
var_dump($age);echo "<br>";
$price=95.5;
var_dump($price);echo "<br>";
$bool=true;
var_dump($bool);echo "<br>";
$num=45;
$arr=array("arun",36);
print_r($arr);
/*null*/
$bn=null;echo "<br>";
$res= $bn ?? 1;// if null value return 1
$res=($bn>0) ? $bn : 1; // if value 0 return 1 
var_dump($res);

/*string type casting */
$num=(string)$num;echo"<br>";
var_dump($num);

/*int type casting*/
$str="23";echo"<br>";
var_dump($str);echo"<br>";
$str=(int)$str;
$str1="34 5";
var_dump($str1);echo"<br>";
$str1=(int)$str1;
$str2="21 hi";
var_dump($str2);echo"<br>";
$str2=(int)$str2;
$str3="hi 22";
var_dump($str3);echo"<br>";
$str3=(int)$str3;
$flo="45.5";
var_dump($flo);echo"<br>";
$flo=(int)$flo;
$bool=true;
var_dump($bool);echo"<br>";
$bool=(int)$bool;
$f=Null;
$flo=(int)$flo;
var_dump($flo);






?>