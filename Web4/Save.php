<?php 
include('DB.php');

 $ruta = "assets/img/".$_FILES['avatar-file']['name'];
   $RT =  move_uploaded_file($_FILES["avatar-file"]["tmp_name"], $ruta);
    $_POST['avatar-file'] = $ruta;

	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Nacionalidad = $_POST['Nacionalidad'];
	$Raza = $_POST['Raza'];
	$Estado = $_POST['Estado'];
	$Fecha_nac = $_POST['Fecha_nac'];
	$Cedula = $_POST['Cedula'];
	$Sexo = $_POST['Sexo'];
	$Poder = $_POST['Poder'];
	$Ocupacion = $_POST['Ocupacion'];
	$avatarFile = $_POST['avatar-file'];
	$Biografia = $_POST['Biografia'];
	$serie = $_POST['Serie'];

	$query = "INSERT INTO `personajes`(
    `Nombre`,
    `Apellido`,
    `Documento`,
    `Nacionalidad`,
    `Raza`,
    `Ocupacion`,
    `Sexo`,
    `Fecha_nac`,
    `Poder`,
    `Serie`,
    `Estado`,
    `Biografia`,
    `Foto`
)
VALUES(
    '$Nombre',
    '$Apellido',
    '$Cedula',
    '$Nacionalidad',
    '$Raza',
    '$Ocupacion',
    '$Sexo',
    '$Fecha_nac',
    '$Poder',
    '$serie',
    '$Estado',
    '$Biografia',
    '$avatarFile'
)";

  	$result = mysqli_query($conn, $query);
  	if(!$result)
  	 {
    	die("Query Failed.");
  	}
	header('Location: Personajes.php')

  ?>