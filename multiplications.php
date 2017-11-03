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
    <h1>Activité multiplications</h1>
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
    </section>
    <section>
        <h2>Test par table</h2>
        <form action="test.php" method="post">
            <select name="testTable" id="testTable">
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
            <button type="submit">Valider</button>
        </form>
    </section>
    <section>
    <h2>Mode révision</h2>
    <form action="revisions.php" method="post">
        <fieldset>
            <legend>Selectionnez votre table : </legend>
            <div>
                <input type="checkbox" id="table0" name="revisionTable[]" value="0">
                <label for="0">Table de 0</label>
            </div>
            <div>
                <input type="checkbox" id="table1" name="revisionTable[]" value="1">
                <label for="1">Table de 1</label>
            </div>
            <div>
                <input type="checkbox" id="table2" name="revisionTable[]" value="2">
                <label for="2">Table de 2</label>
            </div>
            <div>
                <input type="checkbox" id="table3" name="revisionTable[]" value="3">
                <label for="3">Table de 3</label>
            </div>
            <div>
                <input type="checkbox" id="table4" name="revisionTable[]" value="4">
                <label for="4">Table de 4</label>
            </div>
            <div>
                <input type="checkbox" id="table5" name="revisionTable[]" value="5">
                <label for="5">Table de 5</label>
            </div>
            <div>
                <input type="checkbox" id="table6" name="revisionTable[]" value="6">
                <label for="6">Table de 6</label>
            </div>
            <div>
                <input type="checkbox" id="table7" name="revisionTable[]" value="7">
                <label for="7">Table de 7</label>
            </div>
            <div>
                <input type="checkbox" id="table8" name="revisionTable[]" value="8">
                <label for="8">Table de 8</label>
            </div>
            <div>
                <input type="checkbox" id="table9" name="revisionTable[]" value="9">
                <label for="9">Table de 9</label>
            </div>
            <div>
                <input type="checkbox" id="table10" name="revisionTable[]" value="10">
                <label for="10">Table de 10</label>
            </div>
        </fieldset>
        <button type="submit">Valider</button>
    </form>
</section>
</body>
</html>