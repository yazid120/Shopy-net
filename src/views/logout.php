<?php 
$session_stat = session_status(); 
if($session_stat == 1)
session_start(); 
#destroy session
session_unset();
session_destroy(); 
header('location: /');
?>