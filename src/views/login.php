<?php 
include_once './views/composent/header.php';
echo '<h1>login page</h1>';
?>
<section class="login_page_box_container">
    <form action="http://localhost/Shopy-net/src/views/action/login_auth.php" method="POST" 
        class="form_login_nd_registration">
     <lable>User email</lable>
     <input type="text" name="user_email" class="sign_logs_Boxes" id="usr_mailBox"/>
     <label>User Password</label>
     <input type="password" name="user_password" class="sign_logs_Boxes" id="usr_passwrdBox" />

     <div>
       <p><a> dont have an account yet !!</a></p>
    </div>
     <button type="submit" name="login" class="log_strtProced">Login</button>
</form>
</section>