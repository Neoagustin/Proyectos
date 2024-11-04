<?php
session_start();
include('../includes/producto-carrito.php');
include('../config/database/database.php');

if (!(isset($_SESSION['id_usuario']) && isset($_SESSION['nombre_usuario']))) {
    header("Location: ./pagina.php");
    exit();
}

if (isset($_GET['btn-agregarCarrito'])) {
    $_SESSION['imagen'] = $_GET['imagen'];
    $_SESSION['descripcion'] = $_GET['descripcion'];
    $_SESSION['unidades'] = $_GET['unidades'];
    $_SESSION['disponibles'] = $_GET['disponibles'];
    $_SESSION['precio'] = $_GET['precio'];
    $_SESSION['id_color'] = $_GET['color'];
    $_SESSION['nombre_color'] = $_GET['nombre_color'];

    agregarProductoAlCarrito(
        $_SESSION['id_usuario'],
        obtenerIdProducto($_SESSION['imagen'], $conexion),
        $_SESSION['precio'],
        $_SESSION['descripcion'],
        $_SESSION['unidades'],
        $_SESSION['disponibles'],
        $_SESSION['nombre_color'],
        $_SESSION['imagen'] . $_SESSION['id_color'],
        $conexion
    );

    unset($_SESSION['id']);
    unset($_SESSION['imagen']);
    unset($_SESSION['descripcion']);
    unset($_SESSION['unidades']);
    unset($_SESSION['disponibles']);
    unset($_SESSION['precio']);

    header("Location: carrito.php");
    exit();
}

// Al iniciar sesión, recuperar productos del carrito desde la base de datos
if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])) {
    $usuario_id = $_SESSION['id_usuario'];

    $query = "SELECT * FROM carrito WHERE usuario_id = ?";
    $stmt = $conexion->prepare($query);

    if ($stmt === false) {
        die("Error de preparación: " . $conexion->error);
    }

    $stmt->bind_param("i", $usuario_id);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['productos'] = array();
        while ($row = $result->fetch_assoc()) {
            $_SESSION['productos'][] = $row;
        }
    } else {
        $_SESSION['productos'] = array();
    }

    $stmt->close();
}


if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])) {

    $usuario_id = $_SESSION['id_usuario'];
    $query = "SELECT unidades FROM carrito WHERE usuario_id = ?";

    $stmt = $conexion->prepare($query);

    if ($stmt) {
        $stmt->bind_param("s", $usuario_id);
        $stmt->execute();

        if ($stmt->error) {
            die("Error de ejecución: " . $stmt->error);
        }

        $result_unidades = $stmt->get_result();

        $suma_unidades = 0; 

        if ($result_unidades->num_rows > 0) {
            while ($row = $result_unidades->fetch_assoc()) {
                $row['unidades'];
                $suma_unidades += $row['unidades'];
            }
            $_SESSION['unidades_carrito'] = $suma_unidades;
        }

        if ($result_unidades->num_rows == 0) {
            $_SESSION['unidades_carrito'] = 0;
        }

        $stmt->close();
    } else {
        die("Error de preparación: " . $conexion->error);
    }
} else {
    echo "<p>No se ha iniciado sesión o no hay un usuario válido.</p>";
}

if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])) {

    $usuario_id = $_SESSION['id_usuario'];
    $query = "SELECT * FROM carrito WHERE usuario_id = ?";

    $stmt = $conexion->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $usuario_id);
        $stmt->execute();

        if ($stmt->error) {
            die("Error de ejecución: " . $stmt->error);
        }

        $result_unidades = $stmt->get_result();

        $suma_precio = 0; 

        if ($result_unidades->num_rows > 0) {
            while ($row = $result_unidades->fetch_assoc()) {
                $row['precio'];
                $row['unidades'];

                $subtotal_producto = $row['precio'] * $row['unidades'];
                $suma_precio += $subtotal_producto;
            }
            $envio = 3190;
            $total_con_envio = $suma_precio + $envio;
            $_SESSION['unidades_carrito'] = $suma_unidades;
        } else {
            echo "<p>No hay productos en el carrito.</p>";
        }

        $stmt->close();
    } else {
        die("Error de preparación: " . $conexion->error);
    }
} else {
    echo "<p>No se ha iniciado sesión o no hay un usuario válido.</p>";
}
?>


<!DOCTYPE html>
<html lang="en">
<?php
include('../includes/head.php');
?>
<link rel="stylesheet" href="../assets/css/main/main-carrito.css">
<link rel="stylesheet" href="../assets/css/responsive/main-responsive/carrito-responsive.css">
<title>Carrito</title>

<body>
    <?php
    include('../includes/header.php');
    ?>
    <div class="contenedor-principal-carrito">
        <main class="main-carrito">
            <div class="<?php echo $result->num_rows > 0 ? 'contenedor-carrito-vacio ocultar' : 'contenedor-carrito-vacio'; ?>">
                <div>
                    <p>!</p>
                </div>
                <h3>Mi carrito</h3>
                <p>No hay productos en tu carrito de compras.</p>
                <a href="./pagina.php">CONTINUAR COMPRANDO</a>
            </div>
            <div class="<?php echo $result->num_rows > 0 ? 'contenedor-carrito-lleno' : 'contenedor-carrito-vacio ocultar'; ?>">
                <a class="btn-continuar-comprando" href="./pagina.php">
                    <i class="fa-solid fa-arrow-left-long"></i>
                    <p>Continuar comprando</p>
                </a>
                <div class="contenedor-padre-productos-carrito">
                    <div class="contenedor-padre-productos-carrito-izquierda">
                        <?php
                        if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])) {

                            $usuario_id = $_SESSION['id_usuario'];
                            $query = "SELECT * FROM carrito WHERE usuario_id = ?";
                            $stmt = $conexion->prepare($query);

                            if ($stmt === false) {
                                die("Error de preparación: " . $conexion->error);
                            }

                            $stmt->bind_param("i", $usuario_id);
                            $stmt->execute();

                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    agregarProductoFromDatabase($row);
                                }
                            }

                            $stmt->close();
                        } else {
                            echo "<p>No se ha iniciado sesión o no hay un usuario válido.</p>";
                        }
                        ?>



                    </div>
                    <div class="contenedor-padre-productos-carrito-derecha">
                        <div class="contenedor-hijo-productos-carrito-derecha">
                            <h4>Resumen de compra</h4>
                            <hr />
                            <div class="contenedor-sumatoria-compra-carrito">
                                <p>Productos (<?php echo $suma_unidades ?>)</p>
                                <p>$ <?php echo number_format($suma_precio, 0, ',', '.'); ?></p>
                                <p>Envío</p>
                                <p>$ <?php echo number_format($envio, 0, ',', '.'); ?></p>
                            </div>
                            <hr />
                            <div class="contenedor-realizarCompra-carrito">
                                <div>
                                    <p>Total</p>
                                    <p>$ <?php echo number_format($total_con_envio, 0, ',', '.'); ?></p>
                                </div>
                                <a class="btn_continuar_compra">Continuar Compra</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include('../includes/footer.php') ?>
    </div>

    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>