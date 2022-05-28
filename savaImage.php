
<?php
  $data = "na";
  $url = "http://chart.apis.google.com/chart?cht=qr&chl=".$data."&chs=450";
  //$url =  "C:\Bitnami\wampstack-8.0.11-0\apache2\htdocs\Project_QR\Image\IMG_0884.png";
$img = 'Image_Qr_Code/logo.png'; 
  
// Function to write image into file
file_put_contents($img, file_get_contents($url));
  
echo "File downloaded!"
  
?>