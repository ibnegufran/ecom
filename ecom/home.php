<?php
include 'connect.php';
session_start();
$user_id=$_SESSION['user_id'];
// agar session atart hone ke bad $admin_id set nahi hui to use login page per redirected kardo
if(!isset($user_id)){
    header('location:login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders  </title>
    <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include 'header.php';?>
    <div class="home">
        <div class="content">
            <h3>hand picked book to your door</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente molestiae</p>
            <a href="about.php" class="white-btn">discover more</a>
        </div>
    </div>

<!-- products -->

<section class="products">
    <div class="box_con">
        <?php
        $select_products=mysqli_query($con,"SELECT * FROM `products` LIMIT 6") or die('query failed');

        if(mysqli_num_rows($select_products)>0){
            while($fecth_products=mysqli_fetch_assoc($select_products)){
        ?>

<div class="box">
<form action="" method="post">
    <img src="uploaded_img/<?php echo $fecth_products['image'];?>">
    <div class="name"><?php echo $fecth_products['name'];?></div>
    <div class="price">$<?php echo $fecth_products['price'];?>/-</div>
    <input type="hidden" name="product_name" value="<?php echo $fecth_products['name'];?>">
    <input type="hidden" name="product_price" value="<?php echo $fecth_products['price'];?>">
    <input type="hidden" name="product_image" value="<?php echo $fecth_products['image'];?>">

    <input type="sumbit" name="add_to_cart" value="add to cart" class="add_to">

</form>
    </div>

<?php

            }
        }else{
            echo '<p class="text">no products added yet</p>';
        }
?>


    </div>
</section>






    <?php include 'footer.php'?>
    <script src="script.js"></script>
</body>
</html>