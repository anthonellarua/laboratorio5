<?php
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&display=swap" rel="stylesheet">';
    echo '<link href="../CSS/Lab 05 - 1.css" type="text/css" rel="stylesheet">';
    echo '<title>Resultado de empresa con bonificacion</title>';

    $nuevo=$_POST['precio_actual'];
    $nuevo_precio=$nuevo-($nuevo*0.05);

    $importe=$_POST['cantidad_gaseosas'];
    $importe_compra=$importe*$nuevo_precio;

    $importe_descuento=$importe_compra*0.07;

    $importe_pagar=$importe_compra-$importe_descuento;

    $obsequio=$importe*2;

    echo "Nuevo precio: ".$nuevo_precio."<br>";
    echo "Importe por compra: ".$importe_compra."<br>";
    echo "Descuento: ".$importe_descuento."<br>";
    echo "Pagar: ".$importe_pagar."<br>";
    echo "Obsequio: ".$obsequio." caramelos<br>";
?>