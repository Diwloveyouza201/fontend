<!DOCTYPE html>
<html>

<head>
   <link rel="stylesheet" href="css/newLogin.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <link href="css/colorprofile.css" rel="stylesheet">
   <link href="css/textlong.css">

</head>

<body>
   <?php
   session_start();
   if (!isset($_SESSION['Login_User_Username'])) {
      $_SESSION['Login_User_ID'] = null;
   }
   ?>
   <div class="images">
      <a href="Login.php"><img src="Image\Logo-89.png" style="padding-left: 8px;padding-top: 8px;"></a>
   </div>

   <div class="login-page">


      <div class="form" class="center-sceen" style="height: 830px; width: 1050px; margin-left: -533px;  top: 37%; padding-top: 20px;padding-right: 30px;">
         <div class="message-header" style="margin-left: -10px; margin-bottom: 0px;padding-top: 15px;">
            สมัครสมาชิก <br><br>
         </div>

         <form class="login-form" action="insertevent.php?Status=insertUser" method="POST" enctype="multipart/form-data">

            <div class="row">

               <div class="col-md-8" style="border-right: 0.1px solid; color: #d1d1d1;">
                  <div class="row" style="margin-right: 10px;"><br>

                     <input type="username" style="font-size: 18px;" name="Username" required placeholder="ชื่อผู้ใช้" />

                     <div class="col-6" style="padding-left: 0px; padding-right: 15px;">
                        <input type="password" style="font-size: 18px;" name="password" required placeholder="รหัสผ่าน" />
                     </div>
                     <div class="col-6" style="padding-left: 0px; padding-right: 0px;">
                        <input type="password" style="font-size: 18px;" name="" required placeholder="ยืนยัน รหัสผ่าน" />
                     </div>

                     <input type="email" style="font-size: 18px; padding-left: 0px;padding-right: 0px; padding-left: 15px;padding-right: 0px;" name="Email" required placeholder="อีเมล์" />

                     <div class="col-6" style=" padding-left: 0px;padding-right: 15px;">
                        <input type="username" style="font-size: 18px;" name="Name" required placeholder="ชื่อ-สกุล" />
                     </div>
                     <div class="col-6" style="padding-left: 0px;padding-right: 0px;">
                        <input type="text" style="font-size: 18px;" name="NickName" required placeholder="ชื่อเล่น" />
                     </div>

                     <input type="tel" style="font-size: 18px;" name="Phone" required placeholder="เบอร์โทรศัพท์" pattern="[0]{1}[6-9]{1}[0-9]{8}" />

                     <div class="col-6" style="padding-left: 0px;padding-right: 15px;">
                        <input type="number" min="0" max="120" style="font-size: 18px;" name="Age" placeholder="อายุ" required />
                     </div>
                     <div class="col-6" style="padding-left: 0px;padding-right: 0px;">
                        <input type="text" style="font-size: 18px;" name="Line_ID" required placeholder="ไลน์ไอดี" /> <br><br>
                     </div>
                     <div class="col-1.5" style="padding-left: 5px;">
                        <label class="gender" style="color: #a8a8a8;">เพศ &nbsp;: </label>
                     </div>

                     <div class="col-1" style="padding-right: 0px;">
                        <input style="height: 20px; padding-right: 0px;" type="radio" id="html" name="Gender" checked value="G01">
                     </div>
                     <div class="col-0.5">
                        <label style="color: #a8a8a8;">ชาย</label>
                     </div>

                     <div class="col-1" style="padding-right: 0px;">
                        <input style="height: 20px; " type="radio" id="html" name="Gender" value="G02">
                     </div>
                     <div class="col-0.5">
                        <label for="html" style="color: #a8a8a8;">หญิง</label><br><br><br>
                     </div>



                  </div>
               </div>
               <div class="col-md-3">
                  <div class="row"><br>
                     <label style="margin-left: 15px;">อัพโหลดรูปโปรไฟล์</label>
                     <img style="margin-left: 63px;margin-top: 15px;margin-bottom: 25px;width: 220px;height: 220px;" src="" width="100px" height="100px" id="frame">
                     
                  </div>
                  <input type="file" name="photo" onchange="preview()" style="margin-left: 50px; width: 235px;" >
               </div>
               <button class="loginBt"  name="login_user" style="margin-top: 50px;width: 280px;margin-left: 320px;">บันทึก</button>

            </div>
         </form>
      </div>
   </div>
</body>
<script src="js/newLogin.js"></script>
<script type="text/javascript">
   function preview() {
      frame.src = URL.createObjectURL(event.target.files[0]);
   }
</script>

</html>