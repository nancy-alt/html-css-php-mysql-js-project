<html>
    <head>
        <style type="text/css">
            .button{float:center;color:black;width:120px;background-color:#99ff33;border-radius:9px;border-color:#99ff33;}
            body{background-color:#99ff33;background-image:url(images/background1.jpg);background-repeat:no-repeat;background-size: cover

            }
            table{background-color:white;border-collapse: collapse;margin-top: 200px;margin-right: 200px;border-radius: 9px}


        </style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        

      session_start();
      require_once 'connection.php';
      $name=$_SESSION['name'];
      $location=$_SESSION['location'];
      $phoneNumber=$_SESSION['phoneNumber'];
      
        ?>
         <body>
        <form method="post" >
            <table cellpadding=10 border="0" align="right">
                <tr><th colspan="2" style="font-size:21px;border-top-left-radius:9px;border-top-right-radius:9px;background: #99ff33">CHECKOUT</th></tr>
                <tr >
                <tr>
                    <td  colspan="2"><?php echo 'name: '.$name?></td>
                </tr>
                <tr>
                    <td colspan="2"><?php echo 'phoneNumber: '.gettext($phoneNumber) ?>
                    </td></tr>
                <tr >
                <tr>
                    <td  colspan="2"><?php echo 'location: '. gettext($location)?></td>
                <br>

                </tr>
                
                    <td><a href="shop.php" style="color:#99ff33" title="homepage">←Back to homepage</a></td>
                    <td><input type="submit" class="button" name="checkout" size="30" value="checkout"></td></tr></table></form>


       
        <?php
        require_once 'connection.php';
        $name = '';
        $location = '';
        $phoneNumber = '';
        if (!$con) {
            die("Database access failed: ") . mysqli_error();
        } else if (isset($_POST['checkout'])) {
            header("Location: index.php");
        
        }
        
        
        ?>


    </body>
</html>
