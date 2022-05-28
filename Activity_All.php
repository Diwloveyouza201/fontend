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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/textlong.css" rel="stylesheet">
    <link href="css/imageEvent.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/singin.css"> -->
    <!-- <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" /> -->
    <?php
    require_once './dbconnect.php';
    ?>
</head>

<body id="Activity_All">
    <?php
    $conn = new dbconnect();
    // $getUser = $conn->get_User();
    // $Data = $getUser->fetch_assoc();
    $dataevent = $_SESSION['showevent'];
    // echo $dataevent[0]['eventname'];
    // echo $dataevent['event_id'];
    $userlogin = $_SESSION['data_user'];
    // echo $userlogin['name'];


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
                    <span>ข้อมูลกิจกรรม</span>
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
            <?php if ($Data['Admin_user'] == false) { ?>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo  $userlogin['name']; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
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


                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">กิจกรรมทั้งหมด</h1>
                        <a href="#" data-toggle="modal" data-target="#Add_Activity" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> สร้างกิจกรรม</a>

                    </div>

                    <div class="container-fluid">

                        <div class="row">

                            <?php
                            $i = 0;
                            while ($i < count($dataevent)) : ?>

                                <div class="col-xl-4 col-lg-5">
                                    <div class="card shadow mb-4">
                                        <img src="Image\IMG_0884.png" alt="Avatar">
                                        <div class="card-body">
                                            <h3 class="card-title"><?php echo $dataevent[$i]['eventname']; ?></h3>
                                            <h6 class="card-title"><?php echo "จำนวน " . $dataevent[$i]['eventpeople'] . " คน"; ?></h5>
                                                <p class="card-text">
                                                    <?php echo $dataevent[$i]['eventparticulars']; ?>
                                                </p>

                                                <div align="right">

                                                    <a class="btn btn-outline-primary" href="data_Activity2.php?event=<?php echo $i ?> ">รายละเอียดเพิ่มเติม</a>


                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++ ?>
                            <?php endwhile ?>

                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#Activity_All">
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

        <div class="modal fade" id="Add_Activity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="ChackData.php?Status=InsertEvent" method="POST" style="padding-top: 0px;">
                        <div class="modal-body">
                            <div>
                                <div class="form-row">
                                    <div class="input-data ">
                                        <div class="underline rowwwww">
                                            <label for="" style="margin-bottom: 0px;">ชื่อกิจกรรม</label>
                                            <input class="longtext" type="text" name="Event_Name" placeholder="ชื่อกิจกรรม" required>
                                            <!-- <div class="underline"> -->
                                            <div class="underline rowwwww">
                                                <label for="" style="margin-bottom: 0px;">รายละเอียดกิจกรรม</label>
                                                <textarea class="longtext" id="story" name="Event_Particulars" rows="5" cols="100" placeholder="รายละเอียดกิจกรรม "></textarea>
                                                <!-- <input class="longtext" type="textarea" name="Username" placeholder="รายละเอียดกิจกรรม " required> -->
                                            </div>
                                        </div>

                                        <!-- --------------- -->
                                        <!-- <div class="container"> -->
                                        <div class="row row-cols-2">
                                            <?php
                                            $conn = new dbconnect();
                                            $product = $conn->getProvince();
                                            $Product_P_Event = $conn->getP_Event();
                                            ?>
                                            <div class="col">
                                                <label for="" style="margin-bottom: 0px;">ประเภทกิจกรรม</label>
                                                <select class="shottext" id="exampleFormControlSelect1" name="Event_Type" style="margin-top: 0px;">
                                                    <option selected>.......กรุณาเลือก.......</option>
                                                    <?php while ($row = $Product_P_Event->fetch_assoc()) : ?>
                                                        <option value="<?php echo $row['Status_Code']; ?>"><?php echo $row['Type_Name']; ?></option>
                                                    <?php endwhile ?>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="" style="margin-bottom: 0px;">จำนวนคนที่จัดกิจกรรม</label>
                                                <input class="shottext" type="text" name="Event_People" placeholder="จำนวนคนที่จัดกิจกรรม" style="margin-top: 0px;" required>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                        <!-- ----------------- -->
                                        <!-- <div class="container"> -->
                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <label for="" style="margin-bottom: 0px;">วันที่จัดกิจกรรม </label>
                                                <input class="shottext" type="date" name="Event_Date" style="margin-top: 0px;" required>
                                            </div>
                                            <div class="col">
                                                <label for="" style="margin-bottom: 0px;">วันที่สิ้นสุดกิจกรรม </label>
                                                <input class="shottext" type="date" name="Event_DateEnd" style="margin-top: 0px;" required>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                        <!-- ----------------- -->
                                        <!-- <div class="container"> -->
                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <label for="" style="margin-bottom: 0px;">เวลาที่จัดกิจกรรม </label>
                                                <input class="shottext" type="time" name="Event_Time" style="margin-top: 0px;" required>
                                            </div>
                                            <div class="col">
                                                <label for="" style="margin-bottom: 0px;">เวลาที่สิ้นสุดกิจกรรม</label>
                                                <input class="shottext" type="time" name="Event_TimeEnd" style="margin-top: 0px;" required>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                        <!-- ----------------- -->
                                        <!-- <div class="container"> -->
                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <label for="" style="margin-bottom: 0px;">สถานที่จัดกิจกรรม</label>
                                                <input class="shottext" type="text" name="Event_Location" placeholder="สถานที่จัดกิจกรรม" style="margin-top: 0px;" required>
                                            </div>
                                            <div class="col">
                                                <label for="" style="margin-bottom: 0px;">จังหวัด</label>
                                                <!-- <input class="shottext" type="text" name="Event_Location" placeholder="สถานที่จัดกิจกรรม" required> -->
                                                <select class="shottext" id="exampleFormControlSelect1" name="Event_Province" style="margin-top: 0px;">
                                                    <option selected>.......กรุณาเลือก.......</option>
                                                    <?php while ($row = $product->fetch_assoc()) : ?>
                                                        <option value="<?php echo $row['Province_Code']; ?>"><?php echo $row['Province_Name']; ?></option>
                                                    <?php endwhile ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                        <div>

                                            <label for="Line" class="">รูปภาพกิจกรรม</label><br>
                                            <!-- <input class="imgEV" type='file' name="Event_Image" onchange="readURL(this);" /> -->
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input name="Uplode_Image" type="file" class="custom-file-input" id="inputGroupFile01" onchange="readURL(this);">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <img class="figure-img img-fluid rounded" id="blah" src="#" alt="image"><br>
                                            </div>

                                            <div class="row row-cols-2" style="margin-top: 10px;">
                                                <div class="col" align="right">
                                                </div>
                                                <div class="col" align="right">
                                                    <button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancel</button>
                                                    <button class="btn btn-outline-success" type="submit" href="#">Create</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

</body>

</html>