<?php 
if(session_status() == PHP_SESSION_NONE)
session_start();   
function profile_set(){
    if($_SESSION['id'] != null){
        //echo 'user alllowed profile'; 
    }else{
        //echo 'user not allowed profile'; 
    }
}
profile_set(); 
include_once './views/composent/header.php';


?>
<body>
    <?='<h1>Profile page</h1>'?>
</body>