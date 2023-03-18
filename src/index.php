<?php 
require_once __DIR__ .'/router.php';

Route::add('/' ,function(){
  require __DIR__. '/views/home.php';
});

?>