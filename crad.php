<?php
require_once './dbconnect.php';
?>
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
<?php
require_once './dbconnect.php';
?>
</head>

<body id="data_Activity2">
    <?php
    $conn = new dbconnect();
    $dataevent = $_SESSION['showevent'];
    $userlogin = $_SESSION['data_user'];
    $indexEvent = $_REQUEST['event'];
    // $curentEvent = $dataevent[$indexEvent];
    // $conn->getComment();
    $product = $_SESSION['showcomment'];
    $datacard  =  $conn->getdataCard($indexEvent);
    ?>

    <link rel="stylesheet" href="css/card.css">

    <img class="card-bor" src="upload\card\282186858_1030782637807154_5500818548938795054_n.png" style="border-radius: 0.5rem; margin-left: 300px; margin-top: 100px; width: 219px; height: 321px; display: block;">

    <img src="<?php echo $datacard[0]['eventid']['eventimage']; ?>" style="margin-left: 306px; width:207px; height:180px; border-radius: 0.5rem;margin-top: -315px; display: block;">
    <img src="upload\card\248746097_594971868213394_3050921319929559435_n.png" style="margin-left: 310px; width:199px; height:35px; border-radius: 0.5rem;margin-top: -170px; display: block;">
    <h6 style="margin-left: 325px;margin-top: -25; color: black; font-size: 15px;">กิจกรรม : <?php echo $datacard[0]['eventid']['eventname']; ?></h6>
    <img src="upload\card\248746097_594971868213394_3050921319929559435_n.png" style="margin-left: 306px; width:207px; height:120px; border-radius: 0.5rem;margin-top: 155px; display: block;">


    <img src="upload\card\280633879_550373343321775_4364085816507025928_n.jpg" style="margin-left: 365px; width:90px; height:90px; border-radius: 100rem; margin-top: -190px; display: block;">
    <img src="<?php echo $datacard[0]['userid']['imguser']; ?>" style="margin-left: 368px; width:84px; height:84px; border-radius: 100rem; margin-top: -87px; display: block;">

    <h5 style="margin-left: 310px;margin-top: 10px;padding-left: 10px; color: black; font-size: 20px;"> <?php echo $datacard[0]['userid']['username']; ?></h5>
    <!-- <h5 style="margin-left: 454px;margin-top: -39;padding-left: 5px;margin-bottom: 0px;">( เซา )</h5> -->
    <img src="C:\xampp\htdocs\ProJectQrCode\frontend\upload\card\248746097_594971868213394_3050921319929559435_n.png" style="margin-left: 320px; width: 180px; height:1px; margin-top: 0px; display: block;">

    <h5 style="margin-left: 310px;margin-top: 20px;padding-left: 10px; color: black; font-size: 10px;">อายุ : <?php echo $datacard[0]['userid']['age']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line : <?php echo $datacard[0]['userid']['lineid']; ?></h5>



</body>
<!-- <div id="buttons">
        <button>เข้าร่วมกิจกรรม</button>
    </div> -->


<!-- <