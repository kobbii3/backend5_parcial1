<!DOCTYPE html>
<html>
<head>
    <title>Cifrado de Entero</title>
</head>
<body>
    <h1 class="h">Cifrado de Entero de Cuatro Dígitos</h1>
    <p class="t">Ingrese un entero de cuatro dígitos:</p>
    <input type="text" id="entero" maxlength="4" >
    <input type="button" value="Cifrar número" onclick="cifrarEntero()">
    <link rel="stylesheet" href="css\diseñoseccion1.css">
    
    <p class="r" id="enteroingresado"></p>
    <p class="r" id="resultado"></p>
    <p class="r" id="sumar7"></p>
    <p class="r" id="residuo"></p>
    <p class="r" id="intercambiar"></p>

    <script>
        function cifrarEntero() {
            // Declaramos la variable "entero"
            // Con el metodo "getElementById" (que vimos en android studio) obtenemos el valor del entero ingresado
            // y al elementId lo llamamos "entero"
            var entero = document.getElementById("entero").value;

            // Hacemos la verificacion si el número tiene cuatro dígitos
            // Hacemos alerta para el usuario en caso de no tener 4 digitos
            if (entero.length !== 4 || isNaN(entero)) {
                alert("El número debe tener exactamente cuatro dígitos.");
                return;
            }

            // Convertir el entero en un array de dígitos
            var digitos = entero.split("").map(Number);

            // Sumar 7 a cada dígito y obtener el residuo después de dividir entre 10
            var sumados = digitos.map(function(d) {
                return (d + 7) % 10;
            });

            // Intercambiamos los valores del primer y tercer dígito, y del segundo y cuarto dígito
            var intercambiados = [sumados[2], sumados[3], sumados[0], sumados[1]];

            // declaramos la variable cifrado
            var cifrado = intercambiados.join("");

            // Convertir el array de dígitos en una cadena y mostramos los valores de cada uno 
            // Utilizamos la propiedad Element.innerHTML para devolver o establecer la sintaxis HTML describiendo los descendientes del elemento.
            document.getElementById("enteroingresado").innerHTML = "Entero leido: " + entero;
            document.getElementById("sumar7").innerHTML = "Sumar 7 a cada dígito: (" + sumados.join(".") + ")";
            document.getElementById("residuo").innerHTML = "Residuo de dividir entre 10: (" + sumados.join(".") + ")";
            document.getElementById("intercambiar").innerHTML = "Intercambiar valores: (" + intercambiados.join(".") + ")";
            document.getElementById("resultado").innerHTML = "Valor retornado: " + cifrado;
        }

        
    </script>
</body>
</html>