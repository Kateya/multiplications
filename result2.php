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

    foreach ($_POST['multiplications']as $value) {
        echo "<br>Table de $value : <br><br>";
        for ($multiple = 0; $multiple <11; $multiple++)
        {
            echo $value ." x ".$multiple." = ".$value * $multiple."<br>";
            
        }
    }

    ?>
</body>