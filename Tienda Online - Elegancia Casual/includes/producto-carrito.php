<?php
function agregarProductoAlCarrito($usuario_id, $producto_id, $precio, $descripcion, $unidades, $disponibles, $nombre_color, $imagen, $conexion)
{
    $usuario_id = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : null;
    $query = "INSERT INTO carrito (usuario_id, producto_id, precio, descripcion, unidades, disponibles, nombre_color, imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($query);

    if ($stmt === false) {
        die("Error de preparación: " . $conexion->error);
    }

    $stmt->bind_param("iidsiiss", $usuario_id, $producto_id, $precio, $descripcion, $unidades, $disponibles, $nombre_color, $imagen);
    $resultado = $stmt->execute();

    if ($resultado === false) {
        die("Error de ejecución: " . $stmt->error);
    }

    $id_producto = $stmt->insert_id;
    $stmt->close();

    $_SESSION['productos'][] = array(
        'id' => $id_producto,
        'producto_id' => $producto_id,
        'descripcion' => $descripcion,
        'unidades' => $unidades,
        'disponibles' => $disponibles,
        'precio' => $precio,
        'nombre_color' => $nombre_color,
        'imagen' => $imagen
    );
}

function agregarProducto($index)
{
    $producto = $_SESSION['productos'][$index];

    echo "<div class='contenedor-producto'>";
    echo "<div class='contenedor-izquierda-producto'>";
    echo "<img src='{$producto['imagen']}.png' alt='producto' class='producto-imagen'>";
    echo "</div>";
    echo "<div class='contenedor-derecha-producto'>";
    echo "<p class='descripcion-producto-carrito'>{$producto['descripcion']}</p>";
    echo "<div class='contenedor-sumarRestar-unidades-producto'>";
    echo "<select class='unidades-producto' name='unidades'>";
    for ($i = 1; $i <= 4; $i++) {
        if ($i <= $producto['unidades_disponibles']) {
            $selected = ($i == $producto['unidades']) ? 'selected' : '';
            echo "<option value='$i' $selected>$i</option>";
        }
    }
    echo "</select>";
    echo "<div class='fila-abajo'>";
    echo "<p class='disponibles-producto'>({$producto['disponibles']} disponibles)</p>";
    echo "</div>";
    echo "</div>";
    echo "<p class='precio-producto'>{$producto['precio']}</p>";
    echo "<div class='contenedor-acciones-producto-carrito'>";
    echo "<a class='eliminar-producto')'>Eliminar</a>";
    echo "<p class='comprar-producto'>Comprar ahora</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

function agregarProductoFromDatabase($producto)
{
    echo "<div class='contenedor-producto'>";
    echo "<div class='contenedor-izquierda-producto'>";
    echo "<img src='{$producto['imagen']}.png' alt='producto' class='producto-imagen'>";
    echo "</div>";
    echo "<div class='contenedor-derecha-producto'>";
    echo "<p class='descripcion-producto-carrito'>{$producto['descripcion']}</p>";
    echo "<div class='contenedor-sumarRestar-unidades-producto'>";
    echo "<select class='unidades-producto' name='unidades' onchange='actualizarUnidades({$producto['id']}, this.value, {$producto['disponibles']})'>";
    for ($i = 1; $i <= $producto['disponibles']; $i++) {
        if ($i <= $producto['disponibles']) {
            $selected = ($i == $producto['unidades']) ? 'selected' : '';
            echo "<option value='$i' $selected>$i</option>";
        }
    }
    echo "</select>";
    echo "<div class='fila-abajo'>";
    echo "<p class='disponibles-producto'>({$producto['disponibles']} disponibles)</p>";
    echo "</div>";
    echo "</div>";
    echo "<p class='precio-producto'>" . number_format($producto['precio'], 0, ',', '.') . "</p>";
    echo "<div class='contenedor-acciones-producto-carrito'>";
    echo "<p class='eliminar-producto' onclick='eliminarProducto({$producto['id']})'>Eliminar</p>";
    echo "<p class='comprar-producto'>Comprar ahora</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

function obtenerIdProducto($imagen, $conexion)
{
    $query = "SELECT id FROM productos WHERE imagen = ? LIMIT 1";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, "s", $imagen);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $idProducto);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    return $idProducto;
}
