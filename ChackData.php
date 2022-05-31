<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once './dbconnect.php';
error_reporting(E_ALL ^ E_NOTICE);
// $Status = "InserUser";
// $a = "InsertEvent";


$Status = $_REQUEST["Status"];
// $User_ID = $_REQUEST["User_ID"];
$data =  $_SESSION['data_user'];

// print_r($_FILES["photouser"]["type"]);
// $_FILES["photouser"]["tmp_name"];
// $GetQr = $_SESSION['showUser'];
// echo $data['name']; 
// $conn->getEvent_Show();
$product = $_SESSION['showevent'];
//$Status = "EditUser";
// $Status = $a;



// if($Status=="InserUser"){
//     $Username = $_POST['Username'];
//     $Password = $_POST['Password'];
//     $Email  = $_POST['Email'];
//     $Name   = $_POST['Name'];
//     $NickName = $_POST['NickName'];
//     $Gender = $_POST['Gender'];
//     $Age = $_POST['Age'];
//     $Phone = $_POST['Phone'];
//     $Line_ID = $_POST['Line_ID'];
//     $Image_Profile = $img;
//     $Admin_user = true;
//     // echo $Username,$Password,$Email,$Name,$NickName,$Gender,$Age,$Phone,$Line_ID,$Image_Profile,$Admin_user;
//     $con = new dbconnect();
//     $con->connect();
//     $sql = "SELECT `Username` FROM user where Username = '".$Username."'";
//     $result = mysqli_query($con->connect(),$sql);
//     if( $result->num_rows == 0 ){

//     $con->InsertUser($Username,$Password,$Email,$Name,$NickName,$Gender,$Age,$Phone,$Line_ID,$Image_Profile,$Admin_user);
//     }
//     else{
//         header("Location:SingUp.php");
//     }
// }

if ($Status == "LoginUser") {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $con = new dbconnect();
    $con->LoginUser($Username, $Password);
}

// else if($Status=="LoginUser"){
//     $Username = $_POST['Username'];
//     $Password = $_POST['Password'];
// "userid" => 
// ['user_ID' => 1
// ],
// "provinceModel" =>
//    ['province_ID' => 1
// ],
// 'pEventModel' => [
//   'pre_ID' => 1
// ],
//     $con = new dbconnect();
//     $con->LoginUser($Username,$Password);
// }

else if ($Status == "InsertEvent") {
    // echo 'zxx';
    $User = $_SESSION['data_user']['user_ID'];
    $province_ID = $_POST['Username'];
    $pre_ID  = $_POST['Username'];
    $Event_Name = $_POST['Event_Name'];
    $Event_People = $_POST['Username'];
    $eventparticulars = $_POST['Particulars'];
    $Event_Province = $_POST['Username'];
    $Event_Location = $_POST['Username'];
    $Event_Date = $_POST['date'];
    $Event_Date_End = $_POST['dateend'];
    $Event_Time = $_POST['time'];
    $Event_TimeEnd = $_POST['timeend'];
    $Event_Image = $_POST['Username'];
    $Event_Type = $_POST['Username'];
    $Event_Status = "1";
    $Event_Delet =  "1";
    // $con = new dbconnect();
    // $con->InsertEvent($User,$province_ID,$pre_ID,$Event_Name,$Event_People,$eventparticulars,$Event_Province,$Event_Location,$Event_Date,$Event_Date_End,$Event_Time,$Event_TimeEnd,$Event_Image,$Event_Type,$Event_Status,$Event_Delet);
}
// else if($Status=="InsertEvent"){
//     $User_ID = $_SESSION['Login_User_ID'];
//     $Event_Name = $_POST['Event_Name'];
//     $Event_Particulars = $_POST['Event_Particulars'];
//     $Event_People  = (int)$_POST['Event_People'];
//     $Event_Province   = $_POST['Event_Province'];
//     $Event_Location = $_POST['Event_Location'];
//     $Event_Date = $_POST['Event_Date'];
//     $Event_DateEnd = $_POST['Event_DateEnd'];
//     $Event_Time = $_POST['Event_Time'];
//     $Event_TimeEnd = $_POST['Event_TimeEnd'];
//     $Event_Image = $_POST['Uplode_Image'];
//     $Event_Type = $_POST['Event_Type'];
//     $Event_Status = true;
//     $Event_Delet = true;
//     $con = new dbconnect();
//     $con->InsertEvent($User_ID,$Event_Name,$Event_Particulars,$Event_People,$Event_Province,$Event_Location,$Event_Date,$Event_DateEnd,$Event_Time,$Event_TimeEnd,$Event_Image,$Event_Type,$Event_Status,$Event_Delet);

// }
// else if ($Status == "EditProfile") {
//     $Email  = $_POST['Email'];
//     $Name   = $_POST['Name'];
//     $NickName = $_POST['NickName'];
//     $Age = $_POST['Age'];
//     $Phone = $_POST['Phone'];
//     $Line_ID = $_POST['Line_ID'];
//     $Gender = $_POST['Gender'];
//     $Image_Profile = null;
//     $con = new dbconnect();
//     echo $User_ID;
//     $con->connect();
//     $con->EditProfile($Email, $Name, $NickName, $Age, $Phone, $Line_ID, $Gender, $Image_Profile);
// }
else if ($Status == "eventid") {
    $data = $_REQUEST["event"];
    // echo "123";
    // echo "eventid=" ,$data;
    // $Email  = $_POST['Email'];
    // $Name   = $_POST['Name'];
    // $NickName = $_POST['NickName'];
    // $Age = $_POST['Age'];
    // $Phone = $_POST['Phone'];
    // $Line_ID = $_POST['Line_ID'];
    // $Gender = $_POST['Gender'];
    // $Image_Profile = null;
    // $con = new dbconnect();
    // echo $User_ID;
    // $con = new dbconnect();
    // $con->selecteventid($data);
}



else if ($Status == "search") {
    // echo "115599";
    $data = $_POST['datasearch'];
    echo $data;
   
}


// else if($Status=="EditEvent"){
//     $Event_Name  = $_POST['Event_Name'];
//     $Event_People   = $_POST['Event_People'];
//     $Event_Particulars = $_POST['GenEvent_Particularsder'];
//     $Event_Province = $_POST['Event_Province'];
//     $Event_Location = $_POST['Event_Location'];
//     $Event_Date = $_POST['Event_Date'];
//     $Event_DateEnd = $_POST['Event_DateEnd'];
//     $Event_Time = $_POST['Event_Time'];
//     $Event_TimeEnd = $_POST['Event_TimeEnd'];
//     $Event_Image = $_POST['Event_Image'];
//     $con = new dbconnect();
//     // echo $User_ID;
//     $con->connect();
//     $con->EditEvent($Event_Name,$Event_People,$Event_Particulars,$Event_Province,$Event_Location,$Event_Date,$Event_DateEnd,$Event_Time,$Event_TimeEnd,$Event_Image);
// }
else if ($Status == "EditDelet") {
    $con = new dbconnect();
    $Event_ID = $_REQUEST["Event_ID"];
    $con->EditDelet($Event_ID);
} else if ($Status == "EditUser") {
    $User_ID = $_REQUEST["user_ID"];
    // echo "   User =>",$User_ID;
    // $User_Status = false;
    // //$User_ID = "14";
    $con = new dbconnect();
    // $con->connect();
    $con->DeletEditUser($User_ID);
} else if ($Status == "EditAdmin") {
    $User_ID = $_REQUEST["user_ID"];
    // echo "   User =>",$User_ID;
    // $User_Status = false;
    // //$User_ID = "14";
    $con = new dbconnect();
    // $con->connect();
    $con->DeletEditAdmin($User_ID);
} else if ($Status == "scanqrcode") {
    // echo "123";
    $User_ID = $_POST["text"];
    $headers = explode('=', $User_ID);
    $eventid = $headers[1];
    $Event_ID = $_REQUEST["idevent"];
    $con = new dbconnect();
    $con->getdataQrCode($eventid, $Event_ID);

} else if ($Status == "QR_Code") {
    $con = new dbconnect();
    $con->getEvent_Show();
    $Event_ID = $_REQUEST["Event_ID"];
    $User_ID = $_SESSION['data_user']['user_ID'];
    $Qrcode_Status = "1";
    $Qrcode_Path = "Image/qrdode.png";
    $Qrcode_Event_Status = "1";
    $con->INSERT_QR($User_ID, $Event_ID, $Qrcode_Status, $Qrcode_Path, $Qrcode_Event_Status);
    $qr = $con->Get_QR($User_ID, $Event_ID);
    // $data = $_SESSION['showUser'];

    $url = "http://chart.apis.google.com/chart?cht=qr&chl=http://qrsystem.comsciproject.com/crad.php?idqrcode=" . $qr . "&chs=450";
    $img = "Image_Qr_Code/" . $User_ID . "_" . $Event_ID . ".png";
    file_put_contents($img, file_get_contents($url));

    $Qrcode_ID = $data[0]['qrcode_ID'];
    $Qrcode_Path = $img;
    $con->UPDATE_QR($qr, $Qrcode_Path);
} else if ($Status == "statususerqrcode") {
    $idqrcode = $_REQUEST['qrcodeid'];


    $con = new dbconnect();

    $con->editstatusqrevent($idqrcode);
} else if ($Status == "chackuser") {
    // echo "123";
    $idevent = $_REQUEST['eventid'];
    // echo $idevent;
    $con = new dbconnect();
    $con->getEventByid($idevent);
} else if ($Status == "checkReportevent") {
    // echo "123";
    $idevent = $_REQUEST['idevent'];
    //   echo $idevent;
    $con = new dbconnect();
    $con->getchackreportEventByid($idevent);
} else if ($Status == "dataQr") {
    $idevent = $_REQUEST['idqr'];
    $con = new dbconnect();
    $con->getchackqrcodeid($idevent);
} else if ($Status == "EndEvent") {
    // echo "112233";
    $idevent = $_REQUEST['Event_ID'];
    echo $idevent;
    $con = new dbconnect();
    $con->EndEvent($idevent);
} else if ($Status == "commentevent") {
    // echo "112233";
    $data = $_POST['comment'];
    $eventid = $_REQUEST['eventid'];
    $userid = $_REQUEST['userid'];

    $con = new dbconnect();
    $con->insertComment($data, $eventid, $userid);
} else if ($Status == "Pcard") {
    // echo "a";
    // $data = $_POST['comment'];
    $eventid = $_REQUEST['event'];
    // echo $eventid;

    //  $userid = $_REQUEST['event'];
    $con = new dbconnect();
    $con->getqrcard($eventid);
}
//  else if ($Status == "search") {
//     echo "a";
//     // $data = $_POST['comment'];
//     // $eventid = $_REQUEST['event'];
//     // // echo $eventid;

//     // //  $userid = $_REQUEST['event'];
//     // $con = new dbconnect();
//     // $con->getqrcard($eventid);
// }
