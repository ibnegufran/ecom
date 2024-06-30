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
 <section class="header" style="background-image: url('https://img.freepik.com/free-photo/books-arrangement-with-copy-space_23-2150264106.jpg');">
            <h3 class="title">search page</h3>
            <p><a href="home.php">home</a> / <a href="search.php">search</a></p>
        </section>

        <section class="search-form">
            <form method="post">
                <input type="text" name="search" placeholder="search the books">
                <input type="submit" name="search" value="search" class="btn">
            </form>
        </section>
        <section class="search-products">
            <div class="box-con">
                <?php
                if(isset($_POST['search'])){
                    $product_name=$_POST['name'];
                 $select_products=mysqli_query($con,"SELECT * FROM `products` WHERE name LIKE  '%{$name}%'") or die('query failed');
                
            if(mysqli_num_rows($select_products)>0){
                while($fetch_products=mysqli_fetch_assoc($select_products)){
            ?>

    <div class="box">

        <img src="uploaded_img/<?php echo $fetch_products['image'];?>">
       
        <div class="name"><?php echo $fetch_products['name'];?></div>
        <div class="price">$<?php echo $fetch_products['price'];?>/-</div>
       

        </div>

    <?php

                }
            }else{
                echo '<p class="text">no products added yet</p>' ;
            }
        }else{
                echo '<p class="text">search something</p>' ;

        }
    ?>


            </div>

        </section>







    <?php include 'footer.php'?>
    <script src="script.js"></script>
</body>
</html>