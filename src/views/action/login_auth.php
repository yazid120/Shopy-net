<?php
require_once __DIR__.'/db_conn.php';
require_once __DIR__.'/functions.php';
#login authentcation v

if(isset($_POST['login'])){
  $email = $_POST['user_email'];
  $password = $_POST['user_password'];

if(empty_input_login($email , $password)){ 
$error_empty = 'empty input fields';
  header('location: http://localhost:8080/login?error='.$error_empty); 
  exit();
}

}
?>