<?php 
session_start(); 
include "./include/config.php";
if (!isset( $_SESSION['id'])){
  header ("Location:./login.php"); 
  exit; 
}


if(isset($_POST['add'])){
$cid=$_POST['cid'];
$pname= $_POST['pname'];
$mrp= $_POST['mrp'];
$discount= $_POST['discount'];
$mxqty= $_POST['mxqty'];



$pimage = microtime(true)*10000 . ".jpg";  // image name with current time stamp
$res = move_uploaded_file($_FILES['pimage']['tmp_name'],  "./images/product/". $pimage);
   if(!$res)
    echo "Error in Upload";
      else{
$sql ="INSERT INTO `product` (`pid`, `catid`, `pname`,  `mrp`, `discount`, `mxqty`,`pimage`) VALUES (NULL, '$cid', '$pname', '$mrp', '$discount', '$mxqty', '$pimage')";
$res = mysqli_query($conn,$sql);
}

if($res)
  $msg = "Record Inserted";
else
  $errmsg = "Unable to insert";
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
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>GROCERY ITEMS</h2>
		<form method="post" enctype="multipart/form-data">
			
			<select class="form-control" name="cid" placeholder="CATEGORY_ID" required="">
		
				<option value="">Choose the category</option>
        <?php
        $res=mysqli_query($conn,"select * from category");
        while($row=mysqli_fetch_assoc($res)){

        ?>
        			<option value="<?php echo $row["cid"]; ?>"><?php echo $row["category_name"]; ?></option>
        <?php
      }
      ?>
			</select>
				<input type="text" class="ggg" name="pname" placeholder="PRODUCT_NAME" required="">
			
			<input type="text" class="ggg" name="mrp" placeholder="PRICE OF THE PRODUCT" required="">
			<input type="text" class="ggg" name="discount" placeholder="DISCOUNT" required="">
			<input type="text" class="ggg" name="mxqty" placeholder="MAXIMUM QUANTITRY" required="">
			<input type="file" class="ggg" name="pimage" placeholder="UPLOAD IMAGE" required="">

		
			
			
				<div class="clearfix"></div>
				<input type="submit" value="ADD" name="add">
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
