<?php 
$server="localhost";
$user="root";
$password="";
$database="admin";
$conn=mysqli_connect($server,$user,$password,$database);
if($conn==null){
    die("error:" .mysqli_connect_error());
}
?>