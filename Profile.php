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
    $conn->show_QRCode();
    $get =  $_SESSION['data_user'];
    // echo $get['image'];
    $conn->getEvent_Show();
    $product = $_SESSION['showevent'];
    // $data = $conn->showimage();
    $datenow = date('Y-m-d');
    $qrCode = $_SESSION['QR_Coce_ALL'];
    // echo $qrCode[0]['userid']['user_ID'];
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
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

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
                        <!-- <a href="#" data-toggle="modal" data-target="#Edit_image" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>แก้ไขรูป</a> -->
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
                                <form action="insertevent.php?Status=EditUserProfile&iduser=<?php echo $get['user_ID'] ?>&Username=<?php echo $get['username'] ?>&password=<?php echo $get['password'] ?>" method="POST" style="padding-top: 0px;" enctype='multipart/form-data'>
                                    <div class="row">
                                        <div class="col-md-4 border-right" style="padding-right: 0px;padding-left: 12px;">
                                            <div>
                                                <input style="display:none;" type="input" value="<?php echo $get["imguser"]; ?>" name="partimage" enctype='multipart/form-data'>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" style="width: 115px;" src="<?php echo $get["imguser"]; ?>" onchange="preview()"  width="90">
                                                <h10><?php echo $get["name"]; ?><br><br>
                                                    <!-- <input type="file" name="photo" onchange="preview()"> -->
                                                    <input type="file" class="btn btn-outline-success" style="width:200px;  background: #ffffff;" name="photo" />
                                            </div>
                                        </div>
                                        <div class="col-md-8">

                                            <div class="p-3 ">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                                        <h10>กรุณาตรวจสอบข้อมูลก่อนทำการแก้ไขให้เรียบร้อย</h10>
                                                    </div>

                                                </div>



                                                <div class="modal-body">
                                                    <div class="row mt-2">
                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">ชื่อ-สกุล</label><input type="text" class="form-control" placeholder="ชื่อ-สกุล" name="Name" value="<?php echo $get["name"]; ?>" required></div>
                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">ชื่อเล่น</label><input type="text" class="form-control" placeholder="ชื่อเล่น" name="NickName" value="<?php echo $get["nickname"]; ?>" required></div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">อายุ</label><input type="number" min="0" max="130" class="form-control" placeholder="อายุ" name="Age" value="<?php echo $get["age"]; ?>" required></div>
                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">เบอร์โทร</label><input type="tel" class="form-control" placeholder="เบอร์โทร" name="Phone" pattern="[0]{1}[6-9]{1}[0-9]{8}" value="<?php echo $get["phone"]; ?>" required></div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">Email</label><input type="email" class="form-control" placeholder="Email" name="Email" value="<?php echo $get["email"]; ?>" required></div>
                                                        <div class="col-md-6"><label style="margin-bottom: -2px;">Line id</label><input type="text" class="form-control" placeholder="Line id" name="Line_ID" value="<?php echo $get["lineid"]; ?>" required></div>
                                                    </div>

                                                    <div class="gender"> <br>
                                                        <label class="gender" for="">เพศ </label><br>
                                                        <input type="radio" id="html" name="Gender" <?php if($get["gender"]=="G01"){ echo "checked";} ?> value="G01">
                                                        <label class="gender" for="html">ชาย</label>
                                                        <input type="radio" style="margin-left: 19px;" id="html" name="Gender"<?php if($get["gender"]=="G02"){ echo "checked";} ?>  value="G02">
                                                        <label for="html">หญิง</label>
                                                    </div>
                                                    <div class="col" align="center">
                                                        <button class="btn btn-outline-danger" type="button" data-dismiss="modal">ยกเลิก</button>
                                                        <input class="btn btn-outline-success" type="submit" value="บันทึก"></input>
                                                    </div>
                                                </div>

                                                </from>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>


                    <!------------หน้าโปรไฟล์----------------- -->
                    <div class="card-body text-center">
                        <!-- <div class="card-footer B-my-profile text-white">
        My Profile
    </div> -->
                        <?php include 'UploadImage.php'; ?>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4" style="max-width: 50% position relative;">

                                    <img src="<?php echo $get['imguser']; ?> " class="img-fluid rounded-start" width="200" height="300">

                                </div>

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col" align="left">
                                                <H5>ชื่อ : <?php echo $get["name"]; ?><h5></h5>
                                                    </H4>
                                            </div>
                                            <div class="col" align="left">
                                                <H5>ชื่อเล่น : <?php echo $get["nickname"]; ?><h5></h5>
                                                    </H4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col" align="left">
                                                <H5>อีเมล : <?php echo $get["email"]; ?><h5></h5>
                                                
                                                </H5>
                                            </div>
                                            <div class="col" align="left">
                                                <H5>อายุ : <?php echo $get["age"]; ?><br>
                                                    <h5><br> เพศ : <?php
                                                                    if ($get["gender"] == "G01") {
                                                                        echo "ชาย";
                                                                    } else {
                                                                        echo "หญิง";
                                                                    } ?><br>

                                                    </h5>
                                                </H5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col" align="left">
                                                <H5>เบอร์โทร : <?php echo $get["phone"]; ?> <br> </H5>
                                            </div>
                                            <div class="col" align="left">
                                                <H5>Line : <?php echo $get["lineid"]; ?> <br> </H5>
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
                                                <th>ชื่อกิจกรรม</th>
                                                <th>วันที่และเวลา</th>
                                                <th>กิจกรรม</th>
                                                <th>บัตรเข้าร่วม</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No.</th>
                                                <th>ชื่อกิจกรรม</th>
                                                <th>วันที่และเวลา</th>
                                                <th>กิจกรรม</th>
                                                <th>บัตรเข้าร่วม</th>

                                            </tr>
                                        </tfoot>
                                        <!-- <form action="ChackData.php?Status=EditUser">                -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <?php
                                                $a = 0;
                                                while ($a < count($product)) : ?>
                                                    <?php if ($product[$a]['userid']['user_ID'] == $get['user_ID']) { ?>
                                                    <?php }  ?>
                                                    <?php $a++ ?>
                                                <?php endwhile ?>

                                            </div>

                                        </div>
                                        <?php
                                        $i = 0;
                                        $n = 0;

                                        while ($i < count($qrCode)) : ?>
                                            <?php if ($qrCode[$i]['userid']['user_ID'] == $get['user_ID']) { ?>

                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td><?php echo $qrCode[$i]['eventid']['eventname']; ?><?php echo $i; ?></td>
                                                        <td>วันที่:<?php echo $qrCode[$i]['eventid']['eventdate']; ?> เวลา:<?php echo $i; ?><?php echo $qrCode[$i]['eventid']['eventtime']; ?></td>
                                                        
                                                        <td> <a href="data_Activity2.php?event=<?php echo $i ?>"></i>ไปหน้ากิจกรรม</a> </td>
                                                        <td> <a href="crad.php?event=<?php echo $i ?>"></i>บัตรเข้าร่วมกิจกรรม</a></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            <?php } ?>
                                            <?php $i++ ?>
                                        <?php endwhile ?>
                                        <!-- </form>                 -->
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
<script src="js/newLogin.js"></script>
<script type="text/javascript">
   function preview() {
      frame.src = URL.createObjectURL(event.target.files[0]);
   }
</script>
</body>

</html>