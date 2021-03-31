<?php

$myarray = array("Deep","prash","Bhup","lame");
print_r($myarray);
echo $myarray[1];

$array2[0]= "loli";
$array2[1] = "Dim";
$array2[2]= "fun";
$array2[3] = "Inox";
$array2[4]= "SOF2";
$array2[5] = "LONgm";
$array2["Favmovie"] = "JCSC";
print_r($array2);

$array3 = array(
        "Franch" => "French",
        "India" => "Hindi");
unset($array3["Franch"]);
print_r($array3);
echo sizeof($array3);

?>