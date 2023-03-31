<?php 
include_once './views/composent/header.php';
echo 'login page';
?>
<section class="login_page_box_container">
    <form action="http://localhost/Shopy-net/src/views/action/login_auth.php" method="POST" >
     <lable>User mail</lable>
     <input type="text" name="user_email" class="sign_logs_Boxes" id="usr_mailBox"/>
     <label>User Password</label>
     <input type="password" name="user_password" class="sign_logs_Boxes" id="usr_passwrdBox" />
     <button type="submit" name="login" class="log_strtProced">Login</button>
</form>
</section>