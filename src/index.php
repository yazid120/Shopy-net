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
    require __DIR__ .'/views/register.php';
});

$router->add('/login', function(){
    require __DIR__ .'/views/login.php';
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
 if(count($_SESSION) !== 0){
   if($_SESSION['logged'] == true){
    require __DIR__ .'/views/profile.php';
   }
}else{
   require __DIR__ .'/views/inauth_page.php';
}
});


//Admin route
$router->add('/admin',function(){
  require __DIR__.'/views/admin/admin.php';
});

$router->add('/admin/client_managment',function(){
  require __DIR__.'/views/admin/client_managment.php';
});

$router->add('/admin/product_managment',function(){
  require __DIR__.'/views/admin/product_managment.php';
});

$router->add('/admin/product_list',function(){
  require_once __DIR__.'/views/admin/Product_list.php'; 
});

$router->add('/admin/client_list',function(){
  require_once __DIR__.'/views/admin/Client_list.php'; 
}); 


$router->add('/checkout',function(){
    require __DIR__ .'/views/payement.php';
}); 

$router->resolve();


?>