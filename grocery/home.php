<?php

session_start(); 
if (!isset( $_SESSION['id'])){
header ("Location:./login.php");
exit;
}
include './dbconectivity.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">



    <title>online shopping - home page</title>
     
</head>
<body  style="background-color:#5f2c3e;">

<?php
include "nav.php";

?>

  
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
     
        <img src="logo\home3.avif" >
      </div>
      <div class="item">
        <img src="logo\home1.avif" >
      </div>

      <div class="item">
        <img src="logo\home2.avif" >
      </div>
    
     
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container" style="background-color:#d1adcc;"  data-aos="fade-up" data-aos-duration="3000">
    <div class="row">

    <?php
      $res=mysqli_query($conn,"select * from category order by cid asc limit 12");
      while($row=mysqli_fetch_assoc($res)){

    ?>
      <div class="col-md-3 text-center">
        <div  data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
        <img src="../web/images/category/<?php echo $row["category_image"]; ?>" style="height:80px; width:120px; margin-left:70px;" >
      </div>
      <h4 ><?php echo $row["category_name"]; ?></h4>
      <!-- <p>Click For More</p> -->
      <a href="product.php?cid=<?php echo $row["cid"]; ?>" class="btn btn-primary btn-circle"><i class="fa fa-arrow-right"></i></a>
      </div>

    <?php } ?>
    </div>
  </div>
</div>

<div class="container" style="background-color:#d1adcc;" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
  <div class="row">
    <div class="col-md-6">
  
     

      <img src="logo\50off.jpg" alt="Your Image" class="img-fluid" height="800px" width="600px">
    </div>
    <div class="col-md-6">
    <i class="fa fa-leaf"></i>
      <h2><center>50% off<center> on all fruits and vegetables shopping</h2>
      <h1>step to go</h1>
      <p>Get the farmers near to you</p>
      <a href="product.php" class="btn btn-primary">shop now</a>
    </div>
  </div>
</div>

<div class="container" style="background-color:#d1adcc;"  data-aos="fade-up"
     data-aos-anchor-placement="top-center" >
<div class="row">
    

<div class="col-md-6" >
  <img src="logo\cans and jars.jpg" alt="Your Image" class="img-fluid">
</div>
  <div class="col-md-6">
  <p>"We are excited to introduce a new addition to our shop: Pickels! 
  These delectable pickles are sure to tickle your taste buds and add a tangy twist to your meals."</p>
  <a href="product.php" class="btn btn-primary">shop now</a>
</div>
<div class="col-md-6" >
  <img src="logo\dairy.jpg" alt="Your Image" class="img-fluid">
</div>
  <div class="col-md-6">
  <p>"Indulge in the rich and creamy goodness of our dairy offerings, which include farm-fresh milk, velvety yogurts, artisanal cheeses, and decadent butter. 
    Each product is crafted with utmost care and attention to ensure superior taste and nutritional value."</p>
    <a href="product.php" class="btn btn-primary">shop now</a>
</div>

<div class="col-md-6" >
  <img src="logo\Meat and fish.jpg" alt="Your Image" class="img-fluid">
</div>
  <div class="col-md-6">
  <p>"Step into 
     Whether you're seeking succulent steaks, juicy chicken breasts,
     we have the perfect meat for every occasion. Our meats are carefully 
    chosen to ensure the highest standards of quality, taste, and freshness, so you can savor every bite with confidence."</p>
    <a href="product.php" class="btn btn-primary">shop now</a>
</div>

</div>
</div>
<div class="container" style="background-color:#d1adcc;" data-aos="fade-up" data-aos-anchor-placement="top-center">
  <div class="row">
    <?php
      $res=mysqli_query($conn,"select * from product order by pid asc limit 8");
      while($row=mysqli_fetch_assoc($res)){
        $mrp = $row["mrp"];
        $discount = $row["discount"];
        $price = $mrp - ($mrp*$discount/100);

    ?>

    <div class="col-lg-3">
      <img src="../web/images/product/<?php echo $row["pimage"]; ?>" class="img-fluid" height="50" width="300">
      <center><h2><?php echo $row["pname"]; ?></h2>
      <h3>Price : <strike><?php echo $mrp; ?></strike> / <?php echo $price; ?></h3>
      <a href="order.php?pid=<?php echo $row["pid"]; ?>"class="btn btn-primary">shop now </a></center>
    </div>

    <?php 
      }

    ?>

  </div>
  </div><br>





<?php include "footer.php";
?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init();
</script>
</body>
  </html>