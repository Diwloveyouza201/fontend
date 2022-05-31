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
    <?php
    require_once './dbconnect.php';
    if(!isset($_SESSION['chacklogin']) && empty($_SESSION['chacklogin'])) {
        Header("Location:Login.php");
    }
    ?>
</head>

<body id="User">
    <?php
    $conn = new dbconnect();
    // $getUser = $conn->get_User();
    $data =  $_SESSION['data_user'];
    // echo $data['name']; 
    // $conn->getEvent_Show();
    $product = $_SESSION['showevent'];

    $idreportevent = $_SESSION['ReportEventByID'];
    // echo $idreportevent['event_id'];
    // echo $product[0]['event_id'];
    // $qrcodeall = $_SESSION['QR_Coce_ALL'];
    // echo $qrcodeall[0]['eventid']['eventname'];

    // echo $suppersum[0]['user_ID'];
    $conn->getQR_Show();
    $conn->show_QRCode();
    $conn->getUser();

    $getUser = $_SESSION['showUser'];

    $getQrCode = $_SESSION['showQrCode'];

    // $idEvent = $_REQUEST['idevent'];
    // $eid = $product[$idEvent];
    // echo $eid['eventname'];
    // echo $getQrCode['qrcode_ID'];
    // echo $getUser[0]['username'];
    // echo $eid['event_id'];
    // $product = 

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
                    <span>หน้าหลัก</span></a>
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
                    <span>กิจกรรม</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">รายการกิจกรรม</h6>
                        <a class="collapse-item" href="Activity_All2.php">กิจกรรมทั้งหมด</a>
                        <a class="collapse-item" href="Activity_My.php">กิจกรรมของฉัน</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>คิวอาร์โค้ด</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">รายการ คิวอาร์โค้ด ของฉัน</h6>
                        <a class="collapse-item" href="QR_Code_All.php">คิวอาร์โค้ด กิจกรรมทั้งหมด</a>
                        <a class="collapse-item" href="QR_Code_Join.php">กิจกรรมที่เข้าร่วม</a>
                        <a class="collapse-item" href="QR_Code_Not_Join.php">กิจกรรมที่ยังไม่เข้าร่วม </a>

                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Report.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>รายงาน</span></a>
            </li>

            <!-- Divider -->
            <?php if ($data['adminuser'] == false) { ?>
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Admin
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>ข้อมูลกิจกรรม</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">รายการกิจกรรม</h6>
                            <a class="collapse-item" href="Activity_End_Admin.php">กิจกรรมที่จัดแล้ว</a>
                            <a class="collapse-item" href="Activity_Admin.php">กิจกรรมที่ยังไม่จัด</a>

                        </div>
                    </div>
                </li>


                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagess" aria-expanded="true" aria-controls="collapsePagess">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>จักการข้อมูล</span>
                    </a>
                    <div id="collapsePagess" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">รายการข้อมูล</h6>
                            <a class="collapse-item" href="User.php">ผู้ใช้งาน</a>
                            <a class="collapse-item" href="Admin2.php">ผู้ดูแลระบบ</a>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Report_Admin.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>รายงาน</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo  $data['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo $data['imguser']; ?>">
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

                <div class="container-fluid">
                    <div class="card shadow   mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2">
                                    <h6 class="m-0 font-weight-bold text-primary">สมาชิกที่เข้าร่วมกิจกรรม</h6>
                                </div>
                                <div class="col-12">
                                    <!-- <button class="m-0 font-weight-bold text-primary" style="float:right;">บันทึก PDF</button> -->
                                    <input class="m-0 font-weight-bold text-primary" style="float:right;" type="button" value="บันทึก PDF" onclick="PrintDiv();" />

                                </div>
                            </div>
                        </div>

                        <div id="divToPrint">
                            <div class="colum-md-2">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                            <thead>
                                                <tr>
                                                    <th style=" border: 1px solid black;  border-collapse: collapse;">No.</th>
                                                    <th style=" border: 1px solid black;  border-collapse: collapse;">Name</th>

                                                    <th style=" border: 1px solid black;  border-collapse: collapse;">Gender</th>
                                                    <th style=" border: 1px solid black;  border-collapse: collapse;">Age</th>
                                                    <th style=" border: 1px solid black;  border-collapse: collapse;">Phone</th>

                                                </tr>
                                            </thead>
                                            <?php
                                            $a = 0;
                                            $n = 0;
                                            $m = 0;
                                            $w = 0;
                                            while ($a < count($getQrCode)) : ?>
                                                <?php if ($getQrCode[$a]['eventid']['event_id'] == $idreportevent['event_id']) { ?>
                                                    <?php if ($getQrCode[$a]['qrcodeeventstatus'] == 0) { ?>
                                                        <?php $n++ ?>
                                                        <tbody>
                                                            <tr>
                                                                <th style=" border: 1px solid black;  border-collapse: collapse;"> <?php echo $n ?></th>
                                                                <th style=" border: 1px solid black;  border-collapse: collapse;"><?php echo $getQrCode[$a]['userid']['name']; ?></th>
                                                                <th style=" border: 1px solid black;  border-collapse: collapse;"><?php if ($getQrCode[$a]['userid']['gender'] == "G01") {
                                                                                                                                        echo "ชาย";
                                                                                                                                        $m++;
                                                                                                                                    } else {
                                                                                                                                        echo "หญิง";
                                                                                                                                        $w++;
                                                                                                                                    }  ?></th>
                                                                <th style=" border: 1px solid black;  border-collapse: collapse;"><?php echo $getQrCode[$a]['userid']['age']; ?></th>
                                                                <th style=" border: 1px solid black;  border-collapse: collapse;"><?php echo $getQrCode[$a]['userid']['phone']; ?></th>
                                                            </tr>
                                                        </tbody>
                                                    <?php } ?>
                                                <?php } ?>
                                                <?php $a++ ?>
                                            <?php endwhile ?>
                                            <!-- <div class="row-5">
                                                <div class="row">
                                                    <h6>จำนวนคนที่เข้าร่วมกิจกรรมทั้งหมด <h6>
                                                            <h4> <?php echo $n; ?></h4>
                                                            <h6> คน</h6>
                                                </div>
                                            </div>
                                            <div class="row-5">
                                                <div class="row">
                                                    <h6>เพศชายทั้งหมด <h6>
                                                            <h4> <?php echo $m; ?></h4>
                                                            <h6> คน</h6>
                                                </div>
                                            </div>
                                            <div class="row-5">
                                                <div class="row">
                                                    <h6>เพศหญิงทั้งหมด <h6>
                                                            <h4> <?php echo $w; ?></h4>
                                                            <h6> คน</h6>
                                                </div>
                                            </div> -->


                                            <h5> <?php
                                                    echo  "จำนวนคนที่เข้าร่วมกิจกรรมทั้งหมด  " . $n . " คน", " เพศชายทั้งหมด" . " $m" . " คน", " เพศหญิง", " $w", " คน"
                                                    ?></h5>
                                            <!-- </form>                 -->

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="container-fluid">
                    <div class="card shadow   mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-3">
                                    <h6 class="m-0 font-weight-bold text-primary">สมาชิกที่ไม่ได้เข้าร่วมกิจกรรม</h6>
                                </div>
                                <div class="col-12">
                                    <!-- <button class="m-0 font-weight-bold text-primary" style="float:right;">บันทึก PDF</button> -->
                                    <input class="m-0 font-weight-bold text-primary" style="float:right;" type="button" value="บันทึก PDF" onclick="Printnot();" />
                                </div>
                            </div>
                        </div>

                        <div id="reportdontjoie">
                            <div class="colum-md-2">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th style=" border: 1px solid black;  border-collapse: collapse;">No.</th>
                                                    <th style=" border: 1px solid black;  border-collapse: collapse;">Name</th>
                                                    <th style=" border: 1px solid black;  border-collapse: collapse;">Gender</th>
                                                    <th style=" border: 1px solid black;  border-collapse: collapse;">Age</th>
                                                    <th style=" border: 1px solid black;  border-collapse: collapse;">Phone</th>

                                                </tr>
                                            </thead>
                                            <?php
                                            $a = 0;
                                            $n = 0;
                                            $f = 0;
                                            $v = 0;
                                            while ($a < count($getQrCode)) : ?>
                                                <?php if ($getQrCode[$a]['eventid']['event_id'] == $idreportevent['event_id']) { ?>
                                                    <?php if ($getQrCode[$a]['qrcodeeventstatus'] == 1) { ?>
                                                        <?php $n++ ?>
                                                        <tbody>
                                                            <tr>

                                                                <th style=" border: 1px solid black;  border-collapse: collapse;"> <?php echo $n ?></th>
                                                                <th style=" border: 1px solid black;  border-collapse: collapse;"><?php echo $getQrCode[$a]['userid']['name']; ?></th>
                                                                <th style=" border: 1px solid black;  border-collapse: collapse;"><?php if ($getQrCode[$a]['userid']['gender'] == "G01") {
                                                                                                                                        echo "ชาย";
                                                                                                                                        $f++;
                                                                                                                                    } else {
                                                                                                                                        echo "หญิง";
                                                                                                                                        $v++;
                                                                                                                                    }  ?></th>
                                                                <th style=" border: 1px solid black;  border-collapse: collapse;"><?php echo $getQrCode[$a]['userid']['age']; ?></th>
                                                                <th style=" border: 1px solid black;  border-collapse: collapse;"><?php echo $getQrCode[$a]['userid']['phone']; ?></th>
                                                            </tr>
                                                        </tbody>
                                                    <?php } ?>
                                                <?php } ?>
                                                <?php $a++ ?>
                                            <?php endwhile ?>
                                            <h5> <?php echo  "จำนวนคนที่เข้าร่วมกิจกรรมทั้งหมด  " . $n . " คน", " เพศชายทั้งหมด" . " $f" . " คน", " เพศหญิง", " $v", " คน" ?></h5>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ออกจากระบบ</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">คุณต้องการออกจากระบบนี้หรือไม่</div>
                <div class="modal-footer">
                    <button class="btn btn-outline-danger" type="button" data-dismiss="modal">ยกเลิก</button>
                    <a class="btn btn-outline-success" href="Login.php">ยืนยัน</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script type="text/javascript">
        function PrintDiv() {
            var divToPrint = document.getElementById('divToPrint');
            var popupWin = window.open('', '_blank', 'width=300,height=300');
            popupWin.document.open();
            popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
        }
    </script>

    <script type="text/javascript">
        function Printnot() {
            var reportdontjoie = document.getElementById('reportdontjoie');
            var popupWin = window.open('', '_blank', 'width=300,height=300');
            popupWin.document.open();
            popupWin.document.write('<html><body onload="window.print()">' + reportdontjoie.innerHTML + '</html>');
            popupWin.document.close();
        }
    </script>

</body>

</html>