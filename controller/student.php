<?php

# Project: UZ LAB Management System
# Developer: Khalid L. Usman	
# File Created: 03/28/2019

function add_student(){
	if (isset($_POST['add'])) {
		require 'db.php';

		$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
		$stud_no = mysqli_real_escape_string($conn, $_POST['stud_no']);
		$course = mysqli_real_escape_string($conn, $_POST['course']);
		$year = mysqli_real_escape_string($conn, $_POST['year']);

		$insert = mysqli_query($conn, "INSERT INTO student_profile (fullname,stud_no,course,year)VALUES ('$fullname','$stud_no','$course','$year')");

		echo '
		<div class="col-md-10">
		<div style="top: -230px;" class="alert alert-info alert-with-icon alert-dismissable" data-notify="container" id="flash-msg">
		<i data-notify="icon" class="material-icons">check_circle</i>
		<span data-notify="message"><b>Success,</b> student added.</span>
		</div>
		</div>';

		echo '<meta http-equiv="refresh" content="3; url=student.php" />';
	}
}

function view_student(){
	require 'db.php';
	$view = mysqli_query($conn, "SELECT * FROM student_profile ORDER BY id DESC");
	while ($row = mysqli_fetch_assoc($view)) {
		
		$id = $row['id'];
		$fullname = $row['fullname'];
		$stud_no = $row['stud_no'];
		$course = $row['course'];
		$year = $row['year'];

		echo '
		<tr>
		<td>'.$stud_no.'</td>
		<td>'.$fullname.'</td>
		<td>'.$course.'</td>
		<td>'.$year.'</td>
		<td>
		<button class="btn btn-flat btn-sm btn-warning" title="Borrow" data-toggle="modal" data-target="#borrowModal'.$id.'"><i class="material-icons">undo</i> Borrow</button>
		<button class="btn btn-flat btn-sm btn-info" title="Edit" data-toggle="modal" data-target="#myModal'.$id.'"><i class="material-icons">border_color</i></button>
		<button class="btn btn-flat btn-sm btn-danger" title="Delete" data-toggle="modal" data-target="#myModal'.$id.'"><i class="material-icons">delete</i></button>
		</td>
		</tr>

		<!-- Borrow -->
		<div style="top: -75px" class="modal fade" id="borrowModal'.$id.'" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title">Borrow Apparatus</h5>
		</div>
		<hr>
		<div class="modal-body">
		<form method="post">
		<input type="hidden" name="edit_id" value="'.$id.'">
		<div class="row">
		<div class="col-md-12">
		<div class="form-group">


		<div class="col-md-6">
		<div class="form-group label-floating">
		<label class="control-label">Subject</label>
		<input type="text" name="subj" class="form-control">
		</div>
		</div>

		<div class="col-md-6">
		<div class="form-group label-floating">
		<label class="control-label">Experiment Title</label>
		<input type="text" name="exp_title" class="form-control">
		</div>
		</div>


		<div class="col-md-6">
		<div class="form-group">
		<label class="form-check-label">Borrower</label>
		<input type="text" class="form-control" value="'.ucfirst($fullname).'" disabled>		
		<input type="hidden" name="borrower" id="borrower" class="form-control" value="'.ucfirst($fullname).'">

		</div>
		</div>

		<div class="col-md-6">
		<div class="form-group">
		<label class="form-check-label">Date of Request</label>
		<input type="date" name="date_of_req" id="theDate" class="form-control" >
		<br>
		</div>
		</div>

		<div class="col-md-6">
		<div class="form-group">
		<label class="form-check-label">Apparatus (Remaining)</label>
		<select name="item_name" id="item_name" class="form-control" required>
		<option>Select</option>
		';
		$qry=mysqli_query($conn, "SELECT * FROM inventory_tbl");
		while ($arrcourse=mysqli_fetch_assoc($qry)) {

			$item_name = $arrcourse['item_name'];
			$item_remaining = $arrcourse['item_remaining'];
			echo "<option value='$item_name'> $item_name ($item_remaining) </option>";
		}
		echo '
		</select>
		</div>
		</div>

		<div class="col-md-6">
		<div class="form-group">
		<label class="form-check-label">Quanity</label>
		<input type="number" name="quantity" class="form-control">
		</select>
		<br><br>
		</div>
		</div>

		<div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel <i class="material-icons">close</i></button>
		<button type="submit" name="borrow" class="btn btn-success">OK <i class="material-icons">check</i></button>
		</div>
		</form>
		';

		// Borrow Function
		if (isset($_POST['borrow'])){
			require 'db.php';

			$edit_id = $_POST['edit_id'];

			$course_yr = $course . " " . $year;
			$stud_no = $stud_no;
			$borrower = mysqli_real_escape_string($conn, $_POST['borrower']);
			$subj = mysqli_real_escape_string($conn, $_POST['subj']);
			$exp_title = mysqli_real_escape_string($conn, $_POST['exp_title']);
			$item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
			$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
			$date_of_req = mysqli_real_escape_string($conn, $_POST['date_of_req']);

			$item_name2 = $_POST["item_name"];

			$q = mysqli_query($conn, "SELECT * FROM inventory_tbl WHERE item_name='$item_name2'");
			while ($arrcourse=mysqli_fetch_assoc($q)) {

				$item_remaining = $arrcourse['item_remaining'];


				$quantity = $_POST['quantity'];

				$item_remaining = $item_remaining - $quantity;

				$result2 = mysqli_query($conn,"UPDATE inventory_tbl SET item_remaining = $item_remaining WHERE item_name='$item_name2'");
			}

			$result = mysqli_query($conn, "INSERT INTO borrow_tbl (stud_no,borrower,course_yr,subj,exp_title,item_name,quantity,date_of_req,status) VALUES ('$stud_no','$borrower','$course_yr','$subj','$exp_title','$item_name','$quantity','$date_of_req','Borrowed')");

			echo '
			<script>alert("Success!")</script>';
			header('borrow.php'); 
			echo '<script>window.location.href="borrow.php"</script>';
			exit;
		}
	}
}


function view_student_borrow(){
	require 'db.php';
	$view = mysqli_query($conn, "SELECT * FROM borrow_tbl WHERE status='Borrowed' ORDER BY id DESC");
	while ($row = mysqli_fetch_assoc($view)) {
		
		$id = $row['id'];
		$stud_no = $row['stud_no'];
		$borrower = $row['borrower'];
		$course_yr = $row['course_yr'];
		$subj = $row['subj'];
		$exp_title = $row['exp_title'];
		$item_name = $row['item_name'];
		$quantity = $row['quantity'];
		$date_of_req = $row['date_of_req'];

		echo '
		<tr>
		<td>'.$stud_no.'</td>
		<td>'.$borrower.'</td>
		<td>'.$course_yr.'</td>
		<td>'.$subj.'</td>
		<td>'.$exp_title.'</td>
		<td>'.$item_name.'</td>
		<td><h4><span class="label label-info">'.$quantity.'</span></h4></td>
		<td>'.$date_of_req.'</td>
		<td>
		<button class="btn btn-flat btn-sm btn-success" title="Borrow" data-toggle="modal" data-target="#returnModal'.$id.'"><i class="material-icons">redo</i> Return</button>
		</td>
		</tr>

		<!-- Return -->
		<div style="top: -50px" class="modal fade" id="returnModal'.$id.'" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title">Return</h5>
		</div>
		<hr>
		<div class="modal-body">
		<form method="post">
		<input type="hidden" name="edit_id" value="'.$id.'">
		<div class="row">
		<div class="col-md-12">
		<div class="form-group">


		<div class="col-md-6">
		<div class="form-group">
		<label class="form-check-label">Quanity</label>
		<input type="text" name="quantity" class="form-control" value="'.$quantity.'" disabled>
		<input type="hidden" name="quantity" class="form-control" value="'.$quantity.'">
		<br><br>
		</div>
		</div>


		<input type="hidden" name="subj" class="form-control" value="'.$subj.'">
		<input type="hidden" name="exp_title" class="form-control" value="'.$exp_title.'">

		<div class="col-md-6">
		<div class="form-group">
		<label class="form-check-label">Item Name</label>
		<input type="text" name="item_name" class="form-control" value="'.$item_name.'" disabled>
		<input type="hidden" name="item_name" class="form-control" value="'.$item_name.'">
		</select>
		<br><br>
		</div>
		</div>

		<div class="col-md-6">
		<div class="form-group">
		<label class="form-check-label">Borrower</label>
		<input type="text" class="form-control" value="'.ucfirst($borrower).'" disabled>		
		<input type="hidden" name="borrower" id="borrower" class="form-control" value="'.ucfirst($borrower).'">

		</div>
		</div>

		<div class="col-md-6">
		<div class="form-group">
		<label class="form-check-label">Date of Return</label>
		<input type="date" name="date_of_req" id="theDate" class="form-control" >
		<br>
		</div>
		</div>


		<div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel <i class="material-icons">close</i></button>
		<button type="submit" name="return" class="btn btn-success">OK <i class="material-icons">check</i></button>
		</div>
		</form>
		';

		// Borrow Function
		if (isset($_POST['return'])){
			require 'db.php';

			$edit_id = $_POST['edit_id'];

			$borrower = mysqli_real_escape_string($conn, $_POST['borrower']);
			$subj = mysqli_real_escape_string($conn, $_POST['subj']);
			$exp_title = mysqli_real_escape_string($conn, $_POST['exp_title']);
			$item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
			$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
			$date_of_req = mysqli_real_escape_string($conn, $_POST['date_of_req']);

			
			$item_name2 = $_POST["item_name"];

			$q = mysqli_query($conn, "SELECT * FROM inventory_tbl WHERE item_name='$item_name2'");
			while ($arrcourse=mysqli_fetch_assoc($q)) {

				$item_remaining = $arrcourse['item_remaining'];

				$quantity = $_POST['quantity'];

				$item_remaining = $item_remaining + $quantity;

				$result2 = mysqli_query($conn,"UPDATE inventory_tbl SET item_remaining = $item_remaining WHERE item_name='$item_name2'");
			}

			$result = mysqli_query($conn, "INSERT INTO return_tbl (stud_no,borrower,course_yr,subj,exp_title,item_name,quantity,date_of_ret) VALUES ('$stud_no','$borrower','$course_yr','$subj','$exp_title','$item_name','$quantity',NOW())");

			$result3 = mysqli_query($conn,"UPDATE borrow_tbl SET status = 'Returned' WHERE item_name='$item_name'");

			echo '
			<script>alert("Success!")</script>';
			echo '<script>window.location.href="borrow.php"</script>';
		}
	}
}


function view_student_return(){
	require 'db.php';
	$view = mysqli_query($conn, "SELECT * FROM return_tbl ORDER BY id DESC");
	while ($row = mysqli_fetch_assoc($view)) {
		
		$id = $row['id'];
		$stud_no = $row['stud_no'];
		$borrower = $row['borrower'];
		$course_yr = $row['course_yr'];
		$subj = $row['subj'];
		$exp_title = $row['exp_title'];
		$item_name = $row['item_name'];
		$quantity = $row['quantity'];
		$date_of_ret = $row['date_of_ret'];

		echo '
		<tr>
		<td>'.$stud_no.'</td>
		<td>'.$borrower.'</td>
		<td>'.$course_yr.'</td>
		<td>'.$subj.'</td>
		<td>'.$exp_title.'</td>
		<td>'.$item_name.'</td>
		<td><h4><span class="label label-info">'.$quantity.'</span></h4></td>
		<td>'.$date_of_ret.'</td>
		</tr>
		';

		// Borrow Function
		// if (isset($_POST['return'])){
		// 	require 'db.php';

		// 	$edit_id = $_POST['edit_id'];

		// 	$borrower = mysqli_real_escape_string($conn, $_POST['borrower']);
		// 	$subj = mysqli_real_escape_string($conn, $_POST['subj']);
		// 	$exp_title = mysqli_real_escape_string($conn, $_POST['exp_title']);
		// 	$item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
		// 	$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
		// 	$date_of_req = mysqli_real_escape_string($conn, $_POST['date_of_req']);

			
		// 	$item_name2 = $_POST["item_name"];

		// 	$q = mysqli_query($conn, "SELECT * FROM inventory_tbl WHERE item_name='$item_name2'");
		// 	while ($arrcourse=mysqli_fetch_assoc($q)) {

		// 		$item_remaining = $arrcourse['item_remaining'];

		// 		$quantity = $_POST['quantity'];

		// 		$item_remaining = $item_remaining + $quantity;

		// 		$result2 = mysqli_query($conn,"UPDATE inventory_tbl SET item_remaining = $item_remaining WHERE item_name='$item_name2'");
		// 	}

		// 	$result = mysqli_query($conn, "INSERT INTO return_tbl (stud_no,borrower,course_yr,subj,exp_title,item_name,quantity,date_of_ret) VALUES ('$stud_no','$borrower','$course_yr','$subj','$exp_title','$item_name','$quantity',NOW())");

		// 	$result3 = mysqli_query($conn,"UPDATE borrow_tbl SET status = 'Returned' WHERE item_name='$item_name'");

		// 	echo '
		// 	<script>alert("Success!")</script>';
		// 	echo '<script>window.location.href="borrow.php"</script>';
		// }
	}
}
?>