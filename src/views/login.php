<?php 
include_once './views/composent/header.php';
echo '<h1 class="rest_top_elementCent">login</h1>';
?>
<section class="login_page_box_container">
<div class="local_wrapp_iconMain">
    <img class="simple_icon_login" src="http://localhost/Shopy-net/src/views/images/20547283_6310507.jpg"
    style="width:29%"/>
</div>
    <form action="http://localhost/Shopy-net/src/views/action/login_auth.php" method="POST" 
        class="form_login_nd_registration log">
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