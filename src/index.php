<?php
if(session_status() == PHP_SESSION_NONE)
session_start();
require_once __DIR__ .'/router.php';
require_once __DIR__ .'/install.php';

$uri = REQUEST_URI; 
$router = new Router();

$router->add('/' ,function(){
  require __DIR__. '/views/home.php';
});

$router->add('/register' ,function(){
  if(!isset($_SESSION['logged'])){

      require __DIR__ .'/views/register.php';
  }else{
    require __DIR__ .'/views/inauth_page.php';
  }
});

$router->add('/login', function(){
  if(!isset($_SESSION['logged'])){
    require __DIR__ .'/views/login.php';
  }else{
    require __DIR__ .'/views/inauth_page.php';
  }
});

$router->add('/Privacy', function(){
  require __DIR__ .'/views/privacy_policy.php';
});

$router->add('/logout', function(){
    require __DIR__ .'/views/logout.php';
}); 

$router->add('/infos',function(){
    require __DIR__ .'/views/infos.php';
}); 

$router->add('/contact',function(){
  require __DIR__ .'/views/contact.php'; 
}); 

// Protected route (client side routes)
$router->add('/profile',function(){
  if(isset($_SESSION['logged'])){
   if($_SESSION['logged'] == true){
    require __DIR__ .'/views/profile.php';
   }
}else{
   require __DIR__ .'/views/inauth_page.php';
}
});

//settings route
$router->add('/profile/settings', function(){
 if(isset($_SESSION['logged'])){
  if($_SESSION['logged'] == true){
    require __DIR__ .'/views/settings.php';
  }}else{
   require __DIR__ .'/views/inauth_page.php';
}
}); 


//Admin route
$router->add('/admin',function(){
  if(isset($_SESSION['logged'])){
  if($_SESSION['logged'] == true){
  require __DIR__.'/views/admin/admin.php';
}}else{
  require __DIR__ .'/views/inauth_page.php';
}
});

$router->add('/admin/client_managment',function(){
  if(isset($_SESSION['logged'])){
    if($_SESSION['logged'] == true){
    require __DIR__.'/views/admin/client_managment.php';
  }}else{
    require __DIR__ .'/views/inauth_page.php';
  }
  
});

$router->add('/admin/product_managment',function(){
  if(isset($_SESSION['logged'])){
    if($_SESSION['logged'] == true){
     require __DIR__.'/views/admin/product_managment.php';
  }}else{
    require __DIR__ .'/views/inauth_page.php';
  }
  
});

$router->add('/admin/product_list',function(){
  if(isset($_SESSION['logged'])){
    if($_SESSION['logged'] == true){
    require_once __DIR__.'/views/admin/Product_list.php'; 
  }}else{
    require __DIR__ .'/views/inauth_page.php';
  }
  
});

$router->add('/admin/client_list',function(){
  if(isset($_SESSION['logged'])){
    if($_SESSION['logged'] == true){
     require_once __DIR__.'/views/admin/Client_list.php';
  }}else{
    require __DIR__ .'/views/inauth_page.php';
  }
   
}); 


$router->add('/checkout',function(){
    require __DIR__ .'/views/payement.php';
}); 

$router->resolve();


?>