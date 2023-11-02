<?php
function tarjetaProducto($url, $oferta, $imagen, $precioAnterior, $descuento, $precio, $descripcion, $tipo)
{
    echo "<a class='contenedor-producto $oferta producto $tipo' $url>";
    echo "<img src='$imagen'>";
    if ($descuento > 0) {
        echo "<h4><span class='precio-anterior'>$" . "$precioAnterior</span></h4>";
        echo "<p class='descuento'>$descuento% OFF</p>";
    }
    echo "<h4 class='precio-descuento'>$" . "$precio</h4>";
    echo "<p>$descripcion</p>";
    echo "</a>"; 
}
?>

