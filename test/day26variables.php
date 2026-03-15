<?php
$v_int=2;
if(is_int($v_int)){
    echo "Integer Value";}
    else{ 
        echo"Not a Integer Value";
    }echo"<br>";
    echo"<br>Check Empty():<br>";
    $is_val="";
    if(empty($is_val)){
        echo"No Value There";}
        else {
            echo"Value There";
        }echo"<br>";
        echo"<br>Check Isset():<br>";
        $is_al="  ";
        if(isset($is_al)){
            echo"Value There";
        }else{
             echo"No Values There";
        }echo"<br>";
        echo"<br>Varable DataType Conversion:<br>";
        $v_str=5;
        $v_in=intval($v_str);
        echo gettype($v_str);echo"<br>";
        echo$v_in;echo"<br>";
        unset($v_in);echo"<br>";
        $v_str="7";
        $v_in=intval($v_str);
        echo gettype($v_str);echo"<br>";
        echo$v_in;echo"<br>";
        unset($v_in);echo"<br>";
        if(isset($v_in)){
            echo"No Values there";
        }
        else{
            echo"Values There";
        
        }
        
    

?>