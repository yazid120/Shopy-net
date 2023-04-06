<?php

use Symfony\Component\VarDumper\VarDumper;

require_once './db_conn.php';
require_once './functions.php';
#sign_up authentcation v 

if(isset( $_POST['signin'])){
    $name = $_POST['user_name']; 
    $email = $_POST['user_email']; 
    $sexe = $_POST['sexe']; 
    $password = $_POST['user_password']; 
    $repassword = $_POST['repassword']; 
    //errors array 
    $error = array(); 

    if(empty_inputs($name,$email,$sexe,$password,$repassword) !== false){
    $empty_inpt_err= 'empty fields'; 
     array_push($error,$empty_inpt_err); 
      header('location: http://localhost:8080/register?error='.$error[0]); 
      exit();
    }
    else if(invalid_userName($name) !== false){
    $Invalid_name = 'invalid user name'; 
      array_push($error,$Invalid_name); 
       header('location: http://localhost:8080/register?error='.$error[0]); 
       exit();
    }
    else if(invalid_email($email) !== false){
     $invalid_mail = 'invalid email addr';
     array_push($error,$invalid_mail); 
     header('location: http://localhost:8080/register?error='.$error[0]); 
     exit();
    }

    if(count($error) <=0){
        //create_user($connection,$name,email,$sexe,$password)
    }

}

?>