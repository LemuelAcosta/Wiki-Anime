<?php 
include('DB.php');

	if(isset($_GET['id'])) {
	  $id = $_GET['id'];
	  $query = "DELETE FROM `personajes` WHERE Id = $id";
	  $result = mysqli_query($conn, $query);
	  if(!$result) {
	    die("Query Failed.");
	  }}
	  	header('Location: Personajes.php')


 ?>