<?php 

	/*
	* Created by Belal Khan
	* website: www.simplifiedcoding.net 
	* Retrieve Data From MySQL Database in Android
	*/
	
	//database constants
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'uzlab2019');
	
	//connecting to database and getting the connection object
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	//Checking if any error occured while connecting
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	
	//creating a query
	$stmt = $conn->prepare("SELECT id, item_name, item_desc, item_quantity, item_remaining, item_img FROM inventory_tbl;");
	
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($id, $item_name, $item_desc, $item_quantity, $item_remaining, $item_img);
	
	$products = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['id'] = $id; 
		$temp['item_name'] = $item_name; 
		$temp['item_desc'] = $item_desc; 
		$temp['item_quantity'] = $item_quantity; 
		$temp['item_remaining'] = $item_remaining; 
		$temp['item_img'] = $item_img; 
		array_push($products, $temp);
	}
	
	//displaying the result in json format 
	echo json_encode($products);