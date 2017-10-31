<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Multiplication</title>
</head>
<body>
<?php 
$number = ($_POST['choixTable']);

    for ($multiplication = 0; $multiplication <11; $multiplication++)
    {
        echo $number ." x ".$multiplication." = ".$number * $multiplication;
        ?><br><?php;
    }
        
    ?>

    <button><a href="multiplications/multiplications.php">Retour</a></button>
</body>
