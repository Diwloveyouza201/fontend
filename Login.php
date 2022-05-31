<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <link rel="stylesheet" href="css/newLogin.css">
</head>

<body>
  <?php
isset( $_REQUEST['title'] ) ? $error = $_REQUEST['title'] : $error = "";
if($error != null){
    echo "<script type='text/javascript'>
    alert('.$error.');
  </script>";
}
  session_start();

  //  session_destroy();
  // header("Location:Login.php ");
  // if (!isset($_SESSION['Login_User_Username'])) {
  //   $_SESSION['Login_User_ID'] = NULL;
  // }
  ?>
  <div>
    <a href="Login.php"><img src="Image\Logo-89.png"></a>
  </div>

  <div class="login-page">

    <div class="form">
      <div class="message-header">
        เข้าสู่ระบบ
      </div><br><br>

      <form class="login-form" action="ChackData.php?Status=LoginUser" method="POST">
        <input type="username" style="font-size: 21px;padding-left: 20px;" name="Username" required placeholder="ชื่อผู้ใช้" /> <br>
        <input type="password" style="font-size: 21px;padding-left: 20px;" name="Password" required placeholder="รหัสผ่าน" /> <br><br>
        <button class="loginBt" type="submit" name="login_user">เข้าสู่ระบบ</button>
        <p class="message" style="margin-left: -295px;">ยังไม่มีบัญชี&nbsp;?&nbsp; <a href="SingUp.php">สมัครสมาชิก</a></p>
      </form>
    </div>
  </div>

</body>
<script src="js/newLogin.js"></script>

</html>