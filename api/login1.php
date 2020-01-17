<?php

  	include 'connect.php';

  	
    $username = $_POST['username'];
  	$password = $_POST['password'];

  	$consultar=$connect->query("SELECT * FROM user_tbl
  		WHERE username='".$username."' and password='".$password."'");

  	$result=array();

  	while($extraerDatos=$consultar->fetch_assoc()){
  		$result[]=$extraerDatos;

  	}
  	echo json_encode($result);
  	?>
