<?php session_start();
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
    <a href="multiplications.php">Retour à l'accueil</a>
    <section>
        <form action="revisionsresult.php" method="post">
            <?php
                foreach ($_POST['revisionTable'] as $value) : 
            ?>
                <h2>Table de <?= $value ?></h2>
                <div class="flex">
                    
                    <?php
                    for ($test = 0; $test < 5; $test++) :
                        $randNumb = rand(0,10);
                        $solution = $value * $randNumb;
                    ?>
                        <div class="revisionBox">
                            <p>
                                <?= $value ?> x <?= $randNumb ?> =
                            </p>
                            <input type="text" name="reponse[]">
                            <input type="hidden" name="solution[]" value="<?= $solution ?>">
                            <input type="hidden" name="question[]" value="<?= $value ?> x <?= $randNumb ?>">
                        </div>
                    <?php endfor ?>
                </div>
                 
            <?php endforeach ?>
            <button type="submit">Valider</button>
        </form>
    </section>
</body>