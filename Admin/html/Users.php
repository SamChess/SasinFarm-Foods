<?php
session_start();
if(isset($_SESSION['user_firstname'])){
}else{
    header("location: ../../web/log in.php?login error");
}
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'sasin'; // Database Name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$sql = 'SELECT firstname,lastname,email,gender,country,dob FROM users WHERE access_level=0;';
$query = mysqli_query($conn, $sql);
if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
        <title>Admin-SasinFarm Foods </title>
        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="css/colors/default.css" id="theme" rel="stylesheet">
        <style type="text/css">
        body {
        font-size: 15px;
        color: #343d44;
        font-family: "segoe-ui", "open-sans", tahoma, arial;
        padding: 0;
        margin: 0;
        }
        table {
        margin: auto;
        font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
        font-size: 12px;
        width:100%;
        }
        h1 {
        margin: 25px auto 0;
        text-align: center;
        text-transform: uppercase;
        font-size: 17px;
        }
        table td {
        transition: all .5s;
        }
        
        /* Table */
        .data-table {
        border-collapse: collapse;
        font-size: 13px;
        min-width: 537px;
        }
        .data-table th,
        .data-table td {
        border: 1px solid # #c6ff1a;
        padding: 7px 17px;
        }
        .data-table caption {
        margin: 7px;
        }
        /* Table Header */
        .data-table thead th {
        background-color: #508abb;
        color: #FFFFFF;
        border-color: #6ea1cc !important;
        text-transform: uppercase;
        }
        /* Table Body */
        .data-table tbody td {
        color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
        text-align: right;
        }
        .data-table tbody tr:nth-child(odd) td {
        background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
        background-color: #c6ff1a;
        border-color: #ffff0f;
        }
        /* Table Footer */
        .data-table tfoot th {
        background-color: #e5f5ff;
        text-align: right;
        }
        .data-table tfoot th:first-child {
        text-align: left;
        }
        .data-table tbody td:empty
        {
        background-color: #ffcccc;
        }
        </style>
        
    </head>
    <body class="fix-header">
        
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
        
        <div id="wrapper">
            
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header">
                    <div class="top-left-part">
                        <!-- Logo -->
                        <a class="logo" href="index_admin.php">
                            <!-- Logo icon image, you can use font-icon also --><b>
                            <!--This is dark logo icon--><img src="../plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="../plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                            </b>
                            <!-- Logo text image you can use text also --><span class="hidden-xs">
                            <!--This is dark logo text--><img src="../plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="../plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                        </span> </a>
                    </div>
                    <!-- /Logo -->
                </div>
                
            </nav>
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav slimscrollsidebar">
                    <div class="sidebar-head">
                        <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                    </div>
                    <ul class="nav" id="side-menu">
                        <li style="padding: 70px 0 0;">
                            <a href="index_admin.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="Users.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Users</a>
                        </li>
                        <li>
                            <a href="locations.php" class="waves-effect"><i class=" fa fa-arrows-alt fa-fw" aria-hidden="true"></i>Locations</a>
                        </li>
                        <li>
                            <a href="fontawesome.html" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Icons</a>
                        </li>
                        <li>
                            <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Google Map</a>
                        </li>
                        <li>
                            <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Blank Page</a>
                        </li>
                        <li>
                              <a href="admin_logout.php" class="waves-effect"><i class="glyphicon glyphicon-log-out"aria-hidden="true"></i>    Log out</a>
                        </li>
                    </ul>
                    
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- End Left Sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page Content -->
            <!-- ============================================================== -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- ============================================================== -->
                    <!-- table content -->
                    <!-- ============================================================== -->
                    <section id="admin">
                        <h3 class="box-title">Registered Users</h3>
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Country</th>
                                    <th>Date of Birth</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if ($query-> num_rows > 0) {
                                while ($row = mysqli_fetch_array($query))
                                {
                                echo
                                '<tr>
                                    <td>'.$no.'</td>
                                    <td>'.$row['firstname'].'</td>
                                    <td>'.$row['lastname'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['gender'].'</td>
                                    <td>'.$row['country'].'</td>
                                    <td>'.$row['dob'].'</td>
                                </tr>';
                                $no++;
                                }
                                }
                                ?>
                            </tbody>
                        </table>
                    </section>
                  
                    <!-- /.container-fluid -->
                <footer class="footer text-center"> 2018 &copy; SasinFarm Foods </footer>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!--slimscroll JavaScript -->
        <script src="js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/custom.min.js"></script>
    </body>
</html>