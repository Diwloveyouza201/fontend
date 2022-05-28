<?php
require_once './dbconnect.php';
$Status = $_REQUEST["Status"];
if($Status=="InsertEvent"){
    // echo 'zxx';
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    $User = $_SESSION['data_user']['user_ID'];
    $Event_Name = $_POST['Event_Name'];
    $Event_People = $_POST['People'];
    $eventparticulars =$_POST['Event_Particulars'];
    $Event_Province = $_POST['provind'];
    $PEvent = $_POST['PEvent'];
    $provincenull = "null";
    $PEventnull = "null";
    $Event_Location = $_POST['Location'];
    $Event_Date = $_POST['date'];
    $Event_Date_End = $_POST['dateend'];
    $Event_Time = $_POST['time'];
    $Event_TimeEnd = $_POST['timeend'];
    $Event_Status = 1;
    $Event_Delet = 1;

    // echo $Event_Province;
    // echo $User;
    // echo $Event_Name;
    // echo $Event_People;
    // echo $eventparticulars;
    // echo $Event_Province;
    // echo $PEvent;
    // echo $provincenull;
    // echo $PEventnull;
    // echo $Event_Location;
    // echo $Event_Date;
    // echo $Event_Date_End;
    // echo $Event_Time;
    // echo $Event_TimeEnd;
    // echo $PEvent;

    $filename = basename($_FILES['imageevent']['name']);
    $tmp_name = $_FILES['imageevent']['tmp_name'];
    $folder="upload/imgEvent/".$uuid.$filename;
    move_uploaded_file($tmp_name,$folder);

    
    $con = new dbconnect();
    $con->InsertEvent($User,$Event_Name,$Event_People,$eventparticulars,$Event_Province,$PEvent,$provincenull,$PEventnull,$Event_Location,$Event_Date,$Event_Date_End,$Event_Time,$Event_TimeEnd,$Event_Status,$Event_Delet,$folder);
}

elseif($Status=="insertUser"){
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    // echo 'zxx';
    $Username = $_POST['Username'];
    $Password = $_POST['password'];
    $Email =$_POST['Email'];
    $Name = $_POST['Name'];
    $NickName = $_POST['NickName'];
    $Phone = $_POST['Phone'];
    $Age = $_POST['Age'];
    $LineID = $_POST['Line_ID'];
    $Gender = $_POST['Gender'];

    echo $Username;
    echo $Password;
    echo $Email;
    echo $Name;
    echo $NickName;
    echo $Phone;
    echo $Age;
    echo $LineID;
    echo $Gender;



    $filename = basename($_FILES['photo']['name']);
    $tmp_name = $_FILES['photo']['tmp_name'];
    $folder="upload/profileUser/".$uuid.$filename;
    move_uploaded_file($tmp_name,$folder);

    echo $folder;

    
    $con = new dbconnect();
    $con->insertUser($Username,$Password,$Email,$Name,$NickName,$Phone,$Age,$LineID,$Gender,$folder);
}

elseif($Status=="EditUserProfile"){
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    $iduser = $_REQUEST["iduser"];
    $Username = $_REQUEST["Username"];
    $Password = $_REQUEST["password"];
    echo $Username;
    echo $Password;
    $Name = $_POST['Name'];
    $NickName = $_POST['NickName'];
    $Age =$_POST['Age'];
    $Phone = $_POST['Phone'];
  
    $Email = $_POST['Email'];
    $Line_ID = $_POST['Line_ID'];
    $Gender = $_POST['Gender'];
  if(basename($_FILES['photo']['name'])!=null||!empty(basename($_FILES['photo']['name']))){
     $filename = basename($_FILES['photo']['name']);
    $tmp_name = $_FILES['photo']['tmp_name'];
    $folder="upload/profileUser/".$uuid.$filename;
    move_uploaded_file($tmp_name,$folder);
    echo $folder;
  }else{
    $folder=$_POST['partimage'];
    echo $folder;
  }
   
    $con = new dbconnect();
    $con->updateProfile($Username,$Password,$iduser,$Name,$NickName,$Age,$Phone,$Email,$Line_ID,$Gender,$folder);
}

elseif($Status=="scanqrcode"){
echo "123";

  
  // $con = new dbconnect();
  // $con->insertUser($Username,$Password,$Email,$Name,$NickName,$Phone,$Age,$LineID,$Gender,$folder);
}

elseif($Status=="EditEvent"){
  // echo "123";
  $data = $data ?? random_bytes(16);
  assert(strlen($data) == 16);

  // Set version to 0100
  $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
  // Set bits 6-7 to 10
  $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

  $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
//   $iduser = $_REQUEST["iduser"];
     $eventid = $_REQUEST["event"];
     echo $eventid;
//   $Password = $_REQUEST["password"];
//   echo $Username;
//   echo $Password;
     $eventname = $_POST['Event_Name'];
     $Pevent = $_POST['PEvent'];
     $Event_Particulars = $_POST['Event_Particulars'];
     
     $Location = $_POST['Location'];
     $provind = $_POST['provind'];
     $People = $_POST['People'];
     $date = $_POST['date'];
     $time = $_POST['time'];
     $dateend = $_POST['dateend'];
     $timeend = $_POST['timeend'];

     if(basename($_FILES['photo']['name'])!=null||!empty(basename($_FILES['photo']['name']))){
      $filename = basename($_FILES['photo']['name']);
     $tmp_name = $_FILES['photo']['tmp_name'];
     $folder="upload/profileUser/".$uuid.$filename;
     move_uploaded_file($tmp_name,$folder);
     echo $folder;
   }else{
     $folder=$_POST['partimage'];
     echo $folder;
   }

     echo $eventname;
     echo $Pevent;
     echo $Location;
     echo $provind;
     echo $People ;
     echo $date;
     echo $time;
     echo $dateend;
     echo $timeend;
    //  echo $folder;
  $con = new dbconnect();
  $con->EditEvent($eventid,$eventname,$Pevent,$Location,$provind,$People,$date,$time,$dateend,$timeend,$folder,$Event_Particulars);
}
?>
