<?php 
$session_stat = session_status();
if($session_stat == PHP_SESSION_NONE)
session_start(); 

require_once __DIR__.'/functions.php';
require_once __DIR__.'/db_conn.php';
require_once '../Config/config.php';


echo $session_stat;
 
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