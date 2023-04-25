<?php 
if(session_status() == PHP_SESSION_NONE)
session_start(); 

require_once __DIR__.'/db_conn.php';
require_once '../Config/config.php';
$method_request = REQUEST_METHOD; 
switch($method_request){
    case'GET':
        $sql = "SELECT `name_prod` FROM `product`"; 
        
}
?>