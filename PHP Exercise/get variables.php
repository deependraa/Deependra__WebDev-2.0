<?php

    if($_GET['number']>0) {
        $i = 2;
        $isPrime = true;
        while($i < $_GET['number']){
            if($_GET['number']% $i ==0){
                $isPrime = false;
            }
            $i++;
        }
        if ($isPrime){
            echo "<p>".$i." is a prime number!</p>";
        }else{
            echo "<p>".$i." is not a prime number!</p>";
        }
    }
    else{
        echo "Please Enter a valid number";
    }

?>

<p>Enter the number you want to check for prime</p>
<form>
    <input name="number" type="number">

    <button type="submit">GO!</button>

</form>