<?php
require_once __DIR__.'/db_conn.php';
require_once __DIR__.'/functions.php';
#login authentcation v

if(isset($_POST['login'])){
  $email = $_POST['user_email'];
  $password = $_POST['user_password'];
  
  $error = array();

if(empty_input_login($email , $password) !== false){ 
$error_empty = 'empty fields';
array_push($error,$error_empty);
  header('location: http://localhost:8080/login?error='.$error_empty); 
  exit();
}
if(invalid_pwd($connection, $password) ){
$error_invalidPwd = 'invalid password'; 
array_push($error,$error_invalidPwd); 
 header('location: http://localhost:8080/login?error='.$error_invalidPwd); 
 exit(); 
}


}
?>