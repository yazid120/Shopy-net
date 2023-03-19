<?php 
require_once __DIR__ .'/router.php';
require_once __DIR__ .'/install.php';

$uri = REQUEST_URI; 


Route::add('/' ,function(){
    include_once './views/composent/header.php';
  require __DIR__. '/views/home.php';
    include_once './views/composent/footer.php';
});

Route::add('/register' ,function(){
    require __DIR__ .'/views/register.php';
});

Route::add('/login', function(){
    require __DIR__ .'/views/login.php';
});

Route::add('/logout', function(){
    require __DIR__ .'/views/logout.php';
}); 

Route::add('/about',function(){
    require __DIR__ .'/views/about.php';
}); 

Route::submit();


?>