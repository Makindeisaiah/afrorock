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
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a class="active" href="about.php">About</a></li>
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
    
    <section id="page-header" class="about-header">
        <h2>#KnowUs</h2>
        <p>Lorem ipsum dolor sit amet, consectetur</p>
    </section>
    
    <section id="about-head" class="section-p1">
        <img src="images/shopping%20image%205.jpeg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore magna alique. Ut enim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis auteirure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occecat upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <abbr title="">Create stunning images with as much or is little control as you like thanks to a choice of Basic and Creative modes.</abbr>
            <br><br>
            <marquee bgcolor="#ccc" loop="-7" scrollamount="5" width="100%">Thank you for patronizing us.</marquee>
        </div>
    </section>
    
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/Online%20order.jpeg">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="images/Save%20money%202.jpeg">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="images/promotion%203.jpeg">
            <h6>Promotion</h6>
        </div>
        <div class="fe-box">
            <img src="images/Happy%20Sale%204.jpeg">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="images/F247%20Support%201.jpeg">
            <h6>F24/7 Support</h6>
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
    
    <script src="index.js"></script>
</body>


</html>