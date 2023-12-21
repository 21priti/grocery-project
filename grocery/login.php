<?php
session_start(); 
if (isset( $_SESSION['id'])){
header ("Location:./home.php"); 
  exit; 
  }

include './dbconectivity.php';
  
if(isset($_POST['login'])){
$uname=$_POST['uname'];
$psw = $_POST['psw'];
$sql = "Select * from register where email='$uname' and password='$psw'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) { 
  $_SESSION['id']=$uname;
  header("Location:./home.php");
}
else
  $errmsg = "Invalid Credencial to login";

}

?>
  <!doctype html>
  <html>
  <head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet"
  href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="log.css">

</head>

   <body>
    <div class="div"><form action="" method="post" name="f1">
      <h1><b>LOGIN</b></h1><br><br> 
      <div class="input-icon">
      <i class="fa fa-user icon"></i>
      <input type="text" name="uname" placeholder="enter user name"><br><br>
      </div>
      <div class="input-icon">
        <i class="fa fa-key icon"></i>
      <input type="password" name="psw"  placeholder="enter password">
      </div><br>
      <?php
        if(isset($errmsg))
          echo "<H5 class='text-center text-danger'>$errmsg</H5>";
      ?>
      <br>

      <label>
        <input type="checkbox" checked="checked" name="remember">remember me
      </label>
      <a style="font-size: 16px;margin-left: 30px; float: right;" href="#" >  forgetten password?</a>
      <br><br>
      <input type="submit" value="LOGIN" name="login">
   
      <a href="register.php"><input type="button" value="REGISTER" class="register"></a> <br><br>
      <p style="color: black; margin-left: 200px;"><b>Or signup/register using</b></p><br>
      <img src="logo/instagram.jpg" height="50px" width="50px"style="margin-left:180px;">
      <img src="logo/facebook.jpg" height="50px" width="50px" style="margin-left:50px;";>
      <img src="logo/google.jpg" height="50px" width="50px" style="margin-left:50px;";>
     
     
      </form>
      </div>
      </body>
      </html>