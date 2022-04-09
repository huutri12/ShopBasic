<?php
include('./config/db.php');
$name = '';
$description = '';
$price_old = '';
$price = '';
$discount = '';
$new_image='';
$date = '';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM product WHERE product_id = $id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $discount = $row['discount'];
    $description = $row['description'];
    $price_old = $row['price_old'];
    $price = $row['price'];
    $old_image = $row['img'];
    $date = $row['date'];
  }
}
if (isset($_POST['btnEdit'])) {
  $id = $_GET['id'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price_old = $_POST['price_old'];
  $price = $_POST['price'];
  $new_image = $_FILES['image']['name'];
  $date = date('j M, Y');
  $discount = $_POST['discount'];
  if ($new_image != '' ){
    $update_filename = $_FILES['image']['name']; 
  }
  else{
    $update_filename = $old_image;
  }
  $query = "UPDATE product set name='$name',price_old='$price_old',price='$price', discount='$discount', img='$update_filename', description	='$description', 
  date='$date' WHERE product_id=$id";
  mysqli_query($conn, $query);
  $_SESSION['delete'] = 'delete';
  header('Location: index.php');
}
if (isset($_POST['btnCancel'])){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,300;1,500&display=swap" rel="stylesheet">
    
</head>
<body>
  <div class="container">
        <div class="form-login-wrapper edit">
            <form action="edit_product.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                <div class="add-form">
                    <div class="form-edit" >
                        <h1>Edit Product</h1>
                          <div class="add-form-input">
                              <div class="form-group">
                                <label for="product__name-input" class="product__header">Product Name: </label>
                                <input type="text" class=" form-input form-control product__input" name="name" required placeholder="Enter Product Name" id="product__name-input" value="<?php echo $name; ?>" />
                              </div>
                              <div class="form-group">
                                <label for="product__price-old-input" class="product__header">Price Old: </label>
                                <input type="text" class="form-control form-input product__input" name="price_old" required placeholder="Enter Product Price Old" id="product__price-old-input" value="<?php echo $price_old; ?>"/>
                              </div>
                              <div class="form-group">
                                <label class="product__header">Price: </label>
                                <input type="text" class="form-control form-input product__input" name="price" required placeholder="Enter Product Price" id="product__price-input" value="<?php echo $price; ?>"/>
                              </div>
                              <div class="form-group">
                                <label class="product__header">Discount: </label>
                                <input type="text" class="form-control form-input product__input" name="discount" placeholder="Discount..." id="product__sale-input" value="<?php echo $discount; ?>"/>
                              </div>
                              <div class="form-group">
                                <label class="product__header" for="product__description-input">Product Description: </label>
                                <textarea style="height:100px;" type="text" class=" form-description product__input" name="description"  id="product__description-input"><?php echo $description; ?></textarea>
                              </div>
                              <div class="form-group">
                                <label  class="product__header">Product Image:  </label>
                                <input multiple type="file" name="image" autocomplete="off"  class="product__input product__input-img" />
                              </div>
                          </div>
                          <div class="button-edit">                      
                            <button class="button-edit-admin btn btn-danger edit" name="btnCancel">
                              <i class="far fa-window-close"></i>
                              Cancel
                            </button>
                            <button type="submit"class=" button-edit-admin btn btn-success edit" name="btnEdit" >
                            <i class="fa fa-save"></i>
                                Save
                            </button>
                          </div>
                    </div>
                </div>
            </form>
        </div>
  </div>
</body>
</html>