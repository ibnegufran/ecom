
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header>
<div class="header1">
    <div class="container flex">
        <div class="share_icons">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-whatsapp"></a>
            <a href="#" class="fab fa-linkedin"></a>

        </div>
        <p> new                             <a href="login.php">login</a> | <a href="register.php"> register</a></p>
    </div>
</div>
<div class="header2">
   <div class="navbar flex">
   <h1><a href="home.php"><span>book</span>snap</a></h1>
    <nav class="menu_con">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="shop.php">shop</a>
        <a href="contact.php">contact</a>
        <a href="orders.php">orders</a>

</nav>
    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="search.php" class="fas fa-search"></a>
        <div id="user-btn" class="fas fa-user"></div>
        <?php
        $cart_select=mysqli_query($con,"SELECT * FROM `cart` WHERE user_id='$user_id'") or die('quer failed');
        $total_cart=mysqli_num_rows($cart_select);

        ?>
<a href="cart.php"><i class="fas fa-shopping-cart"></i><span> (<?php echo  $total_cart; ?>)</span></a>
    </div>
    <div class="account-box flex">
        <p>username : <span><?php echo $_SESSION['user_name'];?></span></p>
        <p>email : <span><?php echo $_SESSION['user_email'];?></span></p>
<a href="logout.php" class="delete-btn" onclick="alert('are you sure to logout' ) ">logout</a>
    </div>

   </div>
</div>

</header>