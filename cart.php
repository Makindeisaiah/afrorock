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
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    
    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, we love to hear from you</p>
    </section>
    
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quanitity</td>
                    <td>Subtotal</td>        
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/A1.jpeg" alt=""></td>
                    <td>Africa Fabric Gown</td>
                    <td>$100.00</td>
                    <td><input type="number" value="1"></td>
                    <td>$100.00</td>
                </tr>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/B1.jpeg" alt=""></td>
                    <td>Africa Fabric Gown</td>
                    <td>$100.00</td>
                    <td><input type="number" value="1"></td>
                    <td>$100.00</td>
                </tr>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/C1.jpeg" alt=""></td>
                    <td>Africa Fabric Gown</td>
                    <td>$100.00</td>
                    <td><input type="number" value="1"></td>
                    <td>$100.00</td>
                </tr>
            </tbody>
        </table>
    </section>
    
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
        
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$300.00</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>$30.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$330.00</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to Checkout</button>
        </div>
    </section>
    
    <?php
    include"./includes/footer.php"
    
    ?>
    
    <script src="index.js"></script>
</body>


</html>