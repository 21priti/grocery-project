<?php
session_start(); 
include "./include/config.php";
if (!isset( $_SESSION['id'])){
  header ("Location:./login.php"); 
  exit; 
}
?>


<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/table.css" rel='stylesheet' type='text/css' />

<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<link rel="stylesheet" href="css/table.css">

<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<?php


include "./include/navbar.php";
include "./include/sidenav.php";
?>
<body>
	<div class="panel-body">
	


<div class="container" style="margin:90px 0 0 300px;">
     <center> <h2>USERS</h2></center><hr>

    <table class="table table">
     
      	 <tr>
      	 	   <th  style="color: black;"> UID</th>
                <th  style="color: black;"> NAME</th>
                <th  style="color: black;"> EMAIL</th>
                <th style="color: black;"> PHONE-NO</th>
                <th style="color: black;"> ADDRESS</th>
               
</tr>
<?php

$res=mysqli_query($conn,"select * from register");
while($row=mysqli_fetch_assoc($res)){
    ?>
    <tr>
        <td  style="color: black;"><?php echo $row["uid"];?></td>
        <td  style="color: black;"><?php echo $row["name"];?></td>
        <td  style="color: black;"><?php echo $row["email"];?></td>
         <td  style="color: black;"><?php echo $row["phoneno"];?></td>
          <td  style="color: black;"><?php echo $row["address"];?></td>
          
 
            </form>
          </td>
        </tr>
        <?php

}
?>

</table>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>










    