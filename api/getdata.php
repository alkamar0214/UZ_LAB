<?php

incude 'connect.php';

$queryResult=$connect->query("SELECT * FROM user_tbl");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>