<?php
# AGREGANDO CONEXION #
$req = include('../connection/conexion.php');

if ($req) {

    # CREANDO VARIABLES #
    $nombre_asociate = $_POST['nombre_asociate_socios'];
    $apellido_asociate = $_POST['apellido_asociate_socios'];
    $fecha_nacimiento_asociate = $_POST['fecha_nacimiento_asociate_socios'];
    $sexo_asociate = $_POST['sexo_asociate_socios'];
    $num_documento_asociate = $_POST['num_doc_asociate_socios'];
    $email_asociate = $_POST['email_asociate_socios'];
    $confirmacion_email_asociate = $_POST['cofirmar_email_asociate_socios'];
    $clave_asociate = $_POST['clave_asociate_socios'];
    $confirmacion_clave_asociate = $_POST['confirmarClave_asociate_socios'];
    $area_celular_asociate = $_POST['cod_area_celular_asociate_socios'];
    $numero_celular_asociate = $_POST['numero_celular_asociate_socios'];

    # VALIDANDO FORMULARIOS #
    if (!preg_match('/^[a-zA-Z]{3,15}$/', $nombre_asociate)) {
        echo "<h4 style='color: red;'>Los datos ingresados en el campo 'Nombre' no coinciden con los requisitos solicitados.</h4>";
        exit();
    } else if (!preg_match('/^[a-zA-Z]{3,15}$/', $apellido_asociate)) {
        echo "<h4 style='color: red;'>Los datos ingresados en el campo 'Apellido' no coinciden con los requisitos solicitados.</h4>";
        exit();
    } else if ($fecha_nacimiento_asociate == "") {
        echo "<h4 style='color: red;'>Debes colocar una 'fecha de nacimiento' valida</h4>";
        exit();
    } else if ($sexo_asociate == "Vacio") {
        echo "<h4 style='color: red;'>Debes elegir el sexo</h4>";
        exit();
    } else if (!(is_numeric($num_documento_asociate))) {
        echo "<h4 style='color: red;'>Debes colocar solo numeros en el campo 'Numero de Documento'</h4>";
        exit();
    } else if (!(str_contains($email_asociate, "@"))) {
        echo "<h4 style='color: red;'>Debes Colorar el simbolo '@' en el campo 'Email'</h4>";
        exit();
    } else if (!(str_contains($confirmacion_email_asociate, "@"))) {
        echo "<h4 style='color: red;'>Debes Colorar el simbolo '@' en el campo 'Confirmar Email'</h4>";
        exit();
    } else if (!preg_match('/^[a-zA-Z0-9@_-]{7,14}$/', $clave_asociate)) {
        echo "<h4 style='color: red;'>Los datos ingresados en el campo 'Clave' no coinciden con los requisitos solicitados.</h4>";
        exit();
    } else if (!preg_match('/^[a-zA-Z0-9@_-]{7,14}$/', $confirmacion_clave_asociate)) {
        echo "<h4 style='color: red;'>Los datos ingresados en el campo 'Clave' no coinciden con los requisitos solicitados.</h4>";
        exit();
    } else if ($clave_asociate != $confirmacion_clave_asociate) {
        echo "<h4 style='color: red;'>Las contraseñas no coinciden</h4>";
        exit();
    } else if (!(is_numeric($area_celular_asociate))) {
        echo "<h4 style='color: red;'>Debes colocar solo numeros en el campo 'Cod. área'</h4>";
        exit();
    } else if (empty($area_celular_asociate)) {
        echo "<h4 style='color: red;'>Debes completar el campo 'Cod. área'</h4>";
        exit();
    } else if (!(is_numeric($numero_celular_asociate))) {
        echo "<h4 style='color: red;'>Debes colocar solo numeros en el campo 'Celular'</h4>";
        exit();
    } else if (!preg_match('/^[0-9]{6,16}$/', $numero_celular_asociate)) {
        echo "<h4 style='color: red;'>Los datos ingresados en el campo 'Clave' no coinciden con los requisitos solicitados.</h4>";
        exit();
    }

    # LIMPIANDO CADENAS DE TEXTO #
    function verificar_datos($filtro, $cadena)
    {
        if (preg_match("/^" . $filtro . "$/", $cadena)) {
            return false;
        } else {
            return true;
        }
    }

    function limpiar_cadena($cadena)
    {
        $cadena = trim($cadena);
        $cadena = stripslashes($cadena);
        $cadena = str_ireplace("<script>", "", $cadena);
        $cadena = str_ireplace("</script>", "", $cadena);
        $cadena = str_ireplace("<script src", "", $cadena);
        $cadena = str_ireplace("<script type=", "", $cadena);
        $cadena = str_ireplace("SELECT * FROM", "", $cadena);
        $cadena = str_ireplace("DELETE FROM", "", $cadena);
        $cadena = str_ireplace("INSERT INTO", "", $cadena);
        $cadena = str_ireplace("DROP TABLE", "", $cadena);
        $cadena = str_ireplace("DROP DATABASE", "", $cadena);
        $cadena = str_ireplace("TRUNCATE TABLE", "", $cadena);
        $cadena = str_ireplace("SHOW TABLES;", "", $cadena);
        $cadena = str_ireplace("SHOW DATABASES;", "", $cadena);
        $cadena = str_ireplace("<?php", "", $cadena);
        $cadena = str_ireplace("?>", "", $cadena);
        $cadena = str_ireplace("--", "", $cadena);
        $cadena = str_ireplace("^", "", $cadena);
        $cadena = str_ireplace("<", "", $cadena);
        $cadena = str_ireplace("[", "", $cadena);
        $cadena = str_ireplace("]", "", $cadena);
        $cadena = str_ireplace("==", "", $cadena);
        $cadena = str_ireplace(";", "", $cadena);
        $cadena = str_ireplace("::", "", $cadena);
        $cadena = trim($cadena);
        $cadena = stripslashes($cadena);
        return $cadena;
    }

    $nombre_asociate = limpiar_cadena($nombre_asociate);
    $apellido_asociate = limpiar_cadena($apellido_asociate);
    $fecha_nacimiento_asociate = limpiar_cadena($fecha_nacimiento_asociate);
    $sexo_asociate = limpiar_cadena($sexo_asociate);
    $num_documento_asociate = limpiar_cadena($num_documento_asociate);
    $email_asociate = limpiar_cadena($email_asociate);
    $confirmacion_email_asociate = limpiar_cadena($confirmacion_email_asociate);
    $clave_asociate = limpiar_cadena($clave_asociate);
    $confirmacion_clave_asociate = limpiar_cadena($confirmacion_clave_asociate);
    $area_celular_asociate = limpiar_cadena($area_celular_asociate);
    $numero_celular_asociate = limpiar_cadena($numero_celular_asociate);

    $clave_asociate = hash('md5', $clave_asociate);
    $confirmacion_clave_asociate = hash('md5', $confirmacion_clave_asociate);

    $sql = $conexion->query("SELECT * FROM $tabla_db1 WHERE email = '$email_asociate'");
    if ($datos = $sql->fetch_object()) {
        echo "<h4 style='color: red;'>Esa direccion de correo electronico ya ha sido registrada.</h4>";
    } else {
        echo "Registrado con exito";
        $sql = $conexion->query("INSERT INTO $tabla_db1(nombre,apellido,fecha_nacimiento,sexo,numero_documento,email,clave,area_celular,numero_celular) 
        VALUES('$nombre_asociate','$apellido_asociate','$fecha_nacimiento_asociate','$sexo_asociate','$num_documento_asociate',
        '$email_asociate','$clave_asociate','$area_celular_asociate','$numero_celular_asociate')");
    }
}
