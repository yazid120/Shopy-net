<?php
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

$router->add('/logout', function(){
    require __DIR__ .'/views/logout.php';
}); 

/*$router->add('/about',function(){
    require __DIR__ .'/views/about.php';
}); */

$router->add('/infos',function(){
    require __DIR__ .'/views/infos.php';
}); 

$router->add('/contact',function(){
  require __DIR__ .'/views/contact.php'; 
}); 

$router->add('/profile',function(){
    require __DIR__ .'/views/profile.php';
});

$router->add('/payement',function(){
    require __DIR__ .'/views/payement.php';
}); 

$router->resolve();


?>