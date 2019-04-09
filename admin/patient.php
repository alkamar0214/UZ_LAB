
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
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
                <a href="http://www.creative-tim.com" class="simple-text">
                   <img src="https://www.clipartmax.com/png/full/108-1083036_dental-solutions-ltd-dental-clinic-logo-png.png" style="height: 120px; width: auto;"><br>
                </a>
                <h4 align="center"><b>Coronica-Carbon</b></h4>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
        <li>
            <a href="./index1.php">
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
        <li class="active">
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
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle btn btn-primary btn-fab btn-round" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Logout 
                                    <i class="fa fa-sign-out"></i></a>
                                    </li>
                                </ul>
                            </li>

                            <!--
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                            -->

                        <!--
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                        -->
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Patient</h4>
                                    <p class="category">Add New Patient</p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Firstname</label>
                                                    <input type="text" class="form-control" oninvalid="this.setCustomValidity('What is your firstname?')" oninput="setCustomValidity('')" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Middlename</label>
                                                    <input type="text" class="form-control" oninvalid="this.setCustomValidity('What is your middlename?')" oninput="setCustomValidity('')" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Lastname</label>
                                                    <input type="text" class="form-control" oninvalid="this.setCustomValidity('What is your lastname?')" oninput="setCustomValidity('')" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" class="form-control" oninvalid="this.setCustomValidity('What is your address?')" oninput="setCustomValidity('')" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-check-label">Birthday</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-check-label">Gender</label><br>
                                                    <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked> Male
                                                      <span class="circle">
                                                        <span class="check"></span>
                                                      </span>
                                                    </label>
                                                    <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"> Female
                                                      <span class="circle">
                                                        <span class="check"></span>
                                                      </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-check-label">Civil Status</label>
                                                    <select name="course" id="course" class="form-control">
                                                        <option value="">Select</option>
                                                        <option>Single</option>
                                                        <option>Married</option>
                                                        <option>Divorced</option>
                                                            
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-check-label">Occupation</label>
                                                    <input type="text" class="form-control" oninvalid="this.setCustomValidity('What is your address?')" oninput="setCustomValidity('')" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info pull-right" onclick="demo.showNotification('top','center')">Save <i class="material-icons">check</i></button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                    <img style="height: 130px; width: auto; margin-top: -50px" src="https://www.clipartmax.com/png/full/108-1083036_dental-solutions-ltd-dental-clinic-logo-png.png" />
                                <div class="content">
                                    <h6 class="category text-gray">Coronica-Carbon</h6>
                                    <hr>
                                    <h4 class="card-title">Vision</h4>
                                    <p class="card-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <h4 class="card-title">Mission</h4>
                                    <p class="card-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>

                                    <!--
                                    <a href="https://web.facebook.com/UZSince1948/" class="btn btn-rose btn-round">Follow <i class="fa fa-facebook"></i></a>
                                    -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-left">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
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