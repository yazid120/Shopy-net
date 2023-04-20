<?php 
if(session_status() == 1)
session_start(); 


//var_dump($_SESSION);

define('AUTHOR_NAME','kevin_mak');
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title><?=APP_NAME?></title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="<?=APP_NAME?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="<?=AUTHOR_NAME?>"/>

    <!-- Css media link -->
    <link rel="stylesheet" href="views/style/index.css"/>
    <?php 
      if($_SERVER['PHP_SELF'] == '/index.php/login' || $_SERVER['PHP_SELF'] == '/index.php/register'){
        echo'<link rel="stylesheet" href="views/style/login_s.css"/>';
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
         <img src="http://localhost/Shopy-net/src/views/images/homekevinDownloadsshopping-cart-removebg-preview.png"
         style="width:41%" id="Shopy_net_logo"/>
        </div>
        <div class="head_wrapp_menu">
            <form method="GET" action="" class="formul_search_classd">
                <div class="find_srch_product">
                  <input type="text" class="search_box_classic" placeholder="Trouver un produit, un service , un offre"
                  aria-label="Search" id="search_bar"/>
                  <img class="" src="http://localhost/Shopy-net/src/views/images/search.png" style="width:20px; cursor:pointer;
                  padding:0.2rem"/>
                </div>
            </form>
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
            <img class="cart_article_list" src="http://localhost/Shopy-net/src/views/images/shopping-cart.png"
            style="width:23px"/>
            <span class="cart_par_st">cart</span>
        </div>
        <div class="inscription_container_infos">
            <?php 
            
              if(isset($_SESSION['id'])){ 
                echo $_SESSION['id'];
            ?>
            <div>
                <button class="inscr_btn">
                    <a href="/logout">
                 <script>document.write(head_Object[3].logout.name)</script>
                </a>
                </button>
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
