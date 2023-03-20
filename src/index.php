<?php 
require_once __DIR__ .'/router.php';
require_once __DIR__ .'/install.php';

$uri = REQUEST_URI; 
$router = new Router();

$router->add('/' ,function(){
    include_once './views/composent/header.php';
  require __DIR__. '/views/home.php';
    include_once './views/composent/footer.php';
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

$router->add('/about',function(){
    require __DIR__ .'/views/about.php';
}); 

$router->resolve();


?>