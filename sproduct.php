<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-sdge">
    <meta name="viewport" content="width-device, initial-scale=1.0">
    <title>Afrorock Store</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    
   <link rel="stylesheet" href="style.css">
</head>
    
    
<body>
    
    <section id="header">
        <a href=""><img src="images/Afrorock%20logo%2011.jpeg" class="logo" alt="" height="50" width="150"></a>
         <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="images/B1.jpeg" width="100%" id="mainimg" alt="">
            
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/B1.jpeg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/B2.jpeg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/B3.jpeg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        
        
        <div class="single-pro-details">
            <h6>Home / Gown</h6>
            <h4>Africa Fabrics Gown</h4>
            <h2>$150.00</h2>
            <select>
                <option>Select Sizes</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal"><a href="cart.php" style="text-decoration: none;">Add To Cart</a></button>
            <h4>Product Details</h4>
            <span>This dress is an african women dress.This dress make you look elegant among others,suitable for all occasions. Great sewing techniques and our prices are moderate. Our items are made with great quality fabrics. We have it in different colours so you can decide the color you prefer, just contact us. As soon as your order is received and your measurement is provided we start working on it and get it ready in a very short time and ship it through DHL express which delivers within 3-6 business days. If you have any enquiry, feel free to start an etsy conversation. Thank you for visiting my shop</span>
        </div>
    </section>
    
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="images/W2.jpeg" alt="">
                <div class="des">
                    <span>Africa</span>
                    <h5>Africa Gown</h5>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="images/V2.jpeg" alt="">
                <div class="des">
                    <span>Africa</span>
                    <h5>Africa Gown</h5>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="images/U2.jpeg" alt="">
                <div class="des">
                    <span>Africa</span>
                    <h5>Africa Gown</h5>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href="#" onclick="window.location.href='sproduct.php';"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="images/T2.jpeg" alt="">
                <div class="des">
                    <span>Africa</span>
                    <h5>Africa Gown</h5>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>
    
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>specail offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
    
    <?php
    include"./includes/footer.php"
    
    ?>
    
    <script>
        var mainimg = document.getElementById("mainimg");
        var smallimg = document.getElementsByClassName("small-img");
        
        smallimg[0].onclick = function(){
            mainimg.src = smallimg[0].src
        }
        smallimg[1].onclick = function(){
            mainimg.src = smallimg[1].src
        }
        smallimg[2].onclick = function(){
            mainimg.src = smallimg[2].src
        }
    </script>
    
    
    <script src="index.js"></script>
</body>


</html>