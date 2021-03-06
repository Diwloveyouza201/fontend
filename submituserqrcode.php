<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>QR Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/colorprofile.css" rel="stylesheet">
    <?php
    require_once './dbconnect.php';
    ?>
</head>

<body id="Profile">
    <?php

    $conn = new dbconnect();
    $conn->get_User();

    $get =  $_SESSION['data_user'];
    // echo $get['image'];
    $conn->getEvent_Show();
    $product = $_SESSION['showevent'];
    // $data = $conn->showimage();
    $datenow = date('Y-m-d');
    $data =  $_SESSION['getdataQrCode'];
    //    echo $data[0]['userid']['name'];

    // $data = $_REQUEST['sec'];

    // $conn->get_User_QRcode_event($showuseridqrcode);
    // $qruser=$showuseridqrcode;

    // $conn->getdataQrCode($eventid);
    // $data = $_SESSION['getdataQrCode'];
    // echo $data['userid']['name'];

    ?>


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">QR Scane </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>????????????????????????</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>?????????????????????</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">???????????????????????????????????????</h6>
                        <a class="collapse-item" href="Activity_All2.php">??????????????????????????????????????????</a>
                        <a class="collapse-item" href="Activity_My.php">???????????????????????????????????????</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>?????????????????????????????????</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">?????????????????? ????????????????????????????????? ??????????????????</h6>
                        <a class="collapse-item" href="QR_Code_All2.php">????????????????????????????????? ??????????????????????????????????????????</a>
                        <a class="collapse-item" href="QR_Code_Join.php">??????????????????????????????????????????????????????</a>
                        <a class="collapse-item" href="QR_Code_Not_Join.php">???????????????????????????????????????????????????????????????????????? </a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Report.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>??????????????????</span></a>
            </li>

            <!-- Divider -->
            <?php if ($get['adminuser'] == 0) { ?>
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Admin
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>???????????????????????????????????????</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">???????????????????????????????????????</h6>
                            <a class="collapse-item" href="Activity_End_Admin.php">???????????????????????????????????????????????????</a>
                            <a class="collapse-item" href="Activity_Admin.php">?????????????????????????????????????????????????????????</a>

                        </div>
                    </div>
                </li>



                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagess" aria-expanded="true" aria-controls="collapsePagess">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>????????????????????????????????????</span>
                    </a>
                    <div id="collapsePagess" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">????????????????????????????????????</h6>
                            <a class="collapse-item" href="User.php">???????????????????????????</a>
                            <a class="collapse-item" href="Admin2.php">?????????????????????????????????</a>

                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Report_Admin.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>??????????????????</span></a>
                </li>
            <?php } ?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo   $get['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo $get['imguser']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="Profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <!-- <h1 class="h3 mb-0 text-gray-800">Profile</h1> -->
                        <!-- <a href="#" data-toggle="modal" data-target="#Edit_Profile" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>????????????????????????????????????</a> -->
                        <a href="#" data-toggle="modal" data-target="#Edit_image" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>???????????????????????????????????????????????????</a>
                    </div>
                    <div class="modal fade" id="Edit_image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">???????????????????????????????????????????????????</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">??</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <div class="form-row">
                                            <div class="input-data ">
                                                <div class="form-row">
                                                    <div class="row row-cols-12" style="margin-top: 10px;">
                                                        <div class="col" align="center">
                                                            <form action="ChackData.php?Status=statususerqrcode&qrcodeid=<?php echo $data[0]['qrcode_ID'];  ?>" method="POST" enctype="multipart/form-data">
                                                                <P>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</P>
                                                                <div class="col" align="center">
                                                                    <button class="btn btn-outline-danger" type="button" data-dismiss="modal">??????????????????</button>
                                                                    <button class="btn btn-outline-success" name="submit" type="submit" value="submit">??????????????????</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        function preview() {
                            frame.src = URL.createObjectURL(event.target.files[0]);
                        }
                    </script>
                    <div class="modal fade" id="Edit_Profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">??</span>
                                    </button>
                                </div>
                                <form action="insertevent.php?Status=EditUserProfile&iduser=<?php echo $get['user_ID'] ?>&Username=<?php echo $get['username'] ?>&password=<?php echo $get['password'] ?>" method="POST" style="padding-top: 0px;" enctype='multipart/form-data'>
                                    <div class="row">
                                        <div class="col-md-4 border-right" style="padding-right: 0px;padding-left: 12px;">
                                            <div>
                                                <input type="input" value="<?php echo $get["imguser"]; ?>" name="partimage" enctype='multipart/form-data'>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" style="width: 115px;" src="<?php echo $get["imguser"]; ?>" width="90">
                                                <h10><?php echo $get["name"]; ?><br><br>
                                                    <!-- <input type="file" name="photo" onchange="preview()"> -->
                                                    <input type="file" class="btn btn-outline-success" style="width:200px;  background: #ffffff;" name="photo" />
                                            </div>
                                        </div>
                                        <div class="col-md-8">

                                            <div class="p-3 ">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                                        <h10>????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</h10>
                                                    </div>

                                                </div>



                                                <div class="modal-body">
                                                    <div class="row mt-2">
                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">????????????-????????????</label><input type="text" class="form-control" placeholder="????????????-????????????" name="Name" value="<?php echo $get["name"]; ?>" required></div>
                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">????????????????????????</label><input type="text" class="form-control" placeholder="????????????????????????" name="NickName" value="<?php echo $get["nickname"]; ?>" required></div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">????????????</label><input type="number" min="0" max="130" class="form-control" placeholder="????????????" name="Age" value="<?php echo $get["age"]; ?>" required></div>

                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">????????????????????????</label><input type="tel" class="form-control" placeholder="????????????????????????" name="Phone" pattern="[0]{1}[6-9]{1}[0-9]{8}" value="<?php echo $get["phone"]; ?>" required></div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">Email</label><input type="email" class="form-control" placeholder="Email" name="Email" value="<?php echo $get["email"]; ?>" required></div>
                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">Line id</label><input type="text" class="form-control" placeholder="Line id" name="Line_ID" value="<?php echo $get["lineid"]; ?>" required></div>
                                                    </div>

                                                    <div class="gender"> <br>
                                                        <label class="gender" for="">????????? </label><br>
                                                        <input type="radio" id="html" name="Gender" value="">
                                                        <label class="gender" for="html">?????????</label>
                                                        <input type="radio" style="margin-left: 19px;" id="html" name="Gender" value="">
                                                        <label for="html">????????????</label>
                                                    </div>
                                                    <div class="col" align="center">
                                                        <button class="btn btn-outline-danger" type="button" data-dismiss="modal">??????????????????</button>
                                                        <input class="btn btn-outline-success" type="submit" value="??????????????????"></input>
                                                    </div>
                                                </div>

                                                </from>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>


                    <!------------?????????????????????????????????----------------- -->
                    <div class="card-body text-center">
                        <!-- <div class="card-footer B-my-profile text-white">
        My Profile
    </div> -->

                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4" style="max-width: 50% position relative;">

                                    <img src="<?php echo $data[0]['userid']['imguser']; ?> " class="img-fluid rounded-start" width="200" height="300">

                                </div>

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col" align="left">
                                                <H6>???????????? : <?php echo $data[0]['userid']['name']; ?><h5></h5>
                                                    </H4>
                                            </div>
                                            <div class="col" align="left">
                                                <H6>???????????????????????? : <?php echo $data[0]['userid']['nickname']; ?><h5></h5>

                                                    </H4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col" align="left">
                                                <H6>??????????????? : <?php echo $data[0]['userid']['email']; ?><h5></h5>
                                                </H6>
                                            </div>
                                            <div class="col" align="left">
                                                <H6>???????????? : <?php echo $data[0]['userid']['age']; ?><br>
                                                    <h5><br> ????????? : <?php
                                                                    if ($data[0]['userid']['gender'] == "G01") {
                                                                        echo "?????????";
                                                                    } else {
                                                                        echo "????????????";
                                                                    } ?><br>

                                                    </h5>
                                                </H6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col" align="left">
                                                <H6>???????????????????????? : <?php echo $data[0]['userid']['phone']; ?> <br> </H6>
                                            </div>
                                            <div class="col" align="left">
                                                <H6>Line : <?php echo $data[0]['userid']['lineid']; ?> <br> </H6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>?????????????????????????????????</th>
                                                <th>???????????????????????????????????????</th>
                                                <th>????????????????????????????????????</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No.</th>
                                                <th>?????????????????????????????????</th>
                                                <th>???????????????????????????????????????</th>
                                                <th>????????????????????????????????????</th>
                                            </tr>
                                        </tfoot>
                                        <!-- <form action="ChackData.php?Status=EditUser">-->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <?php
                                                $a = 0;
                                                while ($a < count($product)) : ?>
                                                    <?php if ($product[$a]['event_id'] == $data[0]['eventid']['event_id']) { ?>
                                                    <?php }  ?>
                                                    <?php $a++ ?>
                                                <?php endwhile ?>
                                            </div>
                                        </div>
                                        <?php
                                        $i = 0;
                                        $n = 0;
                                        while ($i < count($product)) : ?>
                                            <?php if ($product[$i]['event_id'] == $data[0]['eventid']['event_id']) { ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $i + 1; ?></td>
                                                        <td><?php echo $data[0]['eventid']['eventname']; ?></td>
                                                        <td>??????????????????:<?php echo $data[0]['eventid']['eventdate']; ?> ????????????:<?php echo $data[0]['eventid']['eventtime']; ?></td>
                                                        <td> <a href="crad.php?idqrcode=<?php echo $data[0]['qrcode_ID'];?>"></i>?????????????????????????????????????????????????????????</a></td>
                                                    </tr>
                                                </tbody>
                                            <?php } ?>
                                            <?php $i++ ?>
                                        <?php endwhile ?>
                                        <!--</form>-->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Content Wrapper -->
                </div>
                <!-- End of Page Wrapper -->
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#Profile">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">??</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="Login.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <script type="text/javascript">
                    $('#fileImage').change(function() {
                        showImageThumbnail(this);
                    });

                    function showImageThumbnail(fileInput) {
                        file = fileInput.files[0];
                        reader = new FileReader();

                        reader.onload = function(e) {
                            $('#thumbnail').attr('src', e.target.result);
                        };
                        reader.readAsDataURL(file);
                    }
                </script>

</body>

</html>