<?php

require '../controller/db.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Science Lab Management | UZ</title>
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

</head>

<body>       
    <br><br><br>
    <div class="row" style="margin: auto;"> 
        <div class="col-md-4 col-md-offset-4">
            <div class="card">
                <div class="card-header text-center" data-background-color="green">
                    <img style="height: 150px; width: auto; margin-top: -70px;" src="../assets/img/uzlogosmall.png" />
                    <h4>Science LAB Management System</h4>
                </div>
                <div class="card-content">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Username</label>
                                    <input type="text" id="username" name="username" class="form-control" oninvalid="this.setCustomValidity('What is your username?')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" oninvalid="this.setCustomValidity('What is your password?')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="login" class="btn btn-info" style="width: 100%;">Login <i class="material-icons">arrow_forward_ios</i></button>
                    </form>
                    <?php
                    include '../controller/login.php';
                    userLogin();
                    ?>
                    <hr>
                    <p style="text-align: center;" class="text-muted">Science LAB Management © 2019 | Developed by: <a href="#">Universidad de Zamboanga</a></p>
                </div>
            </div>
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

</html>