<?php
session_name('usuario');
session_start();

unset($_SESSION['id']);

header('location: ../index.php');
?>