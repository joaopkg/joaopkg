<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $carro= ['Corsa',"Ferrari"];

    array_push($carro,"Fusca");
    array_push($carro,'Gol');

    print_r($carro); //print r shows arrays in their entirety
    echo count($carro)."<br>";

    
?>
<?php 

$str = "28/02/2020";
echo  $str."<br>";
$arrayExemplo =explode("/",$str);

foreach($arrayExemplo as $item){
    echo $item." ";

}
$dia = $arrayExemplo[0];
$mes = $arrayExemplo[1];
$ano = $arrayExemplo[2];
echo"<br>";
echo"<br>dia: $dia <br>mes: $mes <br>ano: <br>";

?>
</body>
</html>