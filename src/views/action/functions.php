<?php  
// require './db_conn.php';
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



function UserRoleCreation($connection,$id,$email){ 
  $role_user = ''; 
  $user_inputs_infos = user_infosExistense($connection,$email,$email);
  if($user_inputs_infos['email'] == 'yazid.ziad2000@gmail.com'){
   $role_user = 'admin';
  }else{
    $role_user = 'client';
  }
  $sql="INSERT INTO `user_role`(id_user,role) VALUES(?,?);";
  $stmt = mysqli_stmt_init($connection); 

  if(!mysqli_stmt_prepare($stmt,$sql)){
    header('location: http://localhost:8080/register?error=Error_Technical_error_Statement'); 
    exit(); 
  }
  mysqli_stmt_bind_param($stmt,'ss',$id,$role_user); 
  mysqli_stmt_execute($stmt); 
   
} 

function UserRoleSelection($connection){
    $sql ='SELECT `role` FROM users JOIN user_role ON `users`.`id` = `user_role`.`id_user`'; 
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
    $id= mysqli_insert_id($connection);

    #create role user
    UserRoleCreation($connection,$id,$email); 

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

function role_user($connection, $email){
  $sql = "SELECT `role` FROM `user_info` WHERE `email` = '$email'";
  $query_role = mysqli_query($connection,$sql); 
  if($query_role){
   
    while($row = mysqli_fetch_assoc($query_role)){
      return $row; 
    }
  }else{
    return false; 
  }
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
    // set role user
      $role_assoc = role_user($connection, $email); 
     
    if(session_status() == PHP_SESSION_NONE)
     session_start();
    $_SESSION['id'] = $user_inputs_infos['id'];
    $_SESSION['user_name'] = $user_inputs_infos['user_name'];
    $_SESSION['email'] = $user_inputs_infos['email']; 
    $_SESSION['password'] = $user_inputs_infos['password'];
    $_SESSION['role_user'] = $role_assoc['role'];
    $_SESSION['logged'] = true; 

    #redirect to profile page (once successful logged in)
    // $success_login = 'user logged in successfuly';
    if($role_assoc['role'] === 'admin'){
      header('location: http://localhost:8080/admin'); 
      exit(); 
    }
  
    header('location: http://localhost:8080/profile'); 
    exit();
    }
}
//session based function
function logged_user(){ 
    if(session_status() == PHP_SESSION_NONE)
    session_start(); 
    
   if(isset($_SESSION)){
     if($_SESSION['logged'] != null){
      $return_result = true; 
     }else{ 
      $return_result = false; 
     }
    }
    return $return_result; 
}

function empty_product($name,$code,$description,$price,$quantity){
  $return_result = true; 
 if(empty($name)|| empty($code) || empty($description) || empty($price)|| empty($quantity)){
  $return_result = false; 
 }
 else{
  $return_result = true;
 }
 return $return_result; 
}

function get_cateagorieProductName($connection,$id_cat_prod){
  $sql = "SELECT `cat_prod_name` FROM `product` WHERE `id_cat_prod` = '$id_cat_prod'"; 
  $result_cat_prod = mysqli_query($connection,$sql);
  $fetch_result = mysqli_fetch_assoc($result_cat_prod);
  while($result = $fetch_result){
    return $result; 
  }
}
function AddProduct($connection,$id_cat_prod,$code_prod,$cat_prod_name,$name,$description,$price,$Image,$quantity){
 $sql="INSERT INTO `product`(id_cat_prod,code_prod,cat_prod_name,name_prod,description,price_unit,image_ur,quantity) 
 VALUES('$id_cat_prod','$code_prod','$cat_prod_name','$name','$description','$price','$Image','$quantity');";
 $query = mysqli_query($connection,$sql);
 if($query){
  header('location: http://localhost:8080/admin/product_managment?success=product_added_successfuly');
  exit(); 
 }
}
function Upload_product_image($product_name,$tmp_name){
  $folder = $_SERVER['DOCUMENT_ROOT'].'/Shopy-net/src/views/images/'.$product_name;
    if(move_uploaded_file($tmp_name,$folder)){
        return true; 
    }else{
        echo false; 
    }
}

function Delete_user($connection,$email){
 $sql="DELETE FROM `users` WHERE `users`.`email`='$email'";
 if(mysqli_query($connection,$sql)){
  return true; 
 }else{
  return false; 
 }
}
function Delete_product($connection,$code_produit){
  $sql="DELETE FROM `product` WHERE `product`.`code_prod`='$code_produit'";
 if(mysqli_query($connection,$sql)){
  return true; 
 }else{
  return false; 
 }
}

?> 