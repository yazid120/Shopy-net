<?php 

//var_dump($_SERVER);

$uri = $_SERVER['REQUEST_URI']; 
if($uri == '/'){
    require __DIR__. '/src/views/home.php';
}
else if($uri == '/login'){
    require './src/views/login.php';
}
?>