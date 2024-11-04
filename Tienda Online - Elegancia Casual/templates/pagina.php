<?php
session_start();

// Verifica si la sesión está activa o si existe la cookie "recuerdame"
if (!isset($_SESSION['id_usuario']) && isset($_COOKIE['recuerdame'])) {
    // Si la sesión no está activa pero la cookie "recuerdame" está presente
    $userData = json_decode(base64_decode($_COOKIE['recuerdame']), true);

    if ($userData && isset($userData['id'], $userData['nombre'], $userData['email'])) {
        // Inicia sesión utilizando la información de la cookie
        $_SESSION['id_usuario'] = $userData['id'];
        $_SESSION['nombre_usuario'] = $userData['nombre'];
        $_SESSION['email_usuario'] = $userData['email'];
    }
}


include('../config/database/database.php');
include('../includes/Tarjeta-producto.php');

if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])) {

    $usuario_id = $_SESSION['id_usuario'];
    $query = "SELECT unidades FROM carrito WHERE usuario_id = ?";

    $stmt = $conexion->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $usuario_id);
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
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('../includes/head.php'); ?>
<link rel="stylesheet" href="../assets/css/main/main-pagina.css">
<link rel="stylesheet" href="../assets/css/responsive/main-responsive/pagina-responsive.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4/bootstrap-4.css">
<title>ELEGANCIA CASUAL</title>

<body id="body-pagina">
    <?php include('../includes/header.php'); ?>
    <section class="seccion-presentacion">
        <div>
            <h1>ELEGANCIA CASUAL</h1>
            <p>Descubre tu estilo</p>
        </div>
    </section>

    <main class="main-inicio">
        <?php include('../includes/tarjeta-login.php'); ?>
        <section class="seccion-filtros-productos">
            <ul>
                <li>
                    <p>Filtrar:</p>
                </li>
                <li class="todo-tab active">
                    <p>Todo</p>
                </li>
                <li class="remeras-tab">
                    <p>Remeras</p>
                </li>
                <li class="buzos-tab">
                    <p>Buzos</p>
                </li>
            </ul>
        </section>

        <?php
        $secciones = ["masVendido", "ofertas", "nuevosModelos"];

        $seccionesNombres = [
            "masVendido" => "MAS VENDIDO",
            "ofertas" => "OFERTAS",
            "nuevosModelos" => "NUEVOS MODELOS"
        ];

        foreach ($secciones as $seccion) {
            $query = "SELECT * FROM productos WHERE seccion = '$seccion'";
            $resultado = mysqli_query($conexion, $query);

            if ($resultado && $resultado->num_rows > 0) {
                // Agrega un id a la sección basado en el valor de $seccion
                echo "<h3 id='$seccion'>" . $seccionesNombres[$seccion] . "</h3>";
                echo "<section class='seccion-$seccion'>";
                while ($row = $resultado->fetch_array()) {
                    $id = $row['id'];
                    $imagen = $row['imagen'];
                    $precioAnterior = number_format($row['precioAnterior'], 0, ',', '.');
                    $descuento = $row['descuento'];
                    $precio = number_format($row['precio'], 0, ',', '.');
                    $descripcion = $row['descripcion'];
                    $tipo = $row['tipo'];

                    $oferta = $descuento > 0 ? 'oferta' : '';

                    $url = 'href="producto.php?id=' . $id . '"';
                    tarjetaProducto($url, $oferta, $imagen . '1.png', $precioAnterior, $descuento, $precio, $descripcion, $tipo);
                }
                echo "</section>";
            } else {
                echo "<h3 id='$seccion'>" . $seccionesNombres[$seccion] . "</h3>";
                echo "No hay productos en esta sección.";
            }
        }
        ?>
    </main>
    <?php include('../includes/footer.php') ?>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
