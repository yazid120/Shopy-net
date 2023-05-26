<?php 
if(session_status() == PHP_SESSION_NONE)
session_start(); 
include_once './views/composent/header.php';

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
        <form action="/contact" method="POST">
        <label>Name :</label>
        <div class="input-box">
          <input type="text" placeholder="Enter your name" autocomplete="off" tabindex="-1">
        </div>
        <label>Email :</label>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" autocomplete="off" tabindex="-1">
        </div>
        <label>Subject :</label>
        <div class="input-box">
          <input type="text" placeholder="Enter your Subject" autocomplete="off" tabindex="-1">
        </div>
        <label>Message :</label>
        <div class="input-box message-box">
          <textarea></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Send" autocomplete="off" tabindex="-1">
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