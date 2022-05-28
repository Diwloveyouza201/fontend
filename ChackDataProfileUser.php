<?php
require_once './dbconnect.php';
if (isset($_POST['submit']) && isset($_FILES['photo'])){
    
    // $Image_Profile = $img;
    $Admin_user = true; 
    // echo $Username,$Password;
    // echo "123";
    $status = 'error';
    if(!empty($_FILES["photo"]['name'])){
        // echo "123";
        $filename = basename($_FILES['photo']['name']);
        $imagetemloc=$_FILES['photo']['tmp_name'];
        $folder="upload/profileUser/$filename";
        move_uploaded_file($imagetemloc,$folder);
           echo $filename;
           echo "imagetemloc=",$imagetemloc;
           echo "folder=",$folder;
        // $fileType = pathinfo($filename, PATHINFO_EXTENSION);

        // $allowType = array("jpg","jpeg","png","gif");
       
            // $Username = $_POST['Username'];
            // $Password = $_POST['Password'];
            // $Email  = $_POST['Email'];
            // $Name   = $_POST['Name'];
            // $NickName = $_POST['NickName'];
            // $Gender = $_POST['Gender'];
            // $Age = $_POST['Age'];
            // $Phone = $_POST['Phone'];
            // $Line_ID = $_POST['Line_ID'];
            // $image = $_FILES['photo']['tmp_name'];
            // $imgContent = $folder;
            // // echo $imgContent;
            // $conn = new dbconnect();
            // $conn->InsertUser($Username, $Password, $Email, $Name, $NickName, $Gender, $Age, $Phone, $Line_ID,$imgContent);
    
}
}
// elseif (isset($_POST['submit']) && isset($_FILES['edituser'])){
//     if(!empty($_FILES["edituser"]['name'])){
//         $userid = $_SESSION['data_user']['user_ID'];
//         $filename = basename($_FILES['edituser']['name']);
//         // echo $userid,$filename;
//         $imagetemloc=$_FILES['edituser']['tmp_name'];
//         $folder="upload/profileUser/$filename";
//         move_uploaded_file($imagetemloc,$folder);
//         $allowType = array("jpg","jpeg","png","gif");
       
        
//             $conn = new dbconnect();
//             $conn->updateProfile($userid,$folder);
    
// }
// }

// elseif (isset($_POST['submit']) && isset($_FILES['photoEvent'])){
//     // echo "123";
//     if(!empty($_FILES["photoEvent"]['name'])){
//         $userid = $_SESSION['data_user']['user_ID'];
//         $filename = basename($_FILES['photoEvent']['name']);
//         // echo $userid,$filename;
//         $imagetemloc=$_FILES['photoEvent']['tmp_name'];
//         $folder="upload/imgEvent/$filename";
//         move_uploaded_file($imagetemloc,$folder);
//         $allowType = array("jpg","jpeg","png","gif");
       
        
//             $conn = new dbconnect();
//             $conn->insertevent($userid,$folder);
    
// }
// }

// elseif (isset($_POST['submit']) && isset($_FILES['editEvent'])){
//     $indexEvent = $_REQUEST['event'];
//     // echo $indexEvent;
//     // echo "123";
//     if(!empty($_FILES["editEvent"]['name'])){
//         $userid = $_SESSION['data_user']['user_ID'];
//         $filename = basename($_FILES['editEvent']['name']);
//         // echo $userid,$filename;
//         $imagetemloc=$_FILES['editEvent']['tmp_name'];
//         $folder="upload/imgEvent/$filename";
//         move_uploaded_file($imagetemloc,$folder);
//         $allowType = array("jpg","jpeg","png","gif");
       
        
//             $conn = new dbconnect();
//             $conn->EditEvent($indexEvent,$folder);
    
// }
// }
elseif (isset($_POST['submit'])){
   $data = $_POST['comment'];
   $eventid = $_REQUEST['eventid'];
   $userid = $_REQUEST['userid'];
   $page = $_REQUEST['page'];
//    echo $data,$eventid,$userid;
    // $indexEvent = $_REQUEST['event'];
    // // echo $indexEvent;
    // // echo "123";
    // if(!empty($_FILES["editEvent"]['name'])){
    //     $userid = $_SESSION['data_user']['user_ID'];
    //     $filename = basename($_FILES['editEvent']['name']);
    //     // echo $userid,$filename;
    //     $imagetemloc=$_FILES['editEvent']['tmp_name'];
    //     $folder="upload/imgEvent/$filename";
    //     move_uploaded_file($imagetemloc,$folder);
    //     $allowType = array("jpg","jpeg","png","gif");
       
        
            $conn = new dbconnect();
            $conn->insertComment($data,$eventid,$userid,$page);
    
// }
}
elseif (isset($_POST['submit'])){
    if($Status=="InsertEvent"){
        echo 'zxx';
        // $User = $_SESSION['data_user']['user_ID'];
        // $province_ID = $_POST['Username'];
        // $pre_ID  = $_POST['Username'];
        // $Event_Name = $_POST['Event_Name'];
        // $Event_People = $_POST['Username'];
        // $eventparticulars =$_POST['Particulars'];
        // $Event_Province = $_POST['Username'];
        // $Event_Location = $_POST['Username'];
        // $Event_Date = $_POST['date'];
        // $Event_Date_End = $_POST['dateend'];
        // $Event_Time = $_POST['time'];
        // $Event_TimeEnd = $_POST['timeend'];
        // $Event_Image = $_POST['Username'];
        // $Event_Type = $_POST['Username'];
        // $Event_Status = "1";
        // $Event_Delet =  "1";
        // $con = new dbconnect();
        // $con->InsertEvent($User,$province_ID,$pre_ID,$Event_Name,$Event_People,$eventparticulars,$Event_Province,$Event_Location,$Event_Date,$Event_Date_End,$Event_Time,$Event_TimeEnd,$Event_Image,$Event_Type,$Event_Status,$Event_Delet);
    }
    // $data = $_POST['comment'];
    // $eventid = $_REQUEST['eventid'];
    // $userid = $_REQUEST['userid'];
    // $page = $_REQUEST['page'];
 //    echo $data,$eventid,$userid;
     // $indexEvent = $_REQUEST['event'];
     // // echo $indexEvent;
     // // echo "123";
     // if(!empty($_FILES["editEvent"]['name'])){
     //     $userid = $_SESSION['data_user']['user_ID'];
     //     $filename = basename($_FILES['editEvent']['name']);
     //     // echo $userid,$filename;
     //     $imagetemloc=$_FILES['editEvent']['tmp_name'];
     //     $folder="upload/imgEvent/$filename";
     //     move_uploaded_file($imagetemloc,$folder);
     //     $allowType = array("jpg","jpeg","png","gif");
        
         
            //  $conn = new dbconnect();
            //  $conn->insertComment($data,$eventid,$userid,$page);
     
 // }
 }
?>