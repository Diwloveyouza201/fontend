<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once "vendor/autoload.php";

use GuzzleHttp\Client;



class dbconnect
{
    public function connect(){
        $mysqli = new mysqli('202.28.34.197', 'qrsystem', 'G4g5v#9a', 'proj61_qrsystem');
        $mysqli->set_charset("utf8");
        if (mysqli_connect_errno()) {
            echo "Connection Failed: " . mysqli_connect_errno();
            exit();
        } else {
        }
        return $mysqli;
    }


    public function insertimage($imgContent)
    {
        echo $imgContent;
        $sql = "UPDATE `user` SET `Image_Profile`='" . $imgContent . "' WHERE User_ID=12";
        $sql = "UPDATE `image` SET `image`='" . $imgContent . "' WHERE id=18";

        $result = $this->connect()->query($sql);
    }


    public function showimage()
    {
        $sql = "SELECT `image` FROM `image` ORDER BY id DESC";
        $result = $this->connect()->query($sql);
        return $result;
    }


    // public function showimage(){
    //     $sql = "SELECT `user` FROM `Image_Profile` ORDER BY id DESC";
    //     $result = $this->connect()->query($sql);
    //     return $result;
    // }



    // public function InsertUser($Username, $Password, $Email, $Name, $NickName, $Gender, $Age, $Phone, $Line_ID, $Image_Profile, $Admin_user)
    // {
    //     $sql = "INSERT INTO `user`(`Username`, `Password`, `Email`, `Name`, `NickName`,`Gender`, `Age`, `Phone`, `Line_ID`, `Image_Profile`, `Admin_user`) 
    //     VALUES ('" . $Username . "','" . $Password . "','" . $Email . "','" . $Name . "','" . $NickName . "','" . $Gender . "','" . $Age . "','" . $Phone . "','" . $Line_ID . "','" . $Image_Profile . "','" . $Admin_user . "')";
    //     if (mysqli_query($this->connect(), $sql)) {
    //         Header("Location:Login.php");
    //     } else {
    //         echo 'Insert Incomplete 1111';
    //     }
    // }


    public function InsertUser($Username, $Password, $Email, $Name, $NickName, $Phone, $Age, $LineID, $Gender, $folder)
    {
        // echo $Username, $Password, $Email, $Name, $NickName, $Gender, $Age, $Phone, $Line_ID, $imgContent;
        // echo $Username,$Password,$Email, $Name, $NickName, $Gender, $Age, $Phone, $Line_ID;

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('POST', '/Qr_project/insertUser', [
            'json' => [
                'username' => $Username,
                'password' => $Password,
                'email' => $Email,
                'name' => $Name,
                'nickname' => $NickName,
                'gender' => $Gender,
                'age' => $Age,
                'phone' => $Phone,
                'lineid' => $LineID,
                'imguser' => $folder,
                'adminuser' => 1,
                'userstatus' => 1
            ]
        ]);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();

            $_SESSION['data_user'] = $suppersum[0];


            Header("Location:Login.php");
        } else {
            Header("Location:SingUp.php");
        }
    }

    public function updateProfile($Username, $Password, $iduser, $Name, $NickName, $Age, $Phone, $Email, $Line_ID, $Gender, $folder)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('POST', '/Qr_project/UpimgUser', [
            'json' => [
                'email' => $Email,
                'name' => $Name,
                'nickname' => $NickName,
                'gender' => $Gender,
                'age' => $Age,
                'phone' => $Phone,
                'lineid' => $Line_ID,
                'imguser' => $folder,
                'user_ID' => $iduser,
            ]
        ]);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            // $body = $response->getBody();

            // $_SESSION['data_user'] = $suppersum[0];
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
            ]);
            $response = $client->request('POST', '/Qr_project/loing', [
                'json' => [
                    'username' => $Username,
                    'password' => $Password
                ]
            ]);
            $body = $response->getBody();
            $sum = $body . "";
            $suppersum = json_decode($sum, true);
            // echo $suppersum[0]['user_ID'];
            if ($response->getStatusCode() == 200) {
                $body = $response->getBody();

                $_SESSION['data_user'] = $suppersum[0];


                Header("Location:Profile.php");
            }
        } else {
            Header("Location:Profile.php");
        }
    }
    public function LoginUser($Username, $Password)
    {
        // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('POST', '/Qr_project/loing', [
            'json' => [
                'username' => $Username,
                'password' => $Password
            ]
        ]);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            if($suppersum[0]['userstatus']==0){
                Header("Location:Login.php");
            }else{
            $body = $response->getBody();
            $_SESSION['data_user'] = $suppersum[0];
            Header("Location:Home.php");
            }

            
        } 
    }
    public function chacksignup($Username, $Password)
    {
        // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('POST', '/Qr_project/loing', [
            'json' => [
                'username' => $Username,
                'password' => $Password
            ]
        ]);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();

            $_SESSION['data_user'] = $suppersum[0];


            Header("Location:Home.php");
        } else {
            Header("Location:Login.php");
        }
    }
    public function InsertEvent($User, $Event_Name, $Event_People, $eventparticulars, $Event_Province, $PEvent, $provincenull, $PEventnull, $Event_Location, $Event_Date, $Event_Date_End, $Event_Time, $Event_TimeEnd, $Event_Status, $Event_Delet, $folder)
    {
        // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('POST', '/Qr_project/insertevent', [
            'json' => [
                'userid' => [
                    'user_ID' => $User
                ],
                'provinceModel' => [
                    'province_ID' => $Event_Province
                ],
                'pEventModel' => [
                    'pre_ID' => $PEvent
                ],
                'eventname' => $Event_Name,
                'eventpeople' => $Event_People,
                'eventparticulars' => $eventparticulars,
                'eventprovince' => $provincenull,
                'eventlocation' => $Event_Location,
                'eventdate' => $Event_Date,
                'eventdateend' => $Event_Date_End,
                'eventtime' => $Event_Time,
                'eventtimeend' => $Event_TimeEnd,
                'eventimage' => $folder,
                'evenrtype' => $PEventnull,
                'eventstatus' => $Event_Status,
                'eventdelet' => $Event_Delet

            ]
        ]);
        Header("Location:Home.php");
    }


    public function show_QRCode()
    {
        // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('GET', '/Qr_project/showqrcode', []);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $_SESSION['QR_Coce_ALL'] = $suppersum;
        } else {
        }
    }


    public function getP_Event()
    {
        // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('GET', '/Qr_project/showpevent', []);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $_SESSION['P_Event'] = $suppersum;
        } else {
        }
    }


    public function getProvince()
    {
        // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('GET', '/Qr_project/showprovince', []);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $_SESSION['Province'] = $suppersum;
        } else {
        }
    }

    // public function InsertEvent($User_IsD,$Event_Name,$Event_Particulars,$Event_People,$Event_Province,$Event_Location,$Event_Date,$Event_DateEnd,$Event_Time,$Event_TimeEnd,$Event_Image,$Event_Type,$Event_Status,$Event_Delet){
    //     $sql = "INSERT INTO `event`(`User_ID`, `Event_Name`, `Event_People`, `Event_Particulars`, `Event_Province`, `Event_Location`, `Event_Date`, `Event_DateEnd`, `Event_Time`, `Event_TimeEnd`, `Event_Image`, `Event_Type`, `Event_Status`, `Event_Delet`) 
    //     VALUES('".$User_ID."','".$Event_Name."','".$Event_People."','".$Event_Particulars."','".$Event_Province."','".$Event_Location."','".$Event_Date."','".$Event_DateEnd."','".$Event_Time."','".$Event_TimeEnd."','".$Event_Image."','".$Event_Type."','".$Event_Status."','".$Event_Delet."')";
    //        echo $sql;
    //        if(mysqli_query($this->connect(), $sql)){
    //             Header("Location:Activity_All.php");
    //             echo'Eventgood';
    //         } else {
    //             echo 'Insert NoGood';
    //         }
    // }
    public function EditProfile($Email, $Name, $NickName, $Age, $Phone, $Line_ID, $Gender, $Image_Profile)
    {
        $sql = " UPDATE user SET Email = '" . $Email . "', Name = '" . $Name . "', NickName = '" . $NickName . "',Age = '" . $Age . "',Phone = '" . $Phone . "',Line_ID = '" . $Line_ID . "',Gender = '" . $Gender . "' WHERE User_ID = '" . $_SESSION['Login_User_ID'] . "' ";
        echo $sql;
        if (mysqli_query($this->connect(), $sql)) {
            Header("Location:Profile.php");
            echo 'Eventgood';
        } else {
            echo 'Insert NoGood';
        }
    }


    public function selectqrcode($eventid, $userid)
    {
        echo "123";
        echo $eventid;
        echo $userid;

        $sql = "SELECT `User_ID`, `Event_ID`FROM `qr_event` WHERE `User_ID`=$userid and `Event_ID`=$eventid";
        // echo $sql;
        if (mysqli_query($this->connect(), $sql)) {
            $Event_ID = $_SESSION['Event_ID'];
            Header("Location:Data_Activity.php?Event_ID=$Event_ID");
            echo 'Eventgood';
        } else {
            echo 'Insert NoGood';
        }
    }


    public function EditEvent($eventid,$eventname,$Pevent,$Location,$provind,$People,$date,$time,$dateend,$timeend,$folder,$Event_Particulars)
    {
        // echo $indexEvent,$folder;
        // // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('POST', '/Qr_project/updateImgEvent', [
            'json' => [

                'event_id' => $eventid,
                'eventname' => $eventname,
                'eventpeople' => $People,
                'eventparticulars' => $Event_Particulars,
                'eventprovince' => $provind,
                'eventlocation' => $Location,
                'eventdate' => $date,
                'eventdateend' => $dateend,
                'eventtime' => $time,
                'eventtimeend' => $timeend,
                'eventimage' => $folder,
                'evenrtype' => $Pevent,
                'eventstatus' => "1",
                'eventdelet' => "1"
            ]
        ]);
            Header("Location:Activity_My.php");
    }
    // public function EditDelet($Event_Delet){
    //     $sql = "UPDATE `event` SET `Event_Delet`= false WHERE Event_ID = '".$_SESSION['Event_ID']."' ";
    //        echo $sql;
    //        if(mysqli_query($this->connect(), $sql)){
    //            $Event_ID = $_SESSION['Event_ID'];
    //             Header("Location:Activity_My.php?Event_ID=$Event_ID");
    //             echo'Eventgood';
    //         } else {
    //             echo 'Insert NoGood';
    //         }
    // }


    public function EditDelet($Event_ID)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('POST', '/Qr_project/deleteevent', [
            'json' => [
                'event_id' => $Event_ID,
                'eventdelet' => 0
            ]
        ]);
        Header("Location:Activity_My.php");
    }



    // public function EditUser($User_Status){
    //     $sql = "UPDATE `user` SET `User_Status`= false WHERE User_ID = '".$_REQUEST["User_ID"]."'  ";
    //        echo $sql;
    //        if(mysqli_query($this->connect(), $sql)){
    //            $Event_ID = $_SESSION['EditUser'];
    //             Header("Location:User.php");
    //             echo'Eventgood';
    //         } else {
    //             echo 'Insert NoGood';
    //         }
    // }
    public function DeletEditUser($User_ID)
    {
        // echo $Event_ID;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('POST', '/Qr_project/deleteuser', [
            'json' => [
                'user_ID' => $User_ID,
                'userstatus' => 0
            ]
        ]);
        Header("Location:User.php");
    }
    public function insertComment($data, $eventid, $userid)
    {
        echo $data, $eventid, $userid;
        // // echo $Event_ID;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com/',
        ]);
        $response = $client->request('POST', '/Qr_project/insertcomment', [
            'json' => [
                'commentdata' => $data,
                'userid' => [
                    'user_ID' => $userid
                ],
                'eventid' => [
                    'event_id' => $eventid
                ]
            ]
        ]);
        Header("Location:data_Activity2.php?event");
    }

    public function DeletEditAdmin($User_ID)
    {
        // echo $Event_ID;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('POST', '/Qr_project/deleteuser', [
            'json' => [
                'user_ID' => $User_ID,
                'userstatus' => 0
            ]
        ]);
        Header("Location:Admin2.php");
    }


    public function getEvent_My()
    {
        $User_ID = $_SESSION['Login_User_ID'];
        $sql = "SELECT * FROM event WHERE `User_ID` = '" . $User_ID . "' and `Event_Delet`= true";
        return $this->connect()->query($sql);
    }

    // public function getEvent_show_ByID($Username,$Password){
    //     $client = new Client([
    //         // Base URI is used with relative requests
    //         'base_uri' => 'https://qrprojecttogit.herokuapp.com',
    //     ]);
    //     $response = $client->request('POST', '/Qr_project/loing', [
    //         'json' => [
    //             'username' => $Username,
    //             'password' => $Password
    //         ]
    //     ]);
    //     $body = $response->getBody();
    //     $sum = $body."";
    //     $suppersum = json_decode($sum,true);
    //     // echo $suppersum[0]['user_ID'];
    //     if($response->getStatusCode()==200){
    //         $body = $response->getBody();

    //             $_SESSION['data_user'] = $suppersum[0];


    //             Header("Location:Home.php");
    //     }
    //     else {
    //             Header("Location:Login.php");
    //         }

    //     // $sql = "SELECT * FROM `event` where `Event_Delet`= true"; 
    //     // return $this->connect()->query($sql);
    // }

    public function getEvent_Show()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('GET', '/Qr_project/showevent', []);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['event_id'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $_SESSION['showevent'] = $suppersum;
        }
    }

    public function getComment()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('GET', '/Qr_project/showcomment', []);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['event_id'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $_SESSION['showcomment'] = $suppersum;
        }
    }

    public function getUser_All()
    {
        $sql = " SELECT ROW_NUMBER() OVER (ORDER BY `Name`) AS number,  `Name`,`Email`, `NickName`, `Gender`, `Age`, `Phone`, `Line_ID`, `User_ID` FROM `user` where Admin_user = 1 and User_Status = 1";
        return $this->connect()->query($sql);
    }
    public function getUser()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('GET', '/Qr_project/showuser', []);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $_SESSION['showUser'] = $suppersum;
        }
    }





    public function getUser_Admin()
    {
        $sql = " SELECT ROW_NUMBER() OVER (ORDER BY `Name`) AS number,  `Name`,`Email`, `NickName`, `Gender`, `Age`, `Phone`, `Line_ID` FROM `user` where Admin_user = 0";
        return $this->connect()->query($sql);
    }
    // public function getProvince(){
    //     $sql = " SELECT `Province_ID`, `Province_Code`, `Province_Name` FROM `p_province`"; 
    //     return $this->connect()->query($sql);
    // }
    // public function getP_Event(){
    //     $sql = " SELECT `Pre_ID`, `Status_Code`, `Type_Name` FROM `p_event`"; 
    //     return $this->connect()->query($sql);
    // }

    public function getShow_QR_Code_My()
    {
        $User_ID = $_SESSION['Login_User_ID'];
        $sql = "SELECT * FROM  qr_event
        LEFT JOIN event
        ON event.Event_ID = qr_event.Event_ID
        LEFT JOIN user
        ON user.User_ID  = qr_event.User_ID 
        where qr_event.User_ID = '" . $User_ID . "'";
        return $this->connect()->query($sql);
    }
    public function getShow_QR_Code_Scan($QR_Code_ID)
    {
        $User_ID = $_SESSION['Login_User_ID'];
        $sql = "SELECT * FROM  qr_event
        LEFT JOIN event
        ON event.Event_ID = qr_event.Event_ID
        LEFT JOIN user
        ON user.User_ID  = qr_event.User_ID 
        where Qrcode_ID = '" . $QR_Code_ID . "'";
        return $this->connect()->query($sql);
    }

    public function getShow_QR_Code_True()
    {
        $User_ID = $_SESSION['Login_User_ID'];
        $sql = "SELECT * FROM user
        LEFT JOIN  qr_event
        ON qr_event.User_ID = user.User_ID
        LEFT JOIN event
        ON event.Event_ID = qr_event.Event_ID
        where user.User_ID = '" . $User_ID . "' and qr_event.Qrcode_Status = true";
        return $this->connect()->query($sql);
    }
    public function getShow_QR_Code_False()
    {
        $User_ID = $_SESSION['Login_User_ID'];
        $sql = "SELECT * FROM user
        LEFT JOIN  qr_event
        ON qr_event.User_ID = user.User_ID
        LEFT JOIN event
        ON event.Event_ID = qr_event.Event_ID
        where user.User_ID = '" . $User_ID . "' and qr_event.Qrcode_Status = false";
        return $this->connect()->query($sql);
    }
    public function get_User()
    {
        $suppersum['user'] = $_SESSION['Login_User_ID'];
        return $suppersum;
    }
    // public function getShow_UserProfile(){
    //     $sql = "SELECT name,NickName,Email,Gender,Age,Phone,Line_ID,Image_Profile FROM `user`WHERE User_ID = 12"; 
    //     return $this->connect()->query($sql);
    // }
    public function getEvent_false()
    {
        $sql = "SELECT * FROM `event` WHERE Event_Status = false";
        return $this->connect()->query($sql);
    }
    public function selecteventid($data)
    {
        $sql = "SELECT `event_id` FROM `event` WHERE `event_id`=$data";
        return $this->connect()->query($sql);

        // echo $a;
        // $sql = "SELECT * FROM `event` WHERE Event_Status = false";
        // return $this->connect()->query($sql);
    }
    public function getEvent_true()
    {
        $sql = "SELECT * FROM `event` WHERE Event_Status = true";
        return $this->connect()->query($sql);
    }
    // public function INSERT_QR($User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status){
    //     $sql = "INSERT INTO `qr_event`(`User_ID`, `Event_ID`, `Qrcode_Status`, `Qrcode_Path`, `Qrcode_Event_Status`) VALUES 
    //     ('".$User_ID."','".$Event_ID."','".$Qrcode_Status."','".$Qrcode_Path."','".$Qrcode_Event_Status."')"; 
    //     return $this->connect()->query($sql);
    // }
    public function INSERT_QR($User_ID, $Event_ID, $Qrcode_Status, $Qrcode_Path, $Qrcode_Event_Status)
    {
        // echo $User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status;

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('POST', '/Qr_project/insertQRCode', [
            'json' => [
                'userid' => [
                    'user_ID' => $User_ID
                ],
                'eventid' => [
                    'event_id' => $Event_ID
                ],
                'qrcodestatus' => $Qrcode_Status,
                'qrcodepath' => $Qrcode_Path,
                'qrcodeeventstatus' => $Qrcode_Event_Status
            ]

        ]);
    }

    // public function Get_QR($User_ID,$Event_ID){
    //     $sql = "SELECT * FROM `qr_event` WHERE `User_ID` = '".$User_ID."' and `Event_ID` = '".$Event_ID."'"; 
    //     return $this->connect()->query($sql);
    // }
    public function Get_QR($User_ID, $Event_ID)
    {
        // echo $User_ID,$Event_ID;
        // echo $User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status;

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('POST', '/Qr_project/showgetqr', [
            'json' => [
                'userid' => [
                    'user_ID' => $User_ID
                ],
                'eventid' => [
                    'event_id' => $Event_ID
                ]

            ]
        ]);

        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);

        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            return $suppersum[0]['qrcode_ID'];
        }
    }

    // public function UPDATE_QR($Qrcode_ID,$Qrcode_Path){
    //     $sql = "UPDATE `qr_event` SET `Qrcode_Path`='".$Qrcode_Path."' WHERE `Qrcode_ID` = '".$Qrcode_ID."'"; 
    //     //return $this->connect()->query($sql);
    //     if(mysqli_query($this->connect(), $sql)){
    //         Header("Location:Data_QR.php?Qrcode_ID=$Qrcode_ID");
    //     }
    // }

    public function UPDATE_QR($Qrcode_ID, $Qrcode_Path)
    {
        // echo $User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status;
        // echo $Qrcode_ID,$Qrcode_Path;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('POST', '/Qr_project/UpDateQR', [
            'json' => [
                'qrcodepath' => $Qrcode_Path,
                'qrcode_ID' => $Qrcode_ID
            ]

        ]);
        // echo "Update good";
        Header("Location:QR_Code_Not_Join.php");
    }


    // public function getQR_Show($Qrcode_ID)
    // {
    //     $sql = "SELECT * FROM  event
    //     LEFT JOIN  qr_event
    //     ON event.Event_ID = qr_event.Event_ID 
    //     WHERE qr_event.Qrcode_ID = '" . $Qrcode_ID . "'";
    //     return $this->connect()->query($sql);
    // }


    public function getQR_Show()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('GET', '/Qr_project/showqrcode', []);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $_SESSION['showQrCode'] = $suppersum;
        }
    }
    public function getdataQrCode($eventid,$Event_ID)
    {
        // echo "eventid=",$eventid;
        // echo $User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status;
        // echo $Qrcode_ID,$Qrcode_Path;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('POST', '/Qr_project/getqridqrcode', [
            'json' => [
                'qrcode_ID' => $eventid,
                
            ]

        ]);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            // echo $suppersum[0]['eventid']['event_id'];
            // echo $Event_ID;
            if($suppersum[0]['eventid']['event_id']==$Event_ID){
            //     echo $suppersum[0]['eventid'];
            //    echo $Event_ID;
                    $body = $response->getBody();
                    $_SESSION['getdataQrCode'] = $suppersum;
                    // echo $suppersum[0]['userid']['name'];
                    Header("Location:submituserqrcode.php");  
            }else{
                Header("Location:data_Activity2.php");  
            }


            
        }
        // echo "Update good";
        
    }
    public function getdataCard($eventid)
    {
        // echo "eventid=",$eventid;
        // echo $User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status;
        // echo $Qrcode_ID,$Qrcode_Path;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('POST', '/Qr_project/getqridqrcode', [
            'json' => [
                'qrcode_ID' => $eventid,
                
            ]

        ]);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
           return $suppersum;
        
        }
        // echo "Update good";
        
    }
    public function get_User_QRcode_event(){
        $showuseridqrcode = $_SESSION['getdataQrCode'];
        return $showuseridqrcode;
    }

    public function editstatusqrevent($idqrcode)
    {
        // echo "123";
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('POST', '/Qr_project/qreventstatusedit', [
            'json' => [
                'qrcodeeventstatus' => 0,
                'qrcode_ID' => $idqrcode
                
            ]

        ]);
        Header("Location:submituserqrcode.php"); 
    }

    public function getEventByid($idevent)
    {
        // echo $idevent;
        // echo "eventid=",$eventid;
        // echo $User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status;
        // echo $Qrcode_ID,$Qrcode_Path;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('POST', '/Qr_project/getEventID', [
            'json' => [
                'event_id' => $idevent,
                
            ]

        ]);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $_SESSION['EventByID'] = $suppersum;
            // echo $suppersum[0]['userid']['name'];
            Header("Location:data_Activity2.php");  
        }
        // echo "Update good";
        
    }
    public function getchackreportEventByid($idevent)
    {
        // echo "44444aa";
        // echo $idevent;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('POST', '/Qr_project/getEventID', [
            'json' => [
                'event_id' => $idevent,
                
            ]

        ]);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $_SESSION['ReportEventByID'] = $suppersum[0];
            // echo $suppersum[0]['userid']['name'];
            Header("Location:dataReport.php");  
        }
 
        


        
    }
    public function getchackqrcodeid($idevent)
    {
        echo "44444aa";
        echo $idevent;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('POST', '/Qr_project/getqridqrcode', [
            'json' => [
                'qrcode_ID' => $idevent,
                
            ]


        ]);
        $body = $response->getBody();
        $sum = $body . "";
        $suppersum = json_decode($sum, true);
        // echo $suppersum[0]['user_ID'];
        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $_SESSION['dataQrCode'] = $suppersum[0];
            // echo $suppersum[0]['userid']['name'];
            Header("Location:Data_QR.php");  
        }

    }

    public function EndEvent($idqrcode)
    {
        // echo "123";
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://qrprojecttogit.herokuapp.com',
        ]);
        $response = $client->request('POST', '/Qr_project/updateeventstatus', [
            'json' => [
                'event_id' => $idqrcode,
                'eventstatus' => 0
                
            ]

        ]);
        Header("Location:Activity_My.php"); 
    }
    // public function getQR($data1)
    // {

    //     $client = new Client([
    //         // Base URI is used with relative requests
    //         'base_uri' => 'https://qrprojecttogit.herokuapp.com',
    //     ]);
    //     $response = $client->request('POST', '/Qr_project/getqridqrcode', [
    //         'json' => [
    //             'qrcode_ID' => 55,
    //         ]

    //     ]);
    //     $body = $response->getBody();
    //     $sum = $body . "";
    //     $suppersum = json_decode($sum, true);
    //     echo $suppersum[0]['qrcode_ID'];
    //     echo $suppersum[0]['user_ID'];
    //     if ($response->getStatusCode() == 200) {
    //         $body = $response->getBody();
    //         $arr = $suppersum[0]['qrcode_ID'];
    //         return 54;
    //     }
    // }
}
