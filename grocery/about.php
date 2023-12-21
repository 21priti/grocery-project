<?php

session_start(); 
if (!isset( $_SESSION['id'])){
header ("Location:./login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">



    <title>online shopping - about page</title>
     
</head>
<body  style="background-color:#5f2c3e;">

<?php
include "nav.php";
?>
 

<div class="container" style="background-color:#d1adcc;" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
  <div class="row">
    <div class="col-md-6">
  
     

      <img src="logo\about.avif" alt="Your Image" class="img" height="900px" width="600px">
    </div>
    <div class="col-md-6">
      <h1 style="color:blue";>ABOUT US<h1>
    
      <p>"As a family-owned and community-oriented establishment, we take pride in offering a wide 
        selection of high-quality products to meet your everyday needs. From fresh produce to pantry essentials, 
        from dairy and meats to household items, 
        we have carefully curated our offerings to ensure that you find everything you're looking for under one roof."<br>
        "We believe in the power of locally sourced and sustainably produced goods. 
        That's why we work closely with local farmers, artisans, and suppliers to bring you the freshest, 
        most flavorful produce, meats, and artisanal products. Supporting our 
        local community is at the heart of what we do, and we take pride in showcasing the finest offerings from our region."
      </p>

    </div>
  </div>
</div>

<section>
  <div class="container" style="background-color:#d1adcc;" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
    <div class="row">
      <div class="col-md-6">
     <img src="logo\Bread and baked goods.jpg" height="400px" width="400px">
      </div>
      <div class="col-md-6">
        <h2>BREAD</h2>
        <p>"Taste the difference of quality bread that elevates every meal. Indulge in the simple pleasure of good bread at our shop."</p>
        <a href="product.php" class="btn btn-primary">Shop Now</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h2>DRINKS</h2>
        <p>"Introducing our refreshing selection of cold drinks! Quench your thirst with these delightful beverages"</p>
        <a href="product.php" class="btn btn-primary">Shop Now</a>
      </div>
      <div class="col-md-6">
        <img src="logo\drinks.jpg"height="400px" width="400px" >
      </div>
    </div>
  </div>
</section>
<br>


    <div class="container-fluid" style="background-color:#d1adcc;" >
    <center><h1 style="color:blue">-:People say about us:-</h1><center>
<div class="row">

  
<div class="col-lg-2">
<img src="logo\people1.jpg" class="img-fluid">
      <p>"I love the variety of products available at the this shopping store. 
        They have a wide selection that caters to different tastes and preferences."</p>
</div>
<div class="col-lg-2">
<img src="logo\people2.jpg" class="img-fluid">
      <p>"I appreciate the store's layout and organization. 
        It's easy to navigate and find what I need without feeling overwhelmed, customer sevice is excellent."</p>
</div>
<div class="col-lg-2">
<img src="logo\people3.jpg" class="img-fluid">
<p>"The prices at here are reasonable, a
  nd they often have great discounts and promotions. It's a great place to find good deals."</p>
</div>
<div class="col-lg-2">
<img src="logo\image4.jpg" class="img-fluid">
      <p>"The customer service at aur is excellent. The staff is helpful and knowledgeable, making the shopping experience enjoyable."</p>
</div>
<div class="col-lg-2">
<img src="logo\people5.jpg" class="img-fluid">
      <p>"I love the variety of products available at the this shopping store. 
        They have a wide selection that caters to different tastes and preferences."</p>
</div>
<div class="col-lg-2">
<img src="logo\people6.jpg" class="img-fluid">
      <p>"The prices at here are reasonable, a
  nd they often have great discounts and promotions. It's a great place to find good deals."</p>
</div>
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
</section>
<br>


    <?php include 'footer.php'; ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init();
</script>  
</body>
</html>