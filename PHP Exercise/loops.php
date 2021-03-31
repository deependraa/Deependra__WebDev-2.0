<?php

for ($i=0 ; $i<10; $i++){
    echo $i."<br>";
}


for ($i=2; $i<=30; $i+= 2){
    if($i%2 == 0){
        echo $i."<br>";
    }
}

$myarray = array("Deep","prash","Bhup","lame");
foreach ($myarray as $key => $value){
    echo "Array item ".$key." is ".$value."<br>";
}
for($i=0; $i<sizeof(($myarray)); $i++){
    echo $myarray[$i]."<br>";
}


?>