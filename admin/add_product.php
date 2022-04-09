<?php 
    include './config/db.php';
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $price_old = $_POST['price_old'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $image = $_FILES['image']['name'];
        $description = $_POST['description'];
        $date = date('j M, Y');
        $query = "INSERT INTO  product ( name, price_old ,price, discount, img, description, date)
         VALUES ('$name', '$price_old', '$price', '$discount', '$image', '$description', '$date')";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query Failed.");
          }
          $_SESSION['add'] = 'add';
          header("location: index.php");
    }
    if(isset($_POST['cancel'])){
        header("location: index.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,300;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form-login-wrapper">
            <form action="add_product.php" method="POST" enctype="multipart/form-data">
                <div class="add-form">
                    <div class="add-form-content" >
                    
                        
                        <h1>Add Product</h1>
                        <div class="add-form-input">
                            <input type="text" class="form-input" placeholder="Name: " name="name"/>
                            <input type="text" class="form-input" placeholder="Price Old: " name="price_old"/>
                            <input type="text" class="form-input" placeholder="Price: " name="price"/>
                            <input type="text" class="form-input" placeholder="Discount: " name="discount"/>
                            <input type="file" class="form-input" placeholder="Image: " name="image" multiple/>
                            <input type="text" class="form-input" placeholder="Description: " name="description"/>
                        </div>
                        <div class="button-edit">                      
                            <button class="button-edit-admin btn btn-danger edit" name="cancel">
                              <i class="far fa-window-close"></i>
                              Cancel
                            </button>
                            <button type="submit"class=" button-edit-admin btn btn-success edit" name="add" value="add" >
                            <i class="far fa-save"></i>
                                Add
                            </button>
                          </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
