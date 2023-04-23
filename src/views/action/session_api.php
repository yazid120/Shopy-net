<?php 
require_once __DIR__.'/functions.php';
require_once '../Config/config.php';
$session_stat = session_status();
if($session_stat == PHP_SESSION_NONE)
 session_start(); 

//Request method
$method = REQUEST_METHOD; 

switch($method){
    case'GET':
      echo logged_user(); 
      var_dump($_SESSION);
      //echo $_SESSION['id'];
    // if(logged_user() !== true){
    //   echo json_encode('session user not logged');
    // }else{
    //   echo json_encode('logged user'); 
    // }
}
?>