<?php 
include_once './views/composent/header.php';
echo '<h1 class="rest_top_elementCent">register</h1>';

?>

<section class="login_page_box_container">
    <div class="local_wrapp_iconMain">
    <img class="simple_icon_login" src="http://localhost/Shopy-net/src/views/images/4957136_4957136.jpg"
    style="width:29%"/>
</div>
    <form action="http://localhost/Shopy-net/src/views/action/sign_up_auth.php" method="POST" 
        class="form_login_nd_registration">
    <div>
     <label>User name</label>
     <input type="text" name="user_name" class="sign_logs_Boxes"/>

     <lable>User email</lable>
     <input type="text" name="user_email" class="sign_logs_Boxes" id="usr_mailBox"/>
    </div>
     <label>sexe</label>
     <div>
     <label>homme</label>
     <input type="radio" name="sexe" value="homme" />

     <label>femme</label>
     <input type="radio" name="sexe" value="femme" />
     </div>

     <label>User Password</label>
     <input type="password" name="user_password" class="sign_logs_Boxes" id="usr_passwrdBox" />

     <label>re-Password</label>
     <input type="password" name="repassword" class="sign_logs_Boxes" id="usr_repassword" />
     <div>
       <p><a> already have an account !!</a></p>
    </div>

     <button type="submit" class="log_strtProced" name="submit">register</button>
</form>
</section>
<?php 
//include_once './views/composent/footer.php';
?>