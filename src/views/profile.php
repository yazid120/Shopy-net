<?php 
if(session_status() == PHP_SESSION_NONE)
session_start();   

include_once './views/composent/header.php';
?>
<body>
    <?='<h1>Profile page</h1>'?>
    <section class="profile_page_wrappe_conatainer max-w-auto p-2">
        <div class="list_wrapp_infos_profile grid gap-4 grid-cols-3 grid-rows-3">
            <div class="item_profile p-3 bg-white">
                <p>account infos</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/settings-profile.png"/>
                <span>Edit name, mobile number, email, and password (all account inforamation)</span>
            </div>
            <div class="item_profile p-3 bg-white">
                <p>help Customer</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/customer-service.png"/>
                <span>Browse self service options, help articles or contact us</span>
            </div>
            <div class="item_profile p-3 bg-white">
                <p>login & Security</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/login-security.png"/>
            </div>
            <div class="item_profile p-3 bg-white">
                <p>Orders & Product</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/new-message.png"/>
            </div>
            <div class="item_profile p-3 bg-white">
                <p>Your Messages</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/booking.png"/>
            </div>
            <div class="item_profile p-3 bg-white">
                <p>Primium</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/crown.png"/>
            </div>
        </div>
    </section>
</body>