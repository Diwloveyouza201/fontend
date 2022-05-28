<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login Form Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/sty.css">
    <link rel="stylesheet" href="css/singin.css">
    <link rel="stylesheet" href="css/img.css">
</head>
<body> 
<?php
    
     require_once './dbconnect.php';
   
             $QR_Code_ID = $_REQUEST['QR_Code_ID'];

            $conn = new dbconnect();
            $getCardQR = $conn->getShow_QR_Code_Scan($QR_Code_ID);
            $Data = $getCardQR->fetch_assoc();
            
    ?>
 
            
        
    <div class="container">
        <div class="myCard">

            <div class="myLeftCtn"> 
                 <div style="text-align:center">งาน วิ่งควาย จ.มหาสารคาม</div>
                    <div style="text-align:center" >
                        <img src="Image\IMG_0551.jpg" style="width:200px;height:200px;">
                    </div>
                                            
                    <div class="data"style="text-align:center">
                        <H1 style="font-size: 80px">มานะจ๊ะ</H1>
                    </div>  
                    <div style="text-align:center">
                        <H5>ชื่อ : ฤทธิพงศ์ ถมยา</H5>
                    </div>
                    <div class="data" style="text-align:center">
                        <H5> เบอร์โทร : 0882911587</H5>
                    </div>
                </div>
            </div>   
        </div>
    </div>
                            
                         
                        
</body>
</html> -->
<link href="css/ShowQR.css" rel="stylesheet" type="text/css">
	<div class="id-card-holder">
		<div class="id-card">
            <h2><?php echo $Data['Event_Name'];?></h2>
			<div class="photo">
            <img src="Image\IMG_0551.jpg" style="width:150px;height:180px;">
			</div>
			
			<div class="qr-code">
			
			</div>
            <div>
                <h1><strong><?php echo $Data['NickName'];?></strong></h1>
            </div>
			
			<hr>
            <div>
                <p><strong>ชื่อ :</strong><?php echo $Data['Name'];?><p><strong>เบอร์โทร :</strong><?php echo $Data['Phone'];?><p><p>
               
            </div>
			
		</div>
	</div>