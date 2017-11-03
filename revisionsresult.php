<?php session_start();
$points = 0;
$totalPoints = 0;
$reponse = $_POST['reponse'];
$solution = $_POST['solution'];
$question = $_POST['question'];
$tours = 0;
?>
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
    <h2>Résultat de vos révisions :</h2>
    <a href="multiplications.php">Retour à l'accueil</a>
    

    <?php foreach ($_POST['reponse'] as $reponse ):
    ?>
    <?php
    $totalPoints++;
    ?>
        <div class="result">
            <h3>Question <?= $totalPoints ?></h3>
            <p>Rappel de la question : <?= $question[$tours] ?> </p>
            <p>Votre réponse : <?= $reponse ?></p>
            <?php if ($solution[$tours] == $reponse) : 
            ?>
            <p><span class="green">Bonne réponse ! </span></p>

            <?php $points++ ?>
            
            <?php else : ?>
            <p><span class="red">Mauvaise réponse ! </span>La solution était <?= $solution[$tours] ?></p>
            <?php endif ?>
            <?php $tours++; ?>
        </div>
        

    <?php endforeach ?>
    <p class="points">Vos points totaux : <?= $points ?> / <?= $totalPoints ?></p>
    
</body>