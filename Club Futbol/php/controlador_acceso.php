<?php
session_name('usuario');
session_start();

$req = require('../connection/conexion.php');

if ($req) {
    # CREANDO VARIABLES #
    $email_acceso = $_POST['email_acceso_socios'];
    $clave_acceso = $_POST['clave_acceso_socios'];

    $clave_acceso = hash('md5', $clave_acceso);

    $sql = $conexion->query("SELECT * FROM $tabla_db1 where email = '$email_acceso'");
    if ($datos = $sql->fetch_object()) {
        $clave_database = $datos->clave;
        if ($clave_database == $clave_acceso) {
            $_SESSION['id'] = $datos->id;
            $_SESSION['nombre'] = $datos->nombre;
            $_SESSION['apellido'] = $datos->apellido;
            $_SESSION['fecha_nacimiento'] = $datos->fecha_nacimiento;
            $_SESSION['sexo'] = $datos->sexo;
            $_SESSION['numero_documento'] = $datos->numero_documento;
            $_SESSION['email'] = $datos->email;
            $_SESSION['clave'] = $datos->clave;
            $_SESSION['area_celular'] = $datos->area_celular;
            $_SESSION['numero_celular'] = $datos->numero_celular;
            echo "Bienvenido " . $_SESSION['nombre'] . "!";
        } else {
            echo "<h4 style='color: red;'>Contraseña incorrecta.</h4>";
        }
    } else if (empty($email_acceso) or empty($clave_acceso)) {
        echo "<h4 style='color: red;'>Completa todos los campos.</h4>";
    } else {
        echo "<h4 style='color: red;'>Ese direccion de corro electronico no existe.</h4>";
    }
}
