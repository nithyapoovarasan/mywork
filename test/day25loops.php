
<?php
for($i=0;$i<9;$i++)
    {
        echo $i."<br>";
    }echo "<br>";
while($i<5)    
{
        echo $i."<br>";
$i++;
}
$i=3;
$j=50;
do
{
        echo $i."<br>";
        $i++;
    }while($i>7);echo "<br>";

    $arr=array("Arun",35); //array
foreach($arr as $val)// for(let iterator of arrayname)
    {
        echo $val. "<br>";
    }echo "<br>";

if(true){
    echo"true";echo "<br>";
}echo "<br>";

if($i>20){
    echo"greater";echo "<br>";
}
else{
    echo "lesser";echo "<br>";
}echo "<br>";

if($j>50){
    echo"lesser 50";echo "<br>";
}
elseif($j<50){
    echo"greater than 50";echo "<br>";
}
else{
    echo "equal";echo "<br>";
}echo "<br>";
for($i=2;$i<5;$i++){
 
 switch($i){
    case 1:
        echo "ONE";echo "<br>";
        break;
    case 2:
        echo "Two";echo "<br>";
          break;
    default:
    echo "default";echo "<br>";
 }
 break;
}echo "<br>";
echo"end of the loop"; 
?>