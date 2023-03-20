<?php 
define('APP_NAME','Shopy_net'); 
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

</head>
<body>
    <script>
let head_Object =[
    {name :'home',id:'mod_home', class:'list_navigation_Module'},
    {name :'article',id:'mod_article', class:'list_navigation_Module'},
    {name :'contact',id:'mod_contact', class:'list_navigation_Module'},
    {name :'about',id:'mod_about', class:'list_navigation_Module'},
    {name :'infos',id:'mod_infos', class:'list_navigation_Module'},
];
</script>
    <nav class="menu_navigation">
        <div class="logo_main">
         <img src="http://localhost/Shopy-net/src/views/images/homekevinDownloadsshopping-cart-removebg-preview.png"/>
        </div>
        <div>
            <ul>
                <li> 
                    <a href="/"> 
                    <script>document.write(head_Object[0].name)</script>
                   </a>
               </li>
                <li> 
                    <a href="/article"> 
                        <script>document.write(head_Object[1].name)</script> 
                    </a>
                </li>
                <li> 
                    <a href="/contact">
                        <script>document.write(head_Object[2].name)</script>
                    </a>
                </li>
                <li> 
                    <a href="/about"> 
                        <script>document.write(head_Object[3].name)</script>
                    </a>
                </li>
                <li> 
                    <a href="/infos"> 
                        <script>document.write(head_Object[4].name)</script>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <script>console.log(head_Object[0].name);</script>
