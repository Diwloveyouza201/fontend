<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');
$data =  $_POST["text"];
$datasplit = explode("=", $data);
$data1 = $datasplit[1];

// return json_encode($data1);

// $arr = array("data1"=>$data1,
// );

$con = new dbconnect();
$arr = array("data1"=>$con->getQR($data1));
echo json_encode($arr);



// $data1;

?>