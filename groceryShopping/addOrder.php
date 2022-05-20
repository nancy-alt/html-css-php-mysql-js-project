<?php
session_start();
 
$clientName = $_SESSION['name'];
 
if(isset($_POST['productid'])){
    require_once 'connection.php';
    extract($_POST);
     $insertionquery = "INSERT INTO order_items(product_id,clientName,quantity) "
             .         "VALUES('$productid','$clientName','$quantity')";
//     echo $insertionquery;
     mysqli_query($con, $insertionquery);
//     die();
     header("Location: ./product.php");
}

?>