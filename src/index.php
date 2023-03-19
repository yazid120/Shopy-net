<?php 
require_once __DIR__ .'/router.php';


$uri =$_SERVER['REQUEST_URI']; 
ECHO $uri;
if($uri == '/'){
    require __DIR__. '/views/home.php';
}


Route::add('/' ,function(){
  require __DIR__. '/views/home.php';
});

Route::add('/register',function(){
    require __DIR__ .'./views/register.php';
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


?>