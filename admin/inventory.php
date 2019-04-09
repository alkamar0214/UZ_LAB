<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>UZ LAB | Management </title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- Bootstrap core CSS     -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<!--  Material Dashboard CSS    -->
	<link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="../assets/css/demo.css" rel="stylesheet" />
	<!--     Fonts and icons     -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>

	<link href="../data-table/assets/css/fresh-bootstrap-table1.css" rel="stylesheet" />

	<style type="text/css">
        .col-md-12 img{
            width: 40px;
        }
    </style>
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
		<img src="../assets/img/uz-lab-logo.png" style="height: 150px; width: auto;"><br>
	</a>
	<h4 align="center">LAB Management</h4>

</div>
<div class="sidebar-wrapper">
	<ul class="nav">
        <li>
            <a href="index.php">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li> 
            <a href="student.php">
                <i class="material-icons">person_pin</i>
                <p>Student Profile</p>
            </a>
        </li>
		<li>
			<a href="./borrow.php">
				<i class="material-icons">undo</i>
				<p>Borrow</p>
			</a>
		</li>
		<li>
			<a href="./return.php">
				<i class="material-icons">redo</i>
				<p>Return</p>
			</a>
		</li>
		<li class="active">
			<a href="./inventory.php">
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
								<a href="logout.php">Logout 
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
							<!-- <div class="row"> -->
                                <button type="submit" title="Add Item" data-toggle="modal" data-target="#myModal" class="btn btn-round btn-info pull-left" style="margin-left: 20px;">Add Item <i class="material-icons">add_circle</i></button>
                            <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons pull-right">apps</i>
                                    <h4 class="title">Inventory</h4>
                                    <p class="category">List of Apparatus</p>
                                </div>
                                <div class="card-content table-responsive">
                                <!-- Add Item Modal -->
                                <div style="top: -70px" class="modal fade" id="myModal" tabindex="-1" role="dialog">
                                	<div class="modal-dialog" role="document">
                                		<div class="modal-content">
                                			<div class="modal-header">
                                				<h5 class="modal-title">Add Item</h5>
                                			</div>
                                			<hr>
                                			<div class="modal-body">
                                				<form method="post">
                                					<div class="row">
                                						<div class="col-md-12">
                                							<div class="form-group">
                                								<div class="col-md-6">
                                									<div class="form-group label-floating">
                                										<label class="control-label">Item Name</label>
                                										<input type="text" class="form-control" name="item_name" id="item_name" required>
                                									</div>
                                								</div>
                                								<div class="col-md-6">
                                									<div class="form-group label-floating">
                                										<label class="control-label">Item Description</label>
                                										<select name="item_desc" id="item_desc" class="form-control" required>
                                											<option>Select</option>
                                											<option value="Breakable">Breakable</option>
                                											<option value="Non-Breakable">Non-Breakable</option>
                                										</select>
                                									</div>
                                								</div>
                                								<div class="col-md-6">
                                									<div class="form-group">
                                										<label class="form-check-label">Quantity</label>
                                										<input type="number" name="item_quantity" id="item_quantity" class="form-control" placeholder="Enter Quantity of Item" required>
                                										<input type="hidden" name="item_remaining" id="item_remaining">
                                										<br>
                                									</div>
                                								</div>
                                								<div class="col-md-6">
                                									<div class="form-group">
                                										<label class="form-check-label">Date</label>
                                										<input type="date" name="item_date" id="item_date" class="form-control" required>
                                										<br>
                                									</div>
                                								</div>
                                							</div>
                                						</div>

                                					</div>
                                				</div>
                                				<hr>
                                				<div class="modal-footer">
                                					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel <i class="material-icons">close</i></button>
                                					<button type="submit" name="add_item" class="btn btn-info">Submit <i class="material-icons">check</i></button>
                                					<?php
                                            		require '../controller/inventory.php';
                                					?>
                                				</div>
                                			</form>
                                		</div>
                                	</div>
                                </div>
                                <!-- End Add Item Modal -->
                                    <table id="datatables" class="table table-striped table-no-bordered table-hover">
                                        <thead class="text-success">
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Quantity</th>
                                            <th>Remaining</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            view(); add();
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
							<!-- </div> -->
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
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

// Javascript method's body can be found in assets/js/demos.js
demo.initDashboardPageCharts();

});
</script>
<!-- Data Table -->
<script type="text/javascript" src="../data-table/assets/js/bootstrap-table.js"></script>
<script type="text/javascript">
    var $table = $('#datatables'),
    $alertBtn = $('#alertBtn'),
    full_screen = false;

    $().ready(function(){
        $table.bootstrapTable({
            toolbar: ".toolbar",

            showRefresh: false,
            search: true,
            showToggle: false,
            showColumns: false,
            pagination: true,
            striped: true,
            pageSize: 8,
            pageList: [8,10,25,50,100],

            formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..." 
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });



        $(window).resize(function () {
            $table.bootstrapTable('resetView');
        });


        window.operateEvents = {
            'click .like': function (e, value, row, index) {
                alert('You click like icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            },
            'click .edit': function (e, value, row, index) {
                alert('You click edit icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);    
            },
            'click .remove': function (e, value, row, index) {
                $table.bootstrapTable('remove', {
                    field: 'id',
                    values: [row.id]
                });

            }
        };

        $alertBtn.click(function () {
            alert("You pressed on Alert");
        });

    });

</script>

<!-- Added -->
<script type="text/javascript">
    $(document).ready(function () {
        $("#flash-msg").delay(2000).fadeOut("slow");
    });
</script>
</html>