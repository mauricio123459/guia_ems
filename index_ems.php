<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>GUIA</title>
<link rel="stylesheet" type="text/css" href="estilos_jr.css">
</head>

<body background="3.jpg">

<font size="15" color="#3C8199">GUIA CIUDADANA 💎</font>
<hr>

<form method="post">
    <h1>VISITANTES</h1>
    <h2>- REGISTRAR PERSONAS-</h2>

    <input type="text" name="NOMBRE" placeholder="Nombre">
    <input type="text" name="AP_PATERNO" placeholder="Apellido Paterno">
    <input type="text" name="AP_MATERNO" placeholder="Apellido Materno">
    <input type="text" name="LOCALIDAD_COMUNIDAD" placeholder="Localidad o Comunidad">
    <input type="text" name="MUNICIPIO" placeholder="Municipio">

    <input type="submit" name="visitante" value="Registrar">
</form>

  <?php
        include("registrar_v2.php");
    ?>
</body>
</html>