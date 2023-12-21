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
    <div class="col-md-12">
        <table class="table table-sm table-bordered table-striped table-hovered">
          <tr>
            <th>SL NO</th>
            <th>Date</th>
            <th>Order ID</th>
            <th>Item</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total Proce</th>
          </tr>
          <?php
            $sql = "select * from orders o, register r, product p where o.uid='$_SESSION[id]' and o.pid=p.pid and o.uid=r.email order by datetime desc";
            $res=mysqli_query($conn,$sql);
            $i=0;
            while($row=mysqli_fetch_assoc($res)){
              $i++;
          ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['datetime']; ?></td>
            <td><?php echo $row['oid']; ?></td>
            <td><?php echo $row['pname']; ?></td>
            <td class="text-right"><?php echo number_format($row['price'],2); ?></td>
            <td class="text-right"><?php echo $row['qty']; ?></td>
            <td class="text-right"><?php echo number_format($row['price'] * $row['qty'],2); ?></td>
          </tr>
        <?php } ?>
        </table>
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