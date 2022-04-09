<?php 
    ob_start();
    include('config/db.php');
    
    $product = mysqli_query($conn,"SELECT * FROM product");

    $query = "SELECT * FROM product";
    $result_tasks = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/responsion.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/lg.css">
    <script href="./js/lg.js"></script>

    <title>Shop Fresh Flowers</title>
</head>

<body>

<!-- befor header  -->
<div id="header">
    <input type="checkbox" hidden id="checkbox-navbar">
    <label class="icon-navbar" for="checkbox-navbar"><i class="icon-navbar__mobi fas fa-list-ul"></i></label>
    <a href="#">
        <div class="logo">Flower<span class="logo-dots">.</span></div>
    </a>
    <label for="checkbox-navbar" class="overlay"></label>
    <ul class="navbar-list">
        <li class="navbar-item"><a href="#" class="navbar-item-link">Home</a></li>
        <li class="navbar-item"><a href="#about" class="navbar-item-link">About</a></li>
        <li class="navbar-item"><a href="#product" class="navbar-item-link">Product</a></li>
        <li class="navbar-item"><a href="#review" class="navbar-item-link">Review</a></li>
        <li class="navbar-item"><a href="#contact" class="navbar-item-link">Contact</a></li>
    </ul>

    <div class="header-icon">
        <a href="#" class="header-icon-link"><i class="fas fa-heart"></i></a>
        <a href="#" class="header-icon-link has-no-card"><i class="fas fa-shopping-cart"></i>
            <!-- Gio hang NO  -->
            <div class="no-cart">
                <h2 class="no-cart__label">you don't have any flowers</h2>
                <img class="no-cart__img" src="./assets/images/no cart.png" alt="">
            </div>
            <!-- gio hang End -->
        </a>
        <a href="login_user.php" class="header-icon-link login"><i class="fas fa-user"></i></a>
        <span class="username_login" style="font-size:1.7rem;"> 
                              <?php
                                if (isset($_SESSION["login"])){
                                echo $_SESSION["login"][2];}
                              ?>
                          </span>
                          <script>
                              let getUserName = document.querySelector('.username_login');
                              let login = document.querySelector('.login');
                              if (getUserName.innerText != ''){
                                    getUserName.style.display = 'block';
                                    login.style.display = 'none';
                                }
                          </script>
        <a href="logout_user.php" class="header-icon-link"><i class="fas fa-sign-out-alt"></i></a>
    </div>
</div>
<!-- end header -->

<!-- befor slide -->
<div id="slide">
    <div class="slide-img"></div>
    <div class="slide-content">
        <h3 class="slide-title">Fresh Flowers</h3>
        <span class="slide-slogan">Natural & Beautiful Flowers</span>
        <p class="slide-desc">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Beatae Laborum Ut Minus
            Corrupti Dolorum Dolore Assumenda Iste Voluptate Dolorem Pariatur.</p>
        <button class="btn">Shop Now</button>
    </div>
</div>
<!-- end slide -->

<!-- befor about -->
<div class="grid wide">

    <div id="about">
        <div class="heading-section">
            <h3 class="heading-section-text1">About</h3>
            <h3 class="heading-section-text2">Us</h3>
        </div>
    </div>

    <div class="about-content">
        <div class="row">
            <div class="col l-6 c-12 ">
                <div class="wrap_video-content">
                    <video class="about-video" src="./assets/images/about-vid.mp4" loop autoplay muted></video>
                    <h3 class="about-video-text">✿ Best flower Sellers ❁</h3>
                </div>
            </div>
            <div class="col l-6 c-12 ">
                <h2 class="about-title">Why Choose Us?</h2>
                <p class="about-desc">
                I love, love roses very much. Rose is the queen of flowers. Roses have many types: blue roses, cinnamon roses, yellow roses, velvet roses, climbing roses, white roses, peach roses, etc. Roses are brilliant, beautiful, fragrant. You can put a rose stem in a jar. Can be plugged into a bowl, just a single rosette.
                </p>
                <p class="about-desc2 ">
                A white rose can be placed on an antique plate, solemnly placed in the middle of the table. Thin, loving rose petals, bright yellow stamens, fragrant rose scent. With roses, the room is polite, more formal. My mother works as a teacher.
                </p>
                <button class="btn">Learn More</button>
            </div>
        </div>
    </div>

</div>
<!-- end about -->

<!--befor icon Pay  -->
<div id="iconPay">
    <div class="grid wide">
        <div class="row">

            <div class="col l-3 c-12">
                <div class="icon-wrap">
                    <img src="./assets/images/icon-1.png" class="icon-img" alt="">
                    <div class="icon-content">
                        <h1 class="icon-text-title">Free Delivery</h1>
                        <span class="icon-text-desc">On All Orders</span>
                    </div>
                </div>
            </div>

            <div class="col l-3 c-12">
                <div class="icon-wrap">
                    <img src="./assets/images/icon-2.png" class="icon-img" alt="">
                    <div class="icon-content">
                        <h1 class="icon-text-title">10 Days Returns</h1>
                        <span class="icon-text-desc">Moneyback Guarantee</span>
                    </div>
                </div>
            </div>

            <div class="col l-3 c-12">
                <div class="icon-wrap">
                    <img src="./assets/images/icon-3.png" class="icon-img" alt="">
                    <div class="icon-content">
                        <h1 class="icon-text-title">Offer & Gifts</h1>
                        <span class="icon-text-desc">On All Orders</span>
                    </div>
                </div>
            </div>

            <div class="col l-3 c-12">
                <div class="icon-wrap">
                    <img src="./assets/images/icon-4.png" class="icon-img" alt="">
                    <div class="icon-content">
                        <h1 class="icon-text-title">Secure Paymensy</h1>
                        <span class="icon-text-desc">Protected By Paypal</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--end Pay -->

<!-- befor Products -->
<div class="grid wide">
    <div id="product">
        <div class="heading-section">
            <h3 class="heading-section-text2">Latest</h3>
            <h3 class="heading-section-text1">Products</h3>
        </div>
    </div>
    <div class="row">
    <?php foreach ($product as $key => $value): ?>
        <div class="col l-4 c-12">
            <div class="product-wrap">
                <span class="discount"><?php echo $value['discount'];?></span>
                <div class="img">
                    <img style="object-fit:cover" width=400px height=400px src="./admin/upload/<?php echo $value['img']; ?>" alt="" class="product-img" alt="">
                    <div class="product__icon">
                        <a class="product-icon-link" href="#"><i class="product-icon-heart fas fa-heart"></i></a>
                        <a class="product-btn" href="cart.php&id=<?php echo $value["product_id"] ?>">add to cart</a>
                        <a class="product-icon-link" href="product_details.php?id=<?php echo $value ['product_id'] ?>"><i class="product-icon-share fas fa-share"></i></a>
                    </div>
                </div>
                <div class="product__content">
                    <h2 class="product__content-title"> <?php echo $value['name'];?></h2>
                    <div class="product__content-price">
                        <span class="price-new"><?php echo $value['price'];?></span>
                        <span class="price-old"><?php echo $value['price_old'];?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php  endforeach ?>

        <!-- <div class="col l-4 c-12">
            <div class="product-wrap">
                <span class="discount">-80%</span>
                <div class="img">
                    <img src="./assets/images/img-7.jpg" alt="" class="product-img">
                    <div class="product__icon">
                        <a class="product-icon-link" href="#"><i class="product-icon-heart fas fa-heart"></i></a>
                        <a class="product-btn" href="#">add to cart</a>
                        <a class="product-icon-link" href="#"><i class="product-icon-share fas fa-share"></i></a>
                    </div>
                </div>
                <div class="product__content">
                    <h2 class="product__content-title">Flower Pot</h2>
                    <div class="product__content-price">
                        <span class="price-new">$12.99</span>
                        <span class="price-old">$15.99</span>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- end  Products -->

<!--befor Review  -->
<div class="grid wide">
    <div id="review">
        <div class="heading-section">
            <h3 class="heading-section-text2">Customer's</h3>
            <h3 class="heading-section-text1">Review</h3>
        </div>
    </div>
    <div class="row  render-feeback">
        <div class="col l-6 c-12">
            <div class="customer">
                <div class="rating">
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                </div>
                <span class="review-desc">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti
                        Asperiores Laboriosam Praesentium Enim Maiores?
                        Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt
                        Eaque Nulla Dignissimos.</span>
                <div class="user">
                    <img class="avata-user" src="./assets/images/pic-1.png" alt="">
                    <div class="user-info">
                        <h1 class="name-user">Hai Dang</h1>
                        <span class="feel-user">Happy Customer</span>
                    </div>
                    <span class="quote-right"><i class="fas fa-quote-right"></i></span>
                </div>

            </div>
        </div>

        <div class="col l-6 c-12">
            <div class="customer">
                <div class="rating">
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                </div>
                <span class="review-desc">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti
                        Asperiores Laboriosam Praesentium Enim Maiores?
                        Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt
                        Eaque Nulla Dignissimos.</span>
                <div class="user">
                    <img class="avata-user" src="./assets/images/pic-2.png" alt="">
                    <div class="user-info">
                        <h1 class="name-user">Hai Dang</h1>
                        <span class="feel-user">Happy Customer</span>
                    </div>
                    <span class="quote-right"><i class="fas fa-quote-right"></i></span>
                </div>

            </div>
        </div>

        <div class="col l-6 c-12">
            <div class="customer">
                <div class="rating">
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                    <a href="" class="rating-link"><i class="fas fa-star"></i></a>
                </div>
                <span class="review-desc">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti
                        Asperiores Laboriosam Praesentium Enim Maiores?
                        Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt
                        Eaque Nulla Dignissimos.</span>
                <div class="user">
                    <img class="avata-user" src="./assets/images/pic-3.png" alt="">
                    <div class="user-info">
                        <h1 class="name-user">Hai Dang</h1>
                        <span class="feel-user">Happy Customer</span>
                    </div>
                    <span class="quote-right"><i class="fas fa-quote-right"></i></span>
                </div>

            </div>
        </div>
    </div>
</div>
<!--end Review  -->

<!-- befor Contact us -->
<div class="grid wide">
    <div id="contact">
        <div class="heading-section">
            <h3 class="heading-section-text1">Contact</h3>
            <h3 class="heading-section-text2">Us</h3>
        </div>
    </div>
    <div class="row">
        <div class="col l-6 c-12">
            <div class="input-contact">
                    <input class="input-style name" type="text" required placeholder="name">
                    <input class="input-style email" type="email" required placeholder="email">
                    <input class="input-style number" type="text" required placeholder="number">
                    <textarea name="" class="input-style description " style="height: 150px;" placeholder="message" id=""
                              cols="10" rows="10"></textarea>
                    <?php 
                        if(isset($_SESSION["login"])){
                            echo "<button  class='btn btnSubmit'>Send Message</button>";
                        }else{
                            echo "<a class='btn' href='login_user.php'>Send Message</a>";
                        }
                    ?>
            </div>
        </div>
        <div class="col l-6 c-12">
            <img src="./assets/images/contact-img.svg" class="contact-img" alt="">
        </div>
    </div>
</div>
<!--end  Contact us -->

<!-- footer -->
<div id="footer" class="footer-befor">
    <div class="grid wide">
        <div class="row">
            <div class="col l-3 c-6 m-6">
                <ul class="footer-list">
                    <h2 class="footer-heading">Quick Links</h2>
                    <li class="footer-item"><a class="footer-item-link" href="">Home</a></li>
                    <li class="footer-item"><a class="footer-item-link" href="">About</a></li>
                    <li class="footer-item"><a class="footer-item-link" href="">Product</a></li>
                    <li class="footer-item"><a class="footer-item-link" href="">Review</a></li>
                    <li class="footer-item"><a class="footer-item-link" href="">Contact</a></li>
                </ul>
            </div>

            <div class="col l-3 c-6 m-6">
                <ul class="footer-list">
                    <h2 class="footer-heading">Extra Links</h2>
                    <li class="footer-item"><a class="footer-item-link" href="">My Account</a></li>
                    <li class="footer-item"><a class="footer-item-link" href="">My order</a></li>
                    <li class="footer-item"><a class="footer-item-link" href="">My Favorite</a></li>
                </ul>
            </div>

            <div class="col l-3 c-6 m-6">
                <ul class="footer-list">
                    <h2 class="footer-heading">Locations</h2>
                    <li class="footer-item"><a class="footer-item-link" href="">Viet Nam</a></li>
                    <li class="footer-item"><a class="footer-item-link" href="">USA</a></li>
                    <li class="footer-item"><a class="footer-item-link" href="">Japan</a></li>
                    <li class="footer-item"><a class="footer-item-link" href="">Fance</a></li>
                </ul>
            </div>

            <div class="col l-3 c-6 m-6">
                <ul class="footer-list">
                    <h2 class="footer-heading">Contact Info</h2>
                    <li class="footer-item"><a class="footer-item-link" href="">+84-258-3510</a></li>
                    <li class="footer-item"><a class="footer-item-link" href="">Trihandsome@gmail.com</a></li>
                    <li class="footer-item"><a class="footer-item-link" href="">Da Nang, Viet Nam-8420</a></li>
                    <li class="footer-item"><img class="footer-img" src="./assets/images/payment.png" alt=""></li>

                </ul>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/main.js"></script>
</body>

</html>
