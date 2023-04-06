<?php 
include_once './views/composent/header.php';
echo 'register page';

?>
<section class="login_page_box_container">
    <form action="http://localhost/Shopy-net/src/views/action/sign_up_auth.php" method="POST" 
        class="form_login_nd_registration">
     <label>User name</label>
     <input type="text" name="user_name"/>

     <lable>User mail</lable>
     <input type="text" name="user_email" class="sign_logs_Boxes" id="usr_mailBox"/>

     <label>sexe</label>
     <div>
     <label>homme</label>
     <input type="radio" name="sexe" value="homme" />

     <label>femme</label>
     <input type="radio" name="sexe" value="femme" />
     </div>

     <label>User Password</label>
     <input type="password" name="user_password" class="sign_logs_Boxes" id="usr_passwrdBox" />

     <label>re-password</label>
     <input type="password" name="repassword" class="sign_logs_Boxes" id="usr_repassword" />

     <button type="submit" class="log_strtProced" name="signin">register</button>
</form>
</section>