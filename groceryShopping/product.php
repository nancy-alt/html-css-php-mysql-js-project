<?php  session_start();
require_once "connection.php";
?>
<html>

    <head>
        <style type="text/css">
            .button{float:right;color:black;margin-left: 30px;background-color:#99ff33;border-radius:9px;border-color:#99ff33;}
            .styles{color:black;font-size:25px;text-align:center;}
            body{background-color: white;}
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #99ff33;
            }

            li {
                float: left;
            }

            li a, .dropbtn {
                display: inline-block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover, .dropdown:hover .dropbtn {
                background-color: #33cc00;
            }

        </style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        
        $status = $_SESSION['status'];
        if ($status == "logout_index") {
            header("Location: index.php");
        } else if ($status == "logout_signup") {
            header("Location: addclient.php");
        }
        ?>

        
        
        
        
        
        
        
        
         <div>
            <ul>
                <li><a href="shop.php">Home</a></li>
                <li style="background-color: #33cc00"><a href="product.php">Products</a></li>
            
                <li style="float:right"><a href="index.php">Logout</a></li>
               
                <li style="float:right"><a href="cart.php" title="MY CART"> checkout &#128722;</a></li>



            </ul>
        </div>
        <br>
        
            <table>
                <tr>
                    <?php
                    $str = "SELECT * FROM products ";
                    $query = mysqli_query($con, $str);
                    while($res = mysqli_fetch_assoc($query)){
                      
                    ?>
                   
                    <td>
                        <div style="background-color:#ccff99;width: 190px;height: 340px;border-radius: 9px;border-color: #33cc00;border-style:solid ">
                            <table style="background-color: #ccff99">
                                <tr><img style="border-bottom-style:solid;border-bottom-color: #33cc00;border-top-left-radius: 9px;border-top-right-radius: 9px" width="190px" height="200px" src="<?php echo $base . $res['product_image']; ?>"/></tr>
                                <tr style="font-weight:bold"><br><center><?php echo $res['product_name']; ?></center></tr>
                                <tr style="font-weight:bold"><center><p><?php echo $res['product_price']; ?> LBP</center></tr>
                             
                                <form method="POST" action="addOrder.php"> 
                                <tr>
                                 <td><input type="text" name="quantity" size="5" maxlength="5"  placeholder="quantity"/></td>
                                    <td>  <input type="submit" style="width:65px" class="button" name="add1" id="add" value="Add"/></td></tr>
                                <input type="hidden" name="productid" value="<?php echo $res['product_id']; ?>" >
                                </form>
                            </table>
                        </div>
                    </td>
                        <?php } ?>
             
                   
     
      <?php
            require_once 'connection.php';

            if (isset($_POST['add1'])) {
                $quantity = $_POST['quantity'];
               
                if ($quantity != '') {

                  //   $message = $quantity . " medium " . $product_name . " added to card cart ";
                    echo "<script type='text/javascript'>alert('$quantity');</script>";
                } else {
                    $message = "Enter quantity first";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
                
            } 
           
            ?>
</body></html>
