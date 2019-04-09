<?php


// Add Item
function add(){
	if (isset($_POST['add_item'])) {
	require 'db.php';
		$item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
		$item_desc = mysqli_real_escape_string($conn, $_POST['item_desc']);
		$item_quantity = mysqli_real_escape_string($conn, $_POST['item_quantity']);
		$item_remaining = mysqli_real_escape_string($conn, $_POST['item_remaining']);
		$item_date = mysqli_real_escape_string($conn, $_POST['item_date']);

		$result = mysqli_query($conn, "INSERT INTO inventory_tbl (item_name,item_desc,item_quantity,item_remaining,item_date) VALUES ('$item_name','$item_desc','$item_quantity','$item_quantity','$item_date')");

		echo '<div style="top: -220px;" class="alert alert-info alert-with-icon alert-dismissable" data-notify="container" id="flash-msg">
		<i data-notify="icon" class="material-icons">check_circle</i>
		<span data-notify="message"><b>Success,</b> Added to Inventory.</span>
		</div>';


		echo '<meta http-equiv="refresh" content="3; url=inventory.php" />';
	}
}

// View Inventory
function view(){
	require 'db.php';

	$result = mysqli_query($conn, "SELECT * FROM inventory_tbl");
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$item_name = $row['item_name'];
		$item_desc = $row['item_desc'];
		$item_quantity = $row['item_quantity'];
		$item_remaining = $row['item_remaining'];
		$item_img = $row['item_img'];

		echo '
		<tr>
		<td style="width:20px"><img src="'.$item_img.'" height="10px;"></td>
		<td>'.$item_name.'</td>
		<td>'.$item_desc.'</td>
		<td>'.$item_quantity.'</td>
		<td>'.$item_remaining.'</td>
		<td>
		<button class="btn btn-info btn-sm"><i class="material-icons">create</i>
		</button>
		<button name="approve_btn" data-toggle="modal" data-target="#smallmodal'.$id.'" class="btn btn-danger btn-sm"><i class="material-icons">delete</i>
		</button>
		<a class="btn btn-primary btn-sm">image <i class="material-icons">add_photo_alternate</i>
		</a>
		</td>
		</tr>
		';
	}
}

?>