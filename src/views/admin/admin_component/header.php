<html translate="yes" lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8" http-equiv="content-type"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Boxicons CDN Link for CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Css media link -->
    <link rel="stylesheet" href="views/style/admin.css"/>
    <!-- Css Tailwind -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.5.1/tailwind.min.css">
    <?php
    
      echo '<link rel="stylesheet" href="../../views/style/admin.css"/>';
     
    ?>
    <title>Admin account</title>
</head>
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
        <a href="/logout" class="aj_btn"> <i class="fas fa-lock" aria-hidden="true"></i>
            logout</a>
        </div>
      <?php 
    //   }
    // }
      ?> 
      
      </div>
</header>

</div>