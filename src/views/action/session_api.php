<?php 
require_once __DIR__.'/functions.php';
require_once '../config.php';
$session_stat = session_status();
if($session_stat == 1)
 session_start(); 

//Request method
$method = REQUEST_METHOD; 

switch($method){
    case'GET':
    if(logged_user() !== true){
      echo json_encode('session user not logged');
    }else{
      echo json_encode('logged user'); 
    }
}
?>