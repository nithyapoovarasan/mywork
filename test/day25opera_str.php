<?php
 echo  " array to string";
 echo  " <br>";
$arr = array('Hello','World!','what a','Day!',"its so good");
print_r($arr);
 echo  " <br>";

$var1= join("@ ",$arr);
var_dump($var1);
echo  " <br> substr ";

echo substr("welcome world",1,5);
echo  "<br> substr_replace";

echo substr_replace("<br> beauty","world",2);
echo  "<br>";

$str = "i like skating!";echo  "<br>";

echo $str ; echo " ORGINAL <br>";
echo trim($str,"fruits");
echo  "<br> strlen ";

echo strlen("keerthiyazhini");
echo  "<br>  str_repeat";
echo  "<br>";

echo str_repeat("super",6);
echo  "<br>";

$str = "Hello World";
echo  "<br> str_pad";echo  "<br>";

echo str_pad($str,15,"e");
echo  "<br> str_replace";echo  "<br>";

echo str_replace("Hello world!","Hi","Sai");
echo  "<br>";

 echo"  array to string impolde <br>";
$arr = array('Hello','Beautiful');
print_r($arr);
 echo  " <br>";
$var1= implode("& ",$arr);
var_dump($var1);
 echo  " <br>";

$i=8;
$j=3;
echo($i**$j);echo "<br> assignment Operator <br>";

/* assignment Operator */
$i+=$j;
echo($i);echo "<br>";
$i-=$j;
echo($i);echo "<br>";
$i*=$j;
echo($i);echo "<br>";
$i/=$j;
echo($i);echo "<br>";
$i%=$j;
echo($i);
echo "<br>";
echo "<br> Comparison Operator  <br>";

$i=22;
$j="45";
if($i===$j){ //!= <> < > <= >=
echo($i."is equal");echo "<br>";
}

if($i!==$j){
echo($i."is TYPE NOT equal");echo "<br>";
}
else{
echo($i." datatype different");echo "<br>";
}echo "<br>";

$a=49;
$b=32;
if($a!=$b){//<>
echo($a."is not equal".$b);echo "<br>";
}echo "<br>";

echo "<br> increment&decrement Operator <br>";
$var=75;
$var2="98";
echo $var--; 
echo "<br> logical operators <br>";

echo "<br>";


/* logical operators */

if(($var<=$var2) && ($var==75)){ //&& and 
echo($var."is  equal");echo "<br>";
}

if(($var>=$var2) or ($var==24)){ // || 
echo($var."is  equal");echo "<br>";
}

if(($var==$var2)){
    echo($var."is  equal");echo "<br>";
}

if(($var==$var2) or ($var<=75)){ // || 
echo($var."is  equal");echo "<br> Ternary IF and NULL <br>";
}

$var3=($var===$var2) ? "is  true" : "is  false";
echo($var3); echo "<br>";
$bn=null;echo "<br>";
$res= $bn ?? 1;// if null value return 1
$res=($bn>0) ? $bn : 1; // if value 0 return 1 
var_dump($res);
$re=43/$res;
echo($re);
?>


