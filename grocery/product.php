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
</script>
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


<div class="container" style="background-color:#d1adcc;" data-aos="fade-up" data-aos-anchor-placement="top-center">
  <div class="row">
    <?php

        $sql = "select * from product order by pid asc limit 52";
        if(isset($_GET['cid']))
            $sql = "select * from product where catid=$_GET[cid] order by pid desc limit 4";

      $res=mysqli_query($conn,$sql);

      while($row=mysqli_fetch_assoc($res)){
        $mrp = $row["mrp"];
        $discount = $row["discount"];
        $price = $mrp - ($mrp*$discount/100);

    ?>

    <div class="col-lg-3">
      <img src="../web/images/product/<?php echo $row["pimage"]; ?>" class="img-fluid">
      <center><h2><?php echo $row["pname"]; ?></h2>
      <h3>Price : <strike><?php echo $mrp; ?></strike> / <?php echo $price; ?></h3>
      <a href="order.php?pid=<?php echo $row["pid"]; ?>" class="btn btn-primary">shop now</a></center>
    </div>

    <?php 
      }

    ?>

  </div>
</div>


  <div class="container" style="background-color:#d1adcc;"  data-aos="fade-up" data-aos-duration="3000">
    <div class="row">
        <div class="col-md-12 text-center">
            <H1>More Category</H1>
        </div>        

    <?php
        $sql = "select * from category order by cid desc limit 4";
        if(isset($_GET['cid']))
            $sql = "select * from category where cid!=$_GET[cid] order by cid desc limit 4";
        
        $res=mysqli_query($conn,$sql);

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




<br>

<?php include "footer.php";
?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>