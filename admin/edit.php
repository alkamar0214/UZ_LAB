<?php

include '../../controller/db.php';
$result1 ="";

$user_id = $_REQUEST["id"];

$get_record = mysqli_query($conn, "SELECT * FROM inventory_tbl WHERE id=$user_id");
while ($row = mysqli_fetch_assoc($get_record)) {
    
	$id = $row['id'];
	$item_name = $row['item_name'];
	$item_desc = $row['item_desc'];
	$item_quantity = $row['item_quantity'];
	$item_remaining = $row['item_remaining'];
	$item_img = $row['item_img'];
}

$target_dir ="images/";

$uploadErr ="";

if (isset($_POST['btnUpload'])) {
    
    $target_file = $target_dir . "/" . basename($_FILES["profile_pic"]["name"]);

    $uploadOk = 1;

    if (file_exists($target_file)) {
        
        $target_file = $target_dir . rand(1,9) . rand(1,9) . rand(1,9) . rand(1,9) . "_" . basename($_FILES["profile_pic"]["name"]);

        $uploadOk =1; 

    }

    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if ($_FILES["profile_pic"]["size"] > 50000000000000) {
        
        $uploadErr = "Sorry!";

        $uploadOk = 0;

    }

    if ($imageFileType =! "jpg" && $imageFileType != "png") {
        $uploadErr = "sorry wrong format!";

        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
            // echo "the file" . basename($_FILES["profile_pic"]["name"]) . " has beed uploaded!";

            mysqli_query($conn, "UPDATE inventory_tbl set img='$target_file' WHERE id='$id' ");

            echo '<script>window.location.href="edit.php?id='.$id.'"</script>';
        } else {
            echo "sorry error hahahah! obob!";
        }
    }

}

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>UZ LAB | Management </title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- Bootstrap core CSS     -->
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
	<!--  Material Dashboard CSS    -->
	<link href="../../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="../../assets/css/demo.css" rel="stylesheet" />
	<!--     Fonts and icons     -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-color="green">
<!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
<div class="logo">
	<a href="#" class="simple-text">
		<img src="../../assets/img/uzlogosmall.png" style="height: 120px; width: auto;"><br>
	</a>
	<h4 align="center">LAB Management</h4>

</div>
<div class="sidebar-wrapper">
	<ul class="nav">
		<li class="active">
			<a href="dashboard.html">
				<i class="material-icons">home</i>
				<p>Home</p>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#pagesExamples">
				<i class="material-icons">person</i>
				<p> Student Profile
					<b class="caret"></b>
				</p>
			</a>
			<div class="collapse" id="pagesExamples">
				<ul class="nav">
					<li class="nav-item ">
						<a class="nav-link" href="#">
							<span class="sidebar-normal"> Add Student </span>
							<span style="font-size: 14px;" class="sidebar-mini"><b> &plus; </b></span>
						</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="#">
							<!-- <span class="sidebar-mini"> RS </span> -->
							<span class="sidebar-normal"> List of Student </span>
							<span style="font-size: 14px;" class="sidebar-mini"><b> &equiv; </b></span>
						</a>
					</li>
				</ul>
			</div>
		</li>
		<li>
			<a href="./user.html">
				<i class="material-icons">undo</i>
				<p>Borrow</p>
			</a>
		</li>
		<li>
			<a href="./table.html">
				<i class="material-icons">redo</i>
				<p>Return</p>
			</a>
		</li>
		<li>
			<a href="./typography.html">
				<i class="material-icons">apps</i>
				<p>Inventory</p>
			</a>
		</li>
		<div class="logo"></div>
		<li>
			<a href="./notifications.html">
				<i class="material-icons">exit_to_app</i>
				<p>Logout</p>
			</a>
		</li>
		<li class="active-pro">
			<a href="upgrade.html">
				<i class="material-icons">unarchive</i>
				<p>Upgrade to PRO</p>
			</a>
		</li>
	</ul>
</div>
</div>
<div class="main-panel">
	<nav class="navbar navbar-transparent navbar-absolute">
		<div class="container-fluid">


			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown active">
						<a href="#" class="dropdown-toggle btn btn-primary btn-fab btn-round" data-toggle="dropdown">
							<i class="material-icons">person</i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Logout 
									<i class="material-icons">exit_to_app</i></a>
								</li>
							</ul>
						</li>
					</div>
				</div>
			</nav>
			<div class="content">
				<div class="container-fluid">
					<div class="row">

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								
							</div>
						</div>
					</div>
				</div>
			</div>
<footer class="footer">
	<div class="container-fluid">
		<p class="copyright pull-right">
			&copy;
			<script>
				document.write(new Date().getFullYear())
			</script> |
			<a href="#">Universidad de Zamboanga</a>, made with passion for a better system
		</p>
	</div>
</footer>
</div>
</div>
</body>
<!--   Core JS Files   -->
<script src="../../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

// Javascript method's body can be found in assets/js/demos.js
demo.initDashboardPageCharts();

});
</script>
</html>