<?php 
?>
<html translate="yes" lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8" http-equiv="content-type"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Boxicons CDN Link for CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Css media link -->
    <!-- <link rel="stylesheet" href="views/style/index.css"/> -->
    <link rel="stylesheet" href="views/style/admin.css"/>
    
    <!-- <link rel="stylesheet" href="assets/css/feathericon.min.css"> -->

    <!-- <link rel="stylesheet" href="assets/plugins/morris/morris.css"> -->
    <title>Admin account</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap');
*{
  margin: 0;
  padding: 0;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}header{height: 90px;background: #B0C4F5D1;display: flex; align-items: center;
justify-content: center;}.inner-width{max-width: 1200px;padding: 0 10px;margin: auto; display: flex; justify-content: space-between;align-items: center;margin: 0;width: 100%;}.logo{float: left;color: #fff;}
.logo img{
  height: 50px;
}
.navigation-menu{
  float: right;
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 60%;
}
.navigation-menu a{
  margin-left: 10px;
  color: #000;
  text-transform: uppercase;
  font-size: 14px;
  padding: 12px 20px;
  border-radius: 4px;
  transition: .2s linear;
}
.navigation-menu a:hover{
  background: #273b91;
  color: #fff;
  transform: scale(1.1);
}
.navigation-menu i{
  margin-right: 8px;
  font-size: 16px;
}
.home{
  color: #fff;
}
.aj_btn {
  background: #506eef;
  color: #fff;
  font-weight: 500;
  letter-spacing: 2px;
  padding: 12px 20px;
  border-radius: 4px;
  transition: .2s linear;
}
.aj_btn:hover{
  background: #fff;
  color: #273b91;
  font-weight: 500;
  letter-spacing: 2px;
}
.menu-toggle-btn{
  float: right;
  height: 90px;
  line-height: 90px !important;
  color: #fff;
  font-size: 26px;
  display: none !important;
  cursor: pointer;
}
@media screen and (max-width:900px) {
  .menu-toggle-btn{
    display: block !important;
  }
  .navigation-menu{
    position: fixed;
    width: 100%;
    max-width: 400px;
    background: #172b4d;
    top: 90px;
    right: 0;
    display: none;
    padding: 20px 40px;
    box-sizing: border-box;
  }
  .navigation-menu::before{
    content: "";
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #172b4d;
    position: absolute;
    top: -10px;
    right: 10px;
  }
  .navigation-menu a{
    display: block;
    margin: 10px 0;
  }
  .navigation-menu.active{
    display: block;
  }
}
</style>
<header>
      <div class="inner-width">
      <div class="logo">
        <img src="http://localhost/Shopy-net/src/views/images/homekevinDownloadsshopping-cart-removebg-preview.png"
         alt="logo_dash" class="logo_lissted_site"/>
      </div>

        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu">
          <a href="/admin"> Dashboard</a>
          <a href="/admin/product_managment"></i> product managment</a>
          <a href="/admin/client_managment"></i> clints managment</a>
          <a href="#"></i> Contact</a></nav>
        
        <?php
        // if(isset($_SESSION['logged'])){
        // if($_SESSION['logged'] == true){
        ?>
        <div>
        <a href="#" class="aj_btn"> <i class="fas fa-lock" aria-hidden="true"></i>
            logout</a>
        </div>
      <?php 
    //   }
    // }
      ?> 
      
      </div>
</header>

</div>