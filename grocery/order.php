<?php
  session_start(); 
  if (!isset( $_SESSION['id'])){
    header ("Location:./login.php"); 
    exit;
  }
  include './dbconectivity.php';
  if(isset($_POST['order'])){
    $oid = microtime(true)*10000;
    $uid = $_SESSION['id'];
    $pid = $_POST['pid'];
    $qty = $_POST['qty'];
    $mrp = $_POST['mrp'];
    $disc = $_POST['disc'];
    $price = $_POST['price'];
    

    $sql = "INSERT INTO `orders` (`oid`, `datetime`, `uid`, `pid`, `mrp`, `discount`, `price`, `qty`, `status`) VALUES ('$oid', CURRENT_TIMESTAMP, '$uid', '$pid', '$mrp', '$disc', '$price', '$qty', '0')";

    if(mysqli_query($conn,$sql)){      
      echo '
        <script>
          alert("Order Success");
          window.location.assign("./");
        </script>
      ';
    }
    else{     
      echo '
        <script>
          alert("Order Failed");
        </script>
      ';
    }


  }
  if(isset($_GET['pid'])){
    $sql = "select * from product where pid=$_GET[pid]";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) > 0){
      $row=mysqli_fetch_assoc($res);
        $mrp = $row["mrp"];
        $discount = $mrp * $row["discount"] / 100;
        $price = $mrp - $discount;

    }
    else{
      
      echo '
        <script>
          alert("Invalid Product for Order");
          window.location.assign("./");
        </script>
      ';
    }
  }
  else{
    echo '
      <script>
        alert("Invalid Request");
        window.location.assign("./");
      </script>
    ';
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
  <link rel="stylesheet" href="style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">



    <title>online shopping - order page</title>
     
</head>
<body  style="background-color:#5f2c3e;">

<?php
include "nav.php";
?>

<div class="container" style="background-color:#d1adcc;">
      <center><h2>PLACE-ORDER</h2></center>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form class="form-horizontal" method="post">
        <div class="form-group">
          <label class="control-label col-sm-4" for="email">Product Name:</label>
          <div class="col-sm-4">
            <input type="hidden" class="form-control" name="pid"  value="<?php echo $row['pid']; ?>">
            <input type="text" readonly class="form-control" name="pname"  value="<?php echo $row['pname']; ?>">
          </div>
        </div>
          <div class="form-group">
          <label class="control-label col-sm-4" for="email">MRP:</label>
          <div class="col-sm-4">
            <input type="text" readonly class="form-control" name="mrp"  value="<?php echo $mrp; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="email">Discount:</label>
          <div class="col-sm-4">
            <input type="text" readonly class="form-control" name="disc"  value="<?php echo $discount; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="email">Price:</label>
          <div class="col-sm-4">
            <input type="text" readonly class="form-control" name="price"  value="<?php echo $price; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="email">Quantity:</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" name="qty"  value="1" min="1" max="10">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12 text-center">
            <button type="submit" name="order" class="btn btn-primary">Conform Order</button></center>
          </div>
        </div>
      </form>
      </div>
    </div>
</div>
<br>

<?php include 'footer.php'; ?>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="script.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>   
</body>
</html>