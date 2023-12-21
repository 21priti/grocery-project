<?php
if(isset($_POST['submit'])){
include "dbconectivity.php";
$uname = $_POST['name'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$psw = $_POST['password'];
$address = $_POST['address'];

$sql="INSERT INTO register (`name`, `email`,  `phoneno`,`password`, `address`) VALUES ('$uname', '$email',$phoneno, $psw,'$address')";
$res = mysqli_query($conn,$sql);
if($res){
  header('Location:register.php');
}
}
?>
<!doctype html>
  <html>
  <head>
  <title>REGISTER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet"
  href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="register.css">
</head>
<body>
<script>
    function passcheck(){
      var psw1=document.getElementById("password1").value;
      var psw2=document.getElementById("password2").value;
      if(psw1!=psw2){
        alert("Password Missmatch");
        return false;
      }
      else{
        return true;
      }
    }

  </script>

  <div class="div">
    <img src="logo/reg-img.jpg" class="reg-img">
    <form  method="post" name="f1" class="form">
     <center> <h1><b>LOGIN</b></h1></center><br>
     
     <div class="form-holder active">
<input type="text" name="name" placeholder="enter your name" class="form-control">
</div>
<div class="form-holder ">
<input type="email"  name="email" placeholder="enter your email-id" class="form-control">
</div>
<div class="form-holder ">
<input type="text" id="phoneno"   name="phoneno" placeholder="enter your phone-no" class="form-control">
</div>
<div class="form-holder ">
<input type="text" id="address"   name="address" placeholder="enter your address" class="form-control">
</div>
<div class="form-holder ">
<input type="password" id="password1"  name="password" placeholder="enter your password" class="form-control">
</div>
<div class="form-holder ">
<input type="password"id="password2"   name="repsw" placeholder="re-enter password" class="form-control">
</div>




<input type="checkbox" checked> I agree all statement in <a href="#">Terms & Conditions</a><br><br>

<input type="submit"  value="SUBMIT" name="submit" onclick=" return passcheck();">&nbsp &nbsp &nbsp &nbsp
<a href="login.php"><input type="button" value="LOGIN"></a>

</form>
      
</div>
</body>
</html>