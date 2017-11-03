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
        <h2>Multiplication par checkbox</h2>
        <form action="result2.php" method="post">
            <fieldset>
                <legend>Selectionnez votre table : </legend>
                <div>
                    <input type="checkbox" id="table0" name="multiplications[]" value="0">
                    <label for="0">Table de 0</label>
                </div>
                <div>
                    <input type="checkbox" id="table1" name="multiplications[]" value="1">
                    <label for="1">Table de 1</label>
                </div>
                <div>
                    <input type="checkbox" id="table2" name="multiplications[]" value="2">
                    <label for="2">Table de 2</label>
                </div>
                <div>
                    <input type="checkbox" id="table3" name="multiplications[]" value="3">
                    <label for="3">Table de 3</label>
                </div>
                <div>
                    <input type="checkbox" id="table4" name="multiplications[]" value="4">
                    <label for="4">Table de 4</label>
                </div>
                <div>
                    <input type="checkbox" id="table5" name="multiplications[]" value="5">
                    <label for="5">Table de 5</label>
                </div>
                <div>
                    <input type="checkbox" id="table6" name="multiplications[]" value="6">
                    <label for="6">Table de 6</label>
                </div>
                <div>
                    <input type="checkbox" id="table7" name="multiplications[]" value="7">
                    <label for="7">Table de 7</label>
                </div>
                <div>
                    <input type="checkbox" id="table8" name="multiplications[]" value="8">
                    <label for="8">Table de 8</label>
                </div>
                <div>
                    <input type="checkbox" id="table9" name="multiplications[]" value="9">
                    <label for="9">Table de 9</label>
                </div>
                <div>
                    <input type="checkbox" id="table10" name="multiplications[]" value="10">
                    <label for="10">Table de 10</label>
                </div>
            </fieldset>
            <button type="submit">Valider</button>
        </form>
        <a href="multiplications.php">Retour à l'accueil</a>
    </section>
    <section>
    <h2>Tables de multiplications</h2>
    <hr>
        <article id="checkboxTable">
        <?php 
                foreach ($_POST['multiplications'] as $value) : ?>
                <div class="table">
                    <h3>Table de <?= $value ?> : </h3>
                        <?php for ($multiple = 0; $multiple <11; $multiple++): ?>
                            <?= $value ?> x <?= $multiple ?> =  <?= $value * $multiple ?> <br>
                        <?php endfor; ?>
                </div>
        
        <?php endforeach; ?>
        </article>
    </section>
    
</body>