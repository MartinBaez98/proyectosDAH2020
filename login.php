<?php

$usuario = $_POST["usuario"];
$contra = $_POST["contra"];

if($usuario == "admin" && $contra == "admin") {
    header("Location: pantallaPrincipal.html");
}else{
    echo "El usuario o la contraseña son incorrectos";
}

?>