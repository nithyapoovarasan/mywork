<?php
echo"<br> Numeric Array: <br>";
$arr=array(1,"black",true);
$arr[2]="colour";
$arr1=["red",45,false];
$var1=$arr[1];
echo $arr[1];echo"<br>";
echo"<br> Multi Dimentional  Array: <br>";
$multi_arr=[
[9,3,5,1],
[4,5,6,8]
];
echo $multi_arr[0][1];echo"<br>";
echo"<br> Associative Array: <br>";
$ac_arr = [
    "a" => "Anu",
    "b" => "Banu",
    "c" => "Manju"
];
echo $ac_arr["c"];echo"<br>";
echo"<br> Multi Dimentional Associative Array: <br>";
$macc_arr = [
    "a" => "Apple",
    "b" => "Banana",
    "c" =>["d"=> "Monkey","e"=>"Animal"]
];

echo $macc_arr["c"]["e"]; echo"<br> fruits <br> ";

$macc_arr = [
    "a" => "Apple",
    "b" => "Banana",
    "c" =>["d", "Orange","e","orange"]
];

echo $macc_arr["c"][1];
 /*$key = array_search("Mango", $arrb);

echo $key;*/
 

?>