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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/colorprofile.css" rel="stylesheet">
    <?php
    require_once './dbconnect.php';
    if(!isset($_SESSION['chacklogin']) && empty($_SESSION['chacklogin'])) {
        Header("Location:Login.php");
    }
    ?>
</head>

<body id="Profile">
    <?php
    $conn = new dbconnect();
    $getUser = $conn->get_User();
    $get =  $_SESSION['data_user'];
    // echo $get['image'];
    $conn->getEvent_Show();
    $product = $_SESSION['showevent'];
    // $data = $conn->showimage();
    $datenow = date('Y-m-d');

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
                        <a class="collapse-item" href="QR_Code_All2.php">คิวอาร์โค้ด กิจกรรมทั้งหมด</a>
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
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                        <a href="#" data-toggle="modal" data-target="#Edit_Profile" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>แก้ไขโปรไฟล์</a>
                        <a href="#" data-toggle="modal" data-target="#Edit_image" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>แก้ไขรูป</a>
                    </div>
                    <div class="modal fade" id="Edit_image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <div class="form-row">
                                            <div class="input-data ">
                                                <div class="form-row">
                                                    <div class="row row-cols-2" style="margin-top: 10px;">
                                                        <div class="col" align="right">


                                                            <form action="ChackDataProfileUser.php" method="POST" enctype="multipart/form-data">
                                                                <input type="file" name="edituser" onchange="preview()">
                                                                <img src="" width="100px" height="100px" id="frame">
                                                                <div class="col" align="right">
                                                                    <button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancel</button>
                                                                    <button class="btn btn-outline-success" name="submit" type="submit" value="submit">Create</button>
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
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form action="ChackData.php?Status=EditProfile" method="POST" style="padding-top: 0px;">
                                    <div class="modal-body">
                                        <div>
                                            <div class="form-row">
                                                <div class="input-data ">
                                                    <div class="underline rowwwww">
                                                        <label style="margin-bottom: 0px;">อีเมล</label><br>
                                                        <input class="longtext" type="text" name="Email" placeholder="อีเมล" required>

                                                        <!-- <div class="underline"> -->
                                                        <div class="underline rowwwww">
                                                            <label style="margin-bottom: 0px;">ชื่อ-สกุล</label><br>
                                                            <input class="longtext" type="text" name="Name" placeholder="ชื่อ-สกุล" required>
                                                            <!-- <input class="longtext" type="textarea" name="Username" placeholder="รายละเอียดกิจกรรม " required> -->
                                                        </div>
                                                        <div class="underline rowwwww">
                                                            <label style="margin-bottom: 0px;">ชื่อเล่น</label><br>
                                                            <input class="longtext" type="text" name="NickName" placeholder="ชื่อเล่น" required>
                                                            <label style="margin-bottom: 0px;" align="right">อายุ</label><br>
                                                            <input align="right" class="longtext" type="text" name="Age" placeholder="อายุ" required>
                                                            <!-- <input class="longtext" type="textarea" name="Username" placeholder="รายละเอียดกิจกรรม " required> -->
                                                        </div>
                                                        <div class="underline rowwwww">
                                                            <label style="margin-bottom: 0px;">เบอร์โทร</label><br>
                                                            <input class="longtext" type="text" name="Phone" placeholder="เบอร์โทร" required>
                                                            <label style="margin-bottom: 0px;">ไลน์ไอดี</label><br>
                                                            <input class="longtext" type="text" name="Line_ID" placeholder="ไลน์ไอดี" required>
                                                            <!-- <input class="longtext" type="textarea" name="Username" placeholder="รายละเอียดกิจกรรม " required> -->
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="gender">
                                                                <label class="gender" for="">Gender : </label>
                                                                <input type="radio" id="html" name="Gender" value="G01">
                                                                <label class="gender" for="html">Male</label>
                                                                <input type="radio" id="html" name="Gender" value="G02">
                                                                <label for="html">woman</label>
                                                            </div>
                                                            <div class="row row-cols-2" style="margin-top: 10px;">
                                                                <div class="col" align="right">
                                                                </div>
                                                                <div class="col" align="right">
                                                                    <button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancel</button>
                                                                    <button class="btn btn-outline-success" type="submit" value="submit">Create</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </from>
                        </div>
                    </div>

                </div>

                <!------------หน้าโปรไฟล์----------------- -->
                <form action="ChackData.php?Status=scanQrcode" method="POST" style="padding-top: 0px;">
                    <div class="card-body text-center">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4" style="max-width: 50% position relative;">
                                    <video id="preview" width="100%"></video>
                                </div>
                                <div class="col-md-6">
                                    <label>SCAN QR CODE</label>
                                    <input type="text" name="text" id="text" readonyy="" placeholder="scan qrcode" class="form-control">
                                </div>
                                <div class="col" align="center">
                                    <input class="btn btn-outline-success" type="submit" value="บันทึก"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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

    <script>
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                alert('No cameras found');
            }

        }).catch(function(e) {
            console.error(e);
        });

        scanner.addListener('scan', function(c) {
            document.getElementById('text').value = c;
        });
    </script>
    <script type="text/javascript">
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        scanner.addListener('scan', function(content) {
            alert(content);
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function(e) {
            console.error(e);
        });
    </script>
</body>

</html>