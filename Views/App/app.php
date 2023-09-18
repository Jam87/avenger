<?php


/*echo "<b>Usuario:</b>" . $_SESSION['idUser'] . "<br>";
echo "<b>ID sesion actual:</b>" . $_SESSION['Inicio_sesion'] . "<br>";
echo "<b>Fecha de inicio:</b>" . $_SESSION['Fecha_inicio'] . "<br>";
echo "<b>IP de conexion:</b>" . $_SESSION['Ip_conexion'] . "<br>";*/


/*dep($_SESSION['usuario'][0]);
exit();*/


$usuarioObj = json_decode(json_encode($_SESSION['usuario'][0]), false);

$controler = ucfirst($usuarioObj->vista);


if (isset($usuarioObj->vista) && !empty($usuarioObj->vista)) {
    include  "Views/" . ucfirst($usuarioObj->vista) . "/" . $usuarioObj->vista . ".php";
} else {
    include  "Views/" . "Errors/" . "error" . ".php";
}


//dep($_SESSION['usuario']);

/* $usuarioObj = json_decode(json_encode($_SESSION['usuario'][0]), false);

$controler = ucfirst($usuarioObj->vista);


if (isset($usuarioObj->vista) && !empty($usuarioObj->vista)) {
    include  "Views/" . ucfirst($usuarioObj->vista) . "/" . $usuarioObj->vista . ".php";
} else {
    include  "Views/" . "Errors/" . "error" . ".php";
}
*/