<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

 <?php 
        require_once 'connection.php';
    
        if (!empty($_POST)) {
         
         $name = $_POST['name'];
         $password = $_POST['password'];
       
       session_start();
       $allclients = "SELECT * FROM clients WHERE name='$name' AND password='$password'";
       $result = mysqli_query($con, $allclients);
           
                                if (mysqli_num_rows($result)> 0) {
                                    $_SESSION['status']="login"; 
                                    
                                        while ($row = mysqli_fetch_row($result)) {
                                            $name = $row[0];
                                            $password=$row[2];
                                        }
                                        
                                        $_SESSION['name'] = $name;
                                     
                                        $_SESSION['password']=$password;

                                        header("Location: shop.php");
                                    }
                                 else {
                                    $message = "invalid username or password";
                                    echo "<script type='text/javascript'>alert('$message');</script>";
                                }
                            } else {
                                $message = "you must fill all the fields";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                            }
                        
       
        ?>
<html>
    <head>
        <style type="text/css">
            .button{float:right;color:black;background-color:#99ff33;border-radius:9px;border-color:#99ff33;}
            body{background-color:#99ff33;background-image:url(images/background1.jpg);background-repeat:no-repeat;background-size: cover

            }
            table{shadow:black;background-color:white;border-collapse: collapse;margin-top:200px;margin-right: 200px;border-radius:9px}

        </style>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <form method="post" action="index.php" >
            <table cellpadding=10 border="0" align="left" >
                <tr><th style="font-size:21px;border-top-left-radius:9px;border-top-right-radius:9px;background-color: #99ff33">LOGIN</th></tr>
                <tr >
                    <td colspan="2">Name <br><center><input type="text" required="" name="name" size="25" maxlength="25" placeholder="Enter ur name"/></center></td>
                </tr>
                <tr>
                    <td colspan="2"> Password <br><input type="password" required name="password" minlength="6" size="25" maxlength="25" placeholder="Enter ur password"/>
                    </td></tr>
                <tr >
                    <td><a href="addclient.php" style="color:#99ff33" title="sign up">sign up</a></td></tr>
                <tr ><td><input type="submit" class="button" name="log" size="15" value="login"></td></tr></table>
    <body>
      
       
    </body>
</html>
