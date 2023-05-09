<?php 
if(session_status() == 1)
session_start(); 

define('AUTHOR_NAME','kevin_mak');

?>
<html translate="yes" lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8" http-equiv="content-type"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="<?=APP_NAME?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="<?=AUTHOR_NAME?>"/>
    <meta property="og:language" content="en"/>
    <!-- Boxicons CDN Link for CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Css media link Default stylesheet -->
    <link rel="stylesheet" href="views/style/index.css"/>
    <title><?=APP_NAME?></title>
    <?php 
      if($_SERVER['PHP_SELF'] == '/index.php/login' || $_SERVER['PHP_SELF'] == '/index.php/register'){
        echo'<link rel="stylesheet" href="views/style/login_s.css"/>';
      }
    ?>
    <?php 
    if($_SERVER['PHP_SELF'] == '/index.php/contact'){
      echo'<link rel="stylesheet" href="views/style/contact.css"/>';
    }
    ?>
</head>
<body>
    <script type="text/javascript">
let head_Object =[
    {name :'home',id:'mod_home', class:'list_navigation_Module'},
    {name :'contact',id:'mod_contact', class:'list_navigation_Module'},
    {name :'infos',id:'mod_infos', class:'list_navigation_Module'},
     {registration:{
         name:'Sign-in',id:'login_module',class:'insc_wrapp_mod'
     },login:{
        name:'login',id:'register_module',class:'insc_wrapp_mod'
     }, 
     logout:{ 
        name:'logout',id:'logout_module',class:'insc_wrapp_mod'
     }
     }
];
</script>

    <nav class="menu_navigation">
        <div class="logo_main">
        <a href="/">
         <img src="http://localhost/Shopy-net/src/views/images/homekevinDownloadsshopping-cart-removebg-preview.png"
         style="width:41%" id="Shopy_net_logo"/>
        </a>
        </div>
        <div class="head_wrapp_menu">
        <?php 
        if(!empty($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != ''){
           if($_SERVER['REQUEST_URI'] == '/'){?>
            <form method="GET" action="" class="formul_search_classd">
                <div class="find_srch_product">
                  <input type="text" class="search_box_classic" placeholder="Trouver un produit, un service , un offre"
                  aria-label="Search" id="search_bar" onkeyup="Search()"/>
                
                  <svg class="link_close_valex none" id="icon_close_search_val" xmlns="http://www.w3.org/2000/svg" 
                  width="32" height="32" viewBox="0 0 24 24">
                   <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 
                    12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
                   </svg>
                 <div class="classic_search_icon">
                  <img class="" src="http://localhost/Shopy-net/src/views/images/search.png" style="width:20px; cursor:pointer;
                  padding:0.2rem"/>
                </div>
                </div>
            </form>
        <?php }}?>
            <ul class="elment_dir_header_local">
                <li> 
                  <a href="/"> 
                    <script>document.write(head_Object[0].name)</script>
                  </a>
               </li>
                <li> 
                  <a href="/contact">
                        <script>document.write(head_Object[1].name)</script>
                  </a>
                </li>
                <li> 
                  <a href="/infos"> 
                        <script>document.write(head_Object[2].name)</script>
                  </a>
                </li>
            </ul>
        </div>

        <div class="shpping_cart_element" id="shop_cart_dir">
            <!-- <img class="cart_article_list" src="http://localhost/Shopy-net/src/views/images/shopping-cart.png"
            style="width:23px"/>
            <span class="cart_par_st">cart</span> -->
            <img class="cart_article_icon" src="http://localhost/Shopy-net/src/views/images/sac-de-courses.png" 
            style="width:33px;"/>
            <p>
            <span class="cart_aticle_qte" id="article_cart_quantity">0</span>
            <p>
        </div>
        <?php if(isset($_SESSION['logged'])){?>
           <div class="user_profile_elem">
            <a href='/profile'>
             <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" 
             style="fill: rgba(0, 0, 0, 1);"><path d="M7.5 6.5C7.5 8.981 9.519 11 12
              11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7
               3.141-7 7v1h17z"></path></svg>
            <a>
          </div>
          <div class="profile_infos_setts_media">
            <div class="head_links_m">
               <ul class="">
                <li>profile</li>
                <li>settings</li>
                <li>products</li>
                <li>about</li>
               </ul>
            </div>
          </div>
        <?php } ?>
        <div class="inscription_container_infos">
            <?php 
            if(isset($_SESSION['logged'])){ 
            ?>
            <div> 
              <a href="/logout">
                <button class="inscr_btn">
                 <script>document.write(head_Object[3].logout.name)</script>
                </button>
              </a>
            </div>
            <?php 
              }
              else{ 
            ?>

            <div>
              <a href='/register'>
                <button class="inscr_btn">
                 <script>document.write(head_Object[3].registration.name)</script>
                </button>
            </a>
            </div>
            <div>
            <a href="/login">
                <button class="inscr_btn">
                    <script> document.write(head_Object[3].login.name)</script>
               </button>
            </a>
            </div>
            <?php 
              }
            ?>
        </div>
  </nav>
