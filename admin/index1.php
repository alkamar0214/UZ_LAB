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
		<img src="https://www.clipartmax.com/png/full/108-1083036_dental-solutions-ltd-dental-clinic-logo-png.png" style="height: 120px; width: auto;"><br>
	</a>
	<h4 align="center"><b>Coronica-Carbon</b></h4>

</div>
<div class="sidebar-wrapper">
	<ul class="nav">
		<li class="active">
			<a href="index1.php">
				<i class="material-icons">home</i>
				<p>Home</p>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="material-icons">person</i>
				<p>User</p>
			</a>
		</li>
		<li>
			<a href="./patient.php">
				<i class="material-icons">group</i>
				<p>Patients</p>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="material-icons">table</i>
				<p>Schedule</p>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="material-icons">list_alt</i>
				<p>Patient Records</p>
			</a>
		</li>
		<div class="logo"></div>
		<li>
			<a href="#">
				<i class="material-icons">exit_to_app</i>
				<p>Logout</p>
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
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="purple">
									<i class="material-icons">person</i>
								</div>
								<div class="card-content">
									<p class="category">User</p>
									<h3 class="title">3/5
										<!-- <small>GB</small> -->
									</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">trending_up</i>
										<a href="#pablo">View Details</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">group</i>
								</div>
								<div class="card-content">
									<p class="category">Patients</p>
									<h3 class="title">32</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">trending_up</i>
										<a href="#pablo">View Details</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="material-icons">table_chart</i>
								</div>
								<div class="card-content">
									<p class="category">Schedule</p>
									<h3 class="title">75</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">trending_up</i>
										<a href="#pablo">View Details</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="material-icons">print</i>
								</div>
								<div class="card-content">
									<p class="category">Report</p>
									<h3 class="title">+245</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">print</i> 
										<a href="#pablo">Print All Records</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">

							<!-- <div class="card">
								<div class="card-header card-chart" data-background-color="green">
									<div class="ct-chart" id="dailySalesChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Daily Enrollees</h4>
									<p class="category">
										<span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in daily enrollees.</p>
									</div>
									<div class="card-footer">
										<div class="stats">
											<i class="material-icons">access_time</i> updated 1 month ago
										</div>
									</div>
								</div>
							</div> -->

							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-header card-chart" data-background-color="green">
											<div class="ct-chart" id="dailySalesChart"></div>
										</div>
										<div class="card-content">
											<h4 class="title">Daily Patient</h4>
											<p class="category">
												<span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
											</div>
											<div class="card-footer">
												<div class="stats">
													<i class="material-icons">access_time</i> updated 4 minutes ago
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="card">
											<div class="card-header card-chart" data-background-color="orange">
												<div class="ct-chart" id="emailsSubscriptionChart"></div>
											</div>
											<div class="card-content">
												<h4 class="title">Email Subscriptions</h4>
												<p class="category">Last Campaign Performance</p>
											</div>
											<div class="card-footer">
												<div class="stats">
													<i class="material-icons">access_time</i> campaign sent 2 days ago
												</div>
											</div>
										</div>
									</div>
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
							<a href="https://www.facebook.com/Pinaka.Mahabang.UserName.Sa.Peysbuk">K. Usman</a>, made with love for a better system
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