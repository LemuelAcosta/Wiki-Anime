<?php
include("DB.php");
    $Nombre = '';
    $Apellido = '';
    $Documento= '';
    $Nacionalidad= '';
    $Raza= '';
    $Ocupacion= '';
    $Sexo= '';
    $Fecha_nac= '';
    $Poder= '';
    $Serie= '';
    $Estado= '';
    $Biografia= '';
    $Foto= '';

if (isset($_POST['update'])) {
  $id = $_GET['id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Documento = $_POST['Documento'];
    $Nacionalidad = $_POST['Nacionalidad'];
    $Raza = $_POST['Raza'];
    $Ocupacion = $_POST['Ocupacion'];
    $Sexo = $_POST['Sexo'];
    $Fecha_nac = $_POST['Fecha_nac'];
    $Poder = $_POST['Poder'];
    $Serie = $_POST['Serie'];
    $Estado = $_POST['Estado'];
    $Biografia = $_POST['Biografia'];
    $Foto = $_POST['Foto'];


  $query = "UPDATE
    `personajes`
SET
    `Nombre` = '$Nombre',
    `Apellido` = '$Apellido',
    `Documento` = '$Documento',
    `Nacionalidad` = '$Nacionalidad',
    `Raza` = '$Raza',
    `Ocupacion` = '$Ocupacion',
    `Sexo` = '$Sexo',
    `Fecha_nac` = '$Fecha_nac',
    `Poder` = '$Poder',
    `Serie` = '$Serie',
    `Estado` = '$Estado',
    `Biografia` = '$Biografia',
    `Foto` = '$Foto'
WHERE
    'Id' = $id ";
  mysqli_query($conn, $query);
  header('Location: Personajes.php');
}

?>
