<?php 
$number = ($_POST['choixTable']);

for ($multiplication = 0; $multiplication <11; $multiplication++)
{
    echo $number ."x".$multiplication."=".$number * $multiplication;
}
    
?>