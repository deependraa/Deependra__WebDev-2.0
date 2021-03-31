<?php

$i = 1;

while($i<10){
    echo $i."<br>";
    $i++;
}

$j = 1;
while($j<=10){
    $v = $j*5;
    echo $v."<br>";
    $j++;
}

$myarray = array("Deep","prash","Bhup","lame");
$p = 0;
while($p< sizeof($myarray)){
    echo $myarray[$p]."<br>";
    $p++;
}
?>