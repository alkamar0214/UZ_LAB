<?php

  	include 'connect.php';

  

    $username = (isset($_POST['username']));
    $password = (isset($_POST['password']));
//     $username = $_POST['username'];
//   	$password = $_POST['password'];

  	$consultar=$connect->query("SELECT * FROM user_tbl
  		WHERE username='".$username."' and password='".$password."'");

  	$result=array();

  	while($extraerDatos=$consultar->fetch_assoc()){
  		$result[]=$extraerDatos;

  	}
  	echo json_encode($result);
  	?>
