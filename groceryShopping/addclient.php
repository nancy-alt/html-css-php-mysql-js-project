<?php
//print_r($_POST);die();
if(isset($_POST['name'])){
    require_once 'connection.php';
    extract($_POST);
     $insertionquery = "INSERT INTO clients(name,email,password,location,phoneNumber) "
             .         "VALUES('$name','$email','$password','$location','$phoneNumber')";
 
     mysqli_query($con, $insertionquery);
}

?>
<html>
 <head>
     <style type="text/css">
        .button{float:right;color:black;background-color:#99ff33;border-radius:9px;border-color:#99ff44;}
        body{background-color:#99ff33;background-image:url(images/background1.jpg);;margin-top: 200px;background-repeat:no-repeat;background-size: cover

        }

        table{background-color:white;margin-right: 150px;margin-top: -80px;border-collapse: collapse;border-radius: 9px}


    </style>
 <meta charset="UTF-8">
 <title>Add Client</title>
 </head>
 <body>
     <form action="addclient.php" method="post">
<table cellpadding=10 border="0" align="left">
            <tr><th colspan="2" style="font-size:21px;border-top-left-radius:9px;border-top-right-radius:9px;background: #99ff33">SIGN UP</th></tr>
            <tr >
            <tr>
                <td  colspan="2">Name <br><input type="text" name="name" size="25" maxlength="25" required placeholder="Enter fullname"/></td>
            </tr>
           
            <tr>
                <td  colspan="2">Email <br><input type="text" name="email" size="25" maxlength="25" required placeholder="Enter username"/></td>
            <br>

            </tr>
            <tr>
                <td colspan="2"> Password <br><input type="password" name="password" size="25" maxlength="25" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password not strong:please enter at least one uppercase letter and numbers" placeholder="Enter password"/>
                </td></tr>
             <tr>
                <td  colspan="2">Location <br><input type="text" name="location" size="25" maxlength="25" required placeholder="Enter location"/></td>
            </tr>
             <tr>
                <td  colspan="2">Phone Number <br><input type="text" name="phoneNumber" size="25" maxlength="25" required placeholder="Enter your phone Numbe"/></td>
            </tr>
            <tr>
 
             <td><input type="submit" class="button" name="signup" size="15" value="Sign Up"></td>
         <td><a href="index.php" style="color:#99ff33" title="loginpage">←Back to login page</a></td></tr>
                        
 <!--<input type="text" name="name" placeholder="Client name"/>
 <input type="text" name="email" placeholder="Email"/>
 <input type="password" name="password" placeholder="Password"/>
 <input type="text" name="location" placeholder="Location"/>
 <input type="number" name="phoneNumber" placeholder="Phone Number"/>
 <input type="submit" value="add"/>-->
 </form>
</table>
 
 
 </body>
</html>