<?php 
if(session_status() == PHP_SESSION_NONE)
session_start(); 
include_once './views/composent/header.php';
require_once __DIR__.'/action/ClassContact.php';
require_once __DIR__.'/action/Db_Class_conn.php';

if(isset($_POST['Send_Contact'])){
  //Contact validation Object
  $Object_Contact = new Contact($_POST); 
  $errors = $Object_Contact->ValidateForm(); 

  $name = $_POST['name']; 
  $email = $_POST['mail']; 
  $subject = $_POST['subject']; 
  $message = $_POST['message']; 
   
  if(count($errors) <=0){
    $Object_connection = new Db_connect(); 
    $connection = $Object_connection->connect(); 
    try{
      $sql= "INSERT INTO `contact` (`name`,`email`,`subject`,`Message`) VALUES ('$name','$email','$subject','$message')";
      $connection->query($sql);
      echo 'mail sent successfuly'; 
      $connection=null; 
    }catch(PDOException $e){
      die('Error: Contact connection error').$e->getMessage(); 
    }
    
  }
}
?> 
<body>
<div class="listed_box_all_contact">
 <div class="container-con">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      
      
        <!--- - FORM Contact Shopy net - --->
      <form action="" method="POST">
        <label>Name :</label>
        <div class="input-box">
          <input type="text" placeholder="Enter your name" autocomplete="off" tabindex="-1"
          name='name' value="<?php echo $_POST['name']  ?? '';?>">
        </div>
        <div class="error text-red-400 mb-2">
          <?=$errors['name'] ?? ""?>
        </div>

        <label>Email :</label>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" autocomplete="off" tabindex="-1"
          name='mail' value="<?php echo $_POST['mail']  ?? '';?>">
        </div>
        <div class="error text-red-400 mb-2">
          <?=$errors['mail'] ?? ""?>
        </div>

        <label>Subject :</label>
        <div class="input-box">
          <input type="text" placeholder="Enter your Subject" autocomplete="off" tabindex="-1"
          name='subject' value="<?php echo $_POST['subject']  ?? '';?>">
        </div>
        <div class="error text-red-400 mb-2">
          <?=$errors['subject'] ?? ""?>
        </div>

        <label>Message :</label>
        <div class="input-box message-box">
          <textarea name='message' value="<?php echo $_POST['message']  ?? '';?>"></textarea>
        </div>
        <div class="error text-red-400 mb-2">
          <?=$errors['message'] ?? ""?>
        </div>
        <div class="button">
          <input type="submit" value="Send" autocomplete="off" tabindex="-1" name="Send_Contact">
        </div>
      </form>

    </div>
    </div>
  </div>
</div>
</body>

<?php 
include_once './views/composent/footer.php';
?>