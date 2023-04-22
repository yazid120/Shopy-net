<?php 
include_once './views/composent/header.php';
echo '<h1 class="rest_top_elementCent">login</h1>';
?>
<section class="login_page_box_container">
<div class="local_wrapp_iconMain">
    <img class="simple_icon_login" src="http://localhost/Shopy-net/src/views/images/20547283_6310507.jpg"
    style="width:28%; position:absolute;z-index:1; opacity:0.9; left: 0;"/>
</div>
    <form action="http://localhost/Shopy-net/src/views/action/login_auth.php" method="POST" 
        class="form_login_nd_registration log">
    <div class="error_success_wrapp_handle">
    <!-- SUCCESSFUL SUBMITON REDIRECTION login-->
    <?php 
    if(isset($_GET['success'])){
        if($_GET['success'] == 'user created successfuly'){
            echo'<div class="success_sub_element">User created successfuly</div>';
        }
    }
    ?>
    <!-- ERROR HANDLING login-->
    <?php 
    if(isset($_GET['error'])){
        if($_GET['error'] == 'empty fields'){
            echo'<div class="error_log_section">Error: empty fields !!</div>';
        }
        else if($_GET['error'] == 'invalid email address'){ 
            echo'<div class="error_log_section">Error: invalid email address</div>';
        }
        else if($_GET['error'] == 'invalid_user_infos_submited !!'){
            echo'<div class="error_log_section">user infos not valid</div>';
        }
        else if($_GET['error'] == 'invalid_password !!'){ 
            echo'<div class="error_log_section">Error: Wrong password !!</div>';
        }
    }
    ?>
    </div>
     <lable for="user_email" class="lab_form">User email</lable>
     <input type="text" name="user_email" class="sign_logs_Boxes" id="usr_mailBox"/>

     <label for="user_password" class="lab_form">User Password</label>
     <input type="password" name="user_password" class="sign_logs_Boxes" id="usr_passwrdBox" />

     <div>
       <p><a> dont have an account yet !!</a></p>
    </div>
     <button type="submit" name="login" class="log_strtProced">Login</button>
</form>
</section>
<?php 
include_once './views/composent/footer.php';
?>