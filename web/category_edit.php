<?php
session_start(); 
include "./include/config.php";
if (!isset( $_SESSION['id'])){
  header ("Location:./login.php"); 
  exit; 
}
if(isset($_POST['update'])){
 $cid=$_POST['cid'] ;  
 $category_name= $_POST['name'];
 $status=$_POST['status'] ; 
 $category_image= $_POST['image'];
 $sql="UPDATE category SET category_name='$category_name', category_status='$status',category_image='$category_image' WHERE cid='$cid'";
 $res=mysqli_query($conn,$sql);
 if($res){
    echo "   
    <script>
    alert('record updated');
    window.location.href='category_show.php';
    </script>
    ";
}
else{
    $errmsg="unable to update";
}
}
else if(isset($_GET['cid'])){
$cid=$_GET['cid'];
$sql="select * from category where cid='$cid'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
$row=mysqli_fetch_assoc($res);
$category_name= $row['category_name'];
$category_image= $row['category_image'];
$category_status=$row['category_status'];
}
else{
    echo'
    <script>
    alert("invalid category");
    window.location.href="index.php";
    </script>';
    }
}

?>
<!DOCTYPE html>
<head>
    <title>CATEGORY_ADD</title>
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
        <div class="reg-w3">
            <div class="w3layouts-main">
                <h2>GROCERY CATEGORIES</h2>
                <form action="" method="post">
                    <input type="hidden" name="cid" value="<?php echo $cid; ?>">
                     <input type="text" class="ggg" name="name" value="<?php echo $category_name; ?>"required="">
                     STATUS : <input type="radio" name="status" value="1" <?php if ($category_status==1) echo "checked";?> required>active
                    <input type="radio" name="status" value="0"  <?php if ($category_status==0) echo "checked";?> required>inactive
                    <input type="file" class="ggg" name="image"value="<?php echo $category_image; ?>" required="">
                    <div class="clearfix"></div>
                    <input type="submit" value="UPDATE" name="update">
                    </form>
                    </div>        
                    </div>
                    </div>
<?php
if(isset($msg))
echo "<H3 class='text-success text-center'>$msg</H3>";
if(isset($errmsg))
echo "<H3 class='text-danger text-center'>$errmsg</H3>";
 ?>
 <script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
