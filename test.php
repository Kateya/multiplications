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
$number = $_POST['testTable'];
$randNumb = rand(0,10);
$result = $number * $randNumb;
?>
<p>
Combien font <?= $number ?> x <?= $randNumb?> ?
</p> 
    <form action="answer.php" method="post">
        <input type="text" name="answer">
        <input type="hidden" name="result" value="<?= $result ?>">
        <button type="submit">Valider</button>
    </form>

</body>