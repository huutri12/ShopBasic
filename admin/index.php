<?php 
ob_start();
include('config/db.php');
if (!isset($_SESSION["login"])){
    header("Location: login.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,300;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Home</title>
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
        <li class="navbar-item"><a href="#about" class="navbar-item-link">Product</a></li>
    </ul>

    <div class="header-icon">
        </a>
        <a href="login.php" class="header-icon-link login"><i class="fas fa-user"></i></a>
        <span class="username_login" style="font-size:1.7rem;"> Hello, 
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
        <a href="logout.php" class="header-icon-link"><i class="fas fa-sign-out-alt"></i></a>
    </div>
</div>
<!-- end header -->

<!-- befor content -->

<?php 
    $query = "SELECT * FROM product";
    $result_tasks = mysqli_query($conn, $query);
?>
                    <div class="btnAdd_Product">
                        <a href="add_product.php"><button type="button" class="btnAdd"> Add New Product</button></a>
                        <div class="toast-mes-container">
                            <?php 
                                if(!empty($_SESSION['add'])){
                                        echo '<div class="toast-message success">
                                        <p>Successfully !
                                        <i class=" toast-close fas fa-times"></i>
                                        </p>
                                        </div>'; 
                                        unset($_SESSION["add"]);
                                    }
                                        
                                elseif(!empty($_SESSION['delete'])){
                                        echo '<div class="toast-message error">
                                        <p>Successfully !
                                        <i class=" toast-close fas fa-times"></i>
                                        </p>
                                        </div>';
                                            }
                                            unset($_SESSION["delete"]);
                                                                                     
                            ?>
                            
                        </div>                                                    
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Name</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Price Old</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Price</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Discount</th>
                                <th scope="row" style="font-size:1.5rem; padding-bottom:20px; font-weight:500;">Image</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Description</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Date</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row = mysqli_fetch_assoc($result_tasks)) {
                             ?>
                                <tr style="border-bottom: 1px solid #dee2e6; ">
                                <td style="font-size:1.5rem;"><?php echo $row['name']; ?></td>
                                <td style="font-size:1.5rem;"><?php echo $row['price_old']; ?></td>
                                <td style="font-size:1.5rem;"><?php echo $row['price']; ?></td>
                                <td style="font-size:1.5rem;"><?php echo $row['discount']; ?></td>
                                <td>
                                <img src="<?php echo "./upload/" .$row['img'];?>" width="60px" height="60px" alt="">
                                </td>
                                <td style="font-size:1.5rem;"><?php echo $row['description']; ?></td>
                                <td style="font-size:1.5rem;"><?php echo $row['date']; ?></td>
                                <td>
                                    <a style="font-size:2.5rem; margin-right:20px;"  href="edit_product.php?id=<?php echo $row['product_id']?>" class="btn-action edit">
                                    <i class="fas fa-pen-square"></i>
                                    </a>
                                    <a style="font-size:2.5rem" href="delete_product.php?id=<?php echo $row['product_id']?>" class="btn-action delete" onclick="return confirm('Are you sure you want to delete this Flower?');">
                                    <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php }
                             ?>
                        </tbody>
                    </table>
                    
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
<script src="./assets/js/toast.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>