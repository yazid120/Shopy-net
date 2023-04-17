<?php  
require './db_conn.php';
#partie function contient les script php du site

function empty_inputs($userName,$email,$gender,$password){
    $return_result = false; 
    if(empty($userName) || empty($email) || empty($gender) || empty($password)){ 
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

function user_infosExistense($connection,$email){
  $sql ="SELECT * FROM `users` WHERE user_name = ? OR email = ?;"; 
  $stmt = mysqli_stmt_init($connection);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    return 'Error: Technical error statement'; 
    exit(); 
  }
  mysqli_stmt_bind_param($stmt,'ss',$email,$email); 
  mysqli_stmt_execute($stmt); 
  
  #get data (user) if exists
  $user_data = mysqli_stmt_get_result($stmt); 
  if($row = mysqli_fetch_assoc($user_data)){
    return $row; 
  }else{
    $return_result = false; 
    return $return_result; 
  }
  #close statement connexion
  mysqli_stmt_close($connection); 

} 

function Create_user($connection,$name,$email,$sexe,$password){
    $success_message= 'user created successfuly'; 
    $sql ="INSERT INTO `users`(user_name,email,gender,password) VALUES(?,?,?,?) ;"; 
    $stmt = mysqli_stmt_init($connection); 
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header('location: http://localhost:8080/register?error=Error_Technical_error_Statement'); 
      exit(); 
    }
     #Hashing password
    $hashed_pwd = password_hash($password,PASSWORD_DEFAULT); 
    
    mysqli_stmt_bind_param($stmt,'ssss',$name,$email,$sexe,$hashed_pwd); 
    mysqli_stmt_execute($stmt); 
    mysqli_stmt_close($stmt); 
    #redirect user to login page once created
    header('location: http://localhost:8080/login?success='.$success_message); 
    exit(); 
}




/*** Login function ***/
function empty_input_login($username,$password){
    $return_result = false; 
    if(empty($username) || empty($password)){
        $return_result = true;
    }else{
        $return_result = false;
    }
    return $return_result;
}

function invalid_email_add($connection, $email){
    $return_result =false; 
    $input_infos_result = user_infosExistense($connection,$email,$email); 

    if($input_infos_result == false){ 
        return 'Error: invalid email address';
    }
    $email_result = $input_infos_result['email']; 
    if($email_result !== $email){
       $return_result = true;
    }else{
        $return_result = false; 
    }
    return $return_result; 
}

function login_user($connection,$email,$password){
    $return_result =false; 
    $user_inputs_infos = user_infosExistense($connection,$email,$email);
    if($user_inputs_infos === false){
      header('location: http://localhost:8080/login?error=invalid_user_infos_submited !!');
      exit();
    }
    $hashed_pwd = $user_inputs_infos['password']; 
    $verify_pwd = password_verify($password,$hashed_pwd); 
    if($verify_pwd === false){
      header('location: http://localhost:8080/login?error=invalid_password !!'); 
      exit();
    }
    if($verify_pwd === true){ 
     /*if(session_status() == 1)
     @session_start();*/
    session_start();
    $_SESSION['id'] = $user_inputs_infos['id'];
    $_SESSION['email'] = $user_inputs_infos['email']; 
    $_SESSION['password'] = $user_inputs_infos['password'];

    #redirect to profile page (once successful logged in)
    //var_dump($_SESSION); 
    $success_login = 'user logged in successfuly';
    header('location: http://localhost:8080/profile?success='.$success_login); 
    exit();
    }
}

function logged_user($id){ 
    $id = $_SESSION['id']; 
    if($_SESSION['id']){
      $return_result = false; 
    }else{ 
      $return_result = true; 
    }
    return $return_result; 
}

 //echo $input_infos_result; 
    /*$sql="SELECT password FROM `users` WHERE email = ? ;"; 
    $stmt = mysqli_stmt_init($connection); 
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header('location: http://localhost:8080/login?error=Technical_error');
       exit();
    }
    mysqli_stmt_bind_param($stmt,'ss',$password,$email); 
    mysqli_stmt_execute($stmt); 
    
    $result_pwd = mysqli_stmt_get_result($stmt); 
    var_dump($result_pwd); 
    var_dump(mysqli_fetch_assoc($result_pwd)); 
    if($row = mysqli_fetch_assoc($result_pwd)){
        $pwd_getted = $row; 
    }

    if($pwd_getted == $password){ 
        $return_result = false; 
    }else{
        $result_pwd = true; 
    }
    echo $return_result; */
   // mysqli_stmt_close($connection); 
?> 