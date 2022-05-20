<html>

    <head>
        <style type="text/css">
            .button{float:right;color:white;background-color:#0033ff;border-radius:9px;border-color:#0033ff;}
            .styles{color:black;font-size:25px;text-align:center;}
            body{background-color: #ccff99;}
            .textStyle{color:#33cc00;
                       font-family:Stencil Std, fantasy;
                       font-size: 52px;
                       font-weight: bolder;
                       padding: 8px 12px;
                       position:absolute;
                       top: 25px;
                       width: 100%;
                       text-align: center;}
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
            * {box-sizing: border-box}
            .mySlides {display: none}

            /* Slideshow container */
            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }

            /* Next & previous buttons */
            .prev, .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -22px;
                color: black;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }
            .prev{
                margin-left: -80px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {

                background-color: #33cc00;
            }

            /* Caption text */

            /* The dots/bullets/indicators */
            .dot {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #99ff33;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
                background-color: #33cc00
            }

            /* Fading animation */
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }

            @keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
                .prev, .next,.text {font-size: 11px}
            }


        </style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
            <?php
        session_start();
        if ($_SESSION['status'] == "logout_index") {
            header("Location: index.php");
        }
        if ($_SESSION['status'] == "logout_signup") {
            header("Location: addclient.php");
        }
        ?>
  <div>
            <ul>
                <li style="background-color: #33cc00"><a href="shop.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
              
                <li style="float:right"><a href="index.php">Logout</a></li>
              
                <li style="float:right"><a href="cart.php" title="MY CART"> checkout &#128722;</a></li>

            </ul>
        </div>
         <div class="styles">
             
             <?php
            echo 'Hi ';
            echo $_SESSION['name'];
            echo ', what do you like to buy today ?';
            echo '<br><br>';
            ?>
         </div>
<div class="slideshow-container" style="align:center;margin-left: 200px">

            <div class="mySlides fade">

                <img src="images/grocery.jpg" style="width:900px;height:400px">
                <div class="textStyle">Fresh products</div>
            </div>

            <div class="mySlides fade">

                <img src="images/delivery.jpg" style="width:900px;height: 400px">
                <div class="textStyle">Fast delivery</div>
            </div>

            <div class="mySlides fade">

                <img src="images/picture.jpg" style="width:900px;height: 400px">

            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
         <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>


    </body>
</html>