<?php 
include_once './views/composent/header.php';
echo 'register page';

?>
<section class="login_page_box_container">
    <form action="" method="POST">
     <label>User name</label>
     <input type="text" name=""/>

     <lable>User mail</lable>
     <input type="text" name="user_email" class="sign_logs_Boxes" id="usr_mailBox"/>

     <label>sexe</label>
     <label>homme</label>
     <input type="radio" name="sex_homme" value="homme" />

     <label>femme</label>
     <input type="radio" name="sex_femme" value="femme" />

     <label>User Password</label>
     <input type="password" name="user_password" class="sign_logs_Boxes" id="usr_passwrdBox" />
     <button type="submit" class="log_strtProced">register</button>
</form>
</section>