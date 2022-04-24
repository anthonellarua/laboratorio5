<?php

    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&display=swap" rel="stylesheet">';
    echo '<link href="../CSS/Lab 05 - 1.css" type="text/css" rel="stylesheet">';
    echo '<title>Resultado de empresa con bonificacion</title>';

    $comis=$_POST['importe_total'];
    $comision=$comis*0.075;
    $bonif=$_POST['cantidad_hijos'];
    $bonificacion=$bonif*50;
    $sueldo_bruto=$comision+600+$bonificacion;

    $descuento=$sueldo_bruto*0.11;
    $sueldo_neto=$sueldo_bruto-$descuento;
    echo "Comision por importe total: ".$comision."<br>";
    echo "Bonificación por hijos: ".$bonificacion."<br>";
    echo "Sueldo bruto: ".$sueldo_bruto."<br>";
    echo "Descuento: ".$descuento."<br>";
    echo "Sueldo neto: ".$sueldo_neto."<br>";
?>