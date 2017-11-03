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
<section>
        <h2>Multiplication par sélecteur</h2>
        <form action="result.php" method="post">
            <select name="choixTable" id="table">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <button type="submit" value="Valider">Valider</button>
        </form>
    </section>
    <section>
        <div class="table">
        <?php 
        $number = ($_POST['choixTable']); 
        ?>
            <h2>Table de <?= $number ?></h2>
            <?php for ($multiplication = 0; $multiplication <11; $multiplication++) : ?>
                <?php $result = $number*$multiplication; ?>
                <?= $number ?> x <?= $multiplication ?> = <?= $result ?>
                <br>
            <?php endfor; ?>
        </div>
    </section>
    <footer>
        <a href="multiplications.php">Retour à l'accueil</a>
    </footer>
</body>
