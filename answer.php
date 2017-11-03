<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Multiplication</title>
</head>
<?php 
$answer = $_POST['answer'];
$result = $_POST['result']
?>
<body>
    <?php if ($result == $answer) :?>
    Bravo ! Le résultat est <?= $result ?>
    <?php else : ?>
    Raté ! Le résultat était <?= $result ?>
    <?php endif; ?>
    
</body>