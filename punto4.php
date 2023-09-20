<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css\punto4.css">
    <title>seccion4</title>
</head>
<body>
    <h1>SECCIÓN 4: Primos que inician en 1</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num">Ingrese el número a calcular:</label>
        <input type="number" name="num" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function numerosPrimosQueEmpiezanPor1($num) {
        $primos = array();
        if ($num > 0) {
            $encontrado = false;
            for ($i = 10; $i <= $num; $i++) {
                if (esPrimo($i) && substr($i, 0, 1) == "1") {
                    $primos[] = $i;
                    $encontrado = true;
                }
            }
            if ($encontrado) {
                echo implode(", ", $primos);
            } else {
                echo "No se encontraron números primos que cumplan con las condiciones.";
            }
        } else {
            echo "El número debe ser mayor que 0.";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        if($num>0){
            echo "<p class='resultado'> <b>Con el numero $num, los primos menores o iguales que empiezan por 1 son:</b><br><br>";
            $resultado = numerosPrimosQueEmpiezanPor1($num);
            echo "</p>";
        }else{echo "Ingrese un número positivo.";}
    }
    ?>
</body>
</html>