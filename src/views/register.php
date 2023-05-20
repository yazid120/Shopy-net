<?php 
include_once './views/composent/header.php';
echo '<h1 class="rest_top_elementCent">register</h1>';

?>

<section class="login_page_box_container">
    <div class="local_wrapp_iconMain">
    <img class="simple_icon_login" src="http://localhost/Shopy-net/src/views/images/4957136_4957136.jpg"
    style="width:32%; position:absolute;z-index:1; opacity:0.9; left: 0; "/>
</div>
    <form action="http://localhost/Shopy-net/src/views/action/sign_up_auth.php" method="POST" 
        class="form_login_nd_registration">
      <div>
        <span>Creat votre compte Shopy net</span>
      </div>
    <div class="error_success_wrapp_handle">
    <?php 
    if(isset($_GET['error'])){
        if($_GET['error'] == 'empty fields'){
          echo'<div class="error_log_section">Error: empty fields !!</div>';
        }
        else if($_GET['error'] == 'invalid user name'){
          echo'<div class="error_log_section">Error: invalid user name</div>';
        }
        else if($_GET['error'] == 'invalid email addr'){
          echo'<div class="error_log_section">Error: invalid email address</div>';
        }
        else if($_GET['error'] == 'password not matched'){
            echo'<div class="error_log_section">Error: Password submited not matched</div>';
        }
        else if($_GET['error'] == 'User already exists'){
          echo '<div class="error_log_section">Error: User already exists</div>';
        }
    }

    ?>
    </div>
    <div>
     <label for="user_name" class="lab_form">Full name</label>
     <input type="text" name="user_name" class="sign_logs_Boxes"/>

     <label for="user_email" class="lab_form">Email</label>
     <input type="text" name="user_email" class="sign_logs_Boxes" id="usr_mailBox"/>
    </div>
     <label for="sexe" class="lab_form">sexe</label>
     <div>
     <label>homme</label>
     <input type="radio" name="sexe" value="homme" />

     <label>femme</label>
     <input type="radio" name="sexe" value="femme" />
     </div>

     <label for="user_password" class="lab_form">User Password</label>
     <input type="password" name="user_password" class="sign_logs_Boxes" id="usr_passwrdBox" />

     <label for="repassword" class="lab_form">re-Password</label>
     <input type="password" name="repassword" class="sign_logs_Boxes" id="usr_repassword" />

     <div>
      <div>
        <input type="checkbox" name=""/>
        <span>
        Get emails from Stripe about product updates, industry news, and events. </br>If you change your mind, 
        you can unsubscribe at any time. Privacy Policy
        </span>
      </div>
     </div>
     <button type="submit" class="log_strtProced" name="submit">register</button>
     <div class="already_have_acc">
       <p > already have an account ?<a href="/login"> Sign in</a></p>
    </div>
</form>
</section>
<?php 
include_once './views/composent/footer.php';
?>