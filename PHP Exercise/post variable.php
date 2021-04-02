<?php
    
if($_POST) {
        $known = false;
        $names  = array("Deependra","rahul","Mukul");
        for($i=0 ; $i< sizeof($names) ; $i++){
            if($array[$i] == $_POST['name']){
                $known == true;
            }
        }
        if($known){
            echo "<p>Hello ".$_POST['name']." .How are you.</p>";
        }else{
            echo "<p>Sorry i dont know you</p>";
        }
    }

?>

<p>Enter Your name</p>
<form>
    <input name="name" type="text">

    <button type="submit">GO!</button>

</form>