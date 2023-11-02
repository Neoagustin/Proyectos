<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <?php
    if (isset($_SESSION['id_usuario']) && isset($_SESSION['nombre_usuario'])) {
    ?>
        <link rel="stylesheet" href="../assets/css/usuario_logeado.css">
    <?php
    }
    ?>

    <link rel="icon" type="image/png" href="../assets/img/Iconos/icono_pagina.png">
</head>