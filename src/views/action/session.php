<?php 
require_once __DIR__.'/functions.php';
$session_stat = session_status();
if($session_stat == 1)
 session_start(); 

// var_dump($_SESSION); 
// Echo $_SERVER['REQUEST_METHOD'].'</br>';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo logged_user(); 
}
?>