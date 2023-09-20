<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\punto6.css">
    <title>Document</title>
</head>
<body>
    <h1>Punto 6: Número Amigos</h1>
    <h2>Ingrese 2 numeros para determinar si son amigos</h2>

    <form method="post" action="">
        <label for="num1">Primer número:</label>
        <input type="number" name="num1" required><br><br>
        <label for="num2">Segundo número:</label>
        <input type="number" name="num2" required><br><br>
        <input type="submit" name="submit" value="Verificar">
    </form>

    <?php
    function sumaDivisores($numero) {
        $suma = 0;
        for ($i = 1; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                $suma += $i;
            }
        }
        return $suma;
    }

    if (isset($_POST['submit'])) {
        $num1 = (int)$_POST['num1'];
        $num2 = (int)$_POST['num2'];

        $sumaDivisoresNum1 = sumaDivisores($num1);
        $sumaDivisoresNum2 = sumaDivisores($num2);

        if ($sumaDivisoresNum1 == $num2 && $sumaDivisoresNum2 == $num1) {
            echo "<p>$num1 y $num2 son números amigos.</p>";
        } else {
            echo "<p>$num1 y $num2 no son números amigos.</p>";
        }
    }
    ?>
    
</body>
</html>
