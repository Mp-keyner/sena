<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andrea lo hizo todo no lordoy</title>
</head>
<body style="background-color: #333; color: white;">
<?php
$ID=$_POST[ "ID"];
$turno = $_POST["turno"];
$trabajo = $_POST["trabajo"];
$horas = $_POST["H_trabajo"];
$extra = $_POST["extra"];
$hextras = $_POST["H_extras"];


$contador = 15000;
$marketing = 19000;
$analista = 25000;
$nocturno = 0.25;
$mixto = 0.125;
$total = 0;

$horasEntero = (int)$horas;


switch($trabajo){
  case 'Contador':
    if ($turno == "Nocturno") {
      $total = ($contador * $horasEntero) * $nocturno + ($contador * $horasEntero);
    }else{
      if ($turno == "Mixta") {
        $total = ($contador * $horasEntero) * $mixto + ($contador * $horasEntero);
      }else{
        $total = ($contador * $horasEntero);
      }
    }
    break;
  case 'Marketing':
    if ($turno == "Nocturno") {
      $total = ($marketing * $horasEntero) * $nocturno + ($marketing * $horasEntero);
    }else{
      if ($turno == "Mixta") {
        $total = ($marketing * $horasEntero) * $mixto + ($marketing * $horasEntero);
      }else{
        $total = ($marketing * $horasEntero);
      }
    }
    break;
  case 'Analista':
    if ($turno == "Nocturno") {
      $total = ($analista * $horasEntero) * $nocturno + ($analista * $horasEntero);
    }else{
      if ($turno == "Mixta") {
        $total = ($analista * $horasEntero) * $mixto + ($analista * $horasEntero);
      }else{
        $total = ($analista * $horasEntero);
      }
    }
    break;
}

        ?>
        <div style="text-align: center;">
        <?php
          echo "Turno seleccionado $turno <br>";
          echo "Usted como $trabajo al dia gana $$total con un total de horas de $horas <br>";
          echo $horas. " horas <br>";
          echo $trabajo. " tranajo <br>";
          echo $horasEntero. " H entero <br>";
          echo $hextras. " extras <br>";
          echo $horas. " horas <br>";
        ?>
        </div>
</body>
</html>



<!-- [5:49 p. m., 29/7/2023] Oswaldo 🛠️: Analista 25
[5:49 p. m., 29/7/2023] Oswaldo 🛠️: Marketing 19
[5:49 p. m., 29/7/2023] Oswaldo 🛠️: Contador 15
[5:49 p. m., 29/7/2023] Oswaldo 🛠️: Nocturno 25%
[5:49 p. m., 29/7/2023] Oswaldo 🛠️: Mixto 12.5% 
[5:49 p. m., 29/7/2023] Oswaldo 🛠️: horas extras 25% 
(20 + 25% )= (20 * 0.25 + 20)
-->
