<?php 
    include('./config/db.php');
    if(isset($_GET['id'])) { 
    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE product_id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row['product_id'];
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
        $price_old = $row['price_old'];
        $image = $row['img'];
    }
}
if (isset($_POST['cancel'])){
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/responsion.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/lg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,300;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Details Product</title>
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
       
        <li class="navbar-item"><a href="#contact" class="navbar-item-link">Details Product</a></li>
    </ul>

    <div class="header-icon">
        <a href="#" class="header-icon-link"><i class="fas fa-heart"></i></a>
        <a href="#" class="header-icon-link has-no-card"><i class="fas fa-shopping-cart"></i>
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

<!-- befor content -->
    <div class="details-container">
       <div class="details-wrapper">
           <div class="details-content">
               <div class="details-product-top">
                    <h3 class="details-name" ><?php echo $name;?></h3>
                    <span class="details-price-old" ><?php echo $price_old; ?></span>
               </div>
                <div class="details-product-middle">
                    <p class="details-price-new"><?php echo $price; ?></p>
                </div>
                <div class="details-product-description">
                    <p>BENEFITS</p>
                    <ul class="details-product-item">
                        <li class="details-product-list">
                        <?php echo $description; ?>
                    </li>
                    </ul>
                </div>
                <div class="details-button-add">
                    <button type="button" class="details-btn" href="cart.php&id=<?php echo $row[0] ?>">ADD TO CART</button>
                    <a href="index.php" class="details-btn goback ">BACK</a>
                </div>
           </div>
           <div class="details-wrapper-image">
                <div class="details-header">
                    <div class="details-wrapper-image-icon">
                        <i class="fas fa-share-alt"></i>
                        <i class="far fa-heart"></i>
                     </div>
                     <div class="details-image">
                         <img src="<?php echo "./admin/upload/" .$row['img'];?>" alt=""  width="260px" height="260px" style="object-fit:cover;" > 
                     </div>
                </div>
                <div class="details-footer">
                    <img src="<?php echo "./admin/upload/" .$row['img'];?>" alt="" width="50px" height="50px" style="object-fit:cover;">
                    <img  src="<?php echo "./admin/upload/" .$row['img'];?>" alt="" width="50px" height="50px" style="object-fit:cover;">
                    <img  src="<?php echo "./admin/upload/" .$row['img'];?>" alt="" width="50px" height="50px" style="object-fit:cover;">
                    <img  src="<?php echo "./admin/upload/" .$row['img'];?>" alt="" width="50px" height="50px" style="object-fit:cover;">
                </div>
           </div>
       </div>
    </div>
<!-- end content -->

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
<!-- end footer -->
</body>
</html>