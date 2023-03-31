<?php 
require './db_conn.php';
#partie function contient les script php du site

function empty_inputs($userName,$email,$gender,$password){
    $return_result = false; 
    if(empty($userName) || empty($email) || empty($gender) || $password){ 
     $return_result = true; 
    }else{
        $return_result = false;
    }
    return $return_result;
}
function invalid_userName($userName){
    $return_result = false; 
    if(!preg_match('/^[a-zA-Z0-9]*$/',$userName)){
        $return_result = true;
    }else{
        $return_result = false; 
    }
    return $return_result;
}
function invalid_email($email){
    $return_result = false; 
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $return_result = true;
    }else{
        $return_result = false;
    }
    return $return_result;
}
function inmatched_password($password,$repassword){
    $return_result = false; 
    if($password !== $repassword){
        $return_result = true; 
    }else{ 
       $return_result = false;
    }
    return $return_result;
}




/*** Login function ***/
function empty_input_login($username,$password){
    $return_result = false; 
    if(empty($userName) || empty($userName)){
        $return_result = true;
    }else{
        $return_result = false;
    }
    return $return_result;
}
function invalid_pwd($connection){
    $sql="SELECT * FROM `users`"; 

}

?> 