<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css\punto2.css">
  <title>EDADES PHP</title>
</head>
<body>
  <form action="" name="" method="post">
    <div class="box">
      <div class="nombre">Edades</div>
      <input class="valor" type="string" value="" name="n1"/>
    </div>



    <div class="box">
      <div class="nombre">Resultado:</div>
      <h1 id="resultado"><?php echo calcularResultado(); ?></h1> 
    </div>

    <div class="box">
      
      <button type="reset" onclick="limpiarResultado()">Limpiar</button>
      <button type="submit">Operar</button>
    </div>

  </form>

  <script>
        function limpiarResultado() {
            document.getElementById("resultado").textContent = "";
        }
    </script>
</body>
</html>

<?php


function calcularResultado() {
    if (isset($_POST['n1'])) {
        if ($_POST['n1'] == "") {
          return "Debe poner Valores";
        } else {
        $n1 = $_POST['n1'];
     
        $edades = explode(',',$n1);
       
        $valor=0;
        $clave=0;
        foreach ($edades as $clave => $valor){
          $clave=$clave+1;
          $valortotal=array_sum($edades);
          $minimo=min($edades);
      
        }
        $promedio=$valortotal/$clave;
  
        return "Cantidad de personas total:". $clave ."<br>". "Promedio de edades es: " . number_format($promedio, 2)."<br>"."El mas joven es: ".$minimo;


        }
         
        }
    }
function LimpiarRes() {
  $s = "";
  return $s;
}
 
?>