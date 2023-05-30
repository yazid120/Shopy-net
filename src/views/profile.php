<?php 
if(session_status() == PHP_SESSION_NONE)
session_start();   

include_once './views/composent/header.php';
?>
<body>
    
    <section class="profile_page_wrappe_conatainer max-w-auto p-2">
        <h1>Profile page</h1>
        <div class="list_wrapp_infos_profile grid gap-4 grid-cols-3 grid-rows-3 p-5">
            <div class="item_profile p-5 bg-white rounded cursor-pointer hover:bg-violet-600
            border-solid border-2 border-gray-400">
                <p class="text-lg">Account infos</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/settings-profile.png"/>
                <span>Edit name, mobile number, email, and password (all account inforamation)</span>
            </div>
            <div class="item_profile p-5 bg-white rounded cursor-pointer border-solid border-2 border-gray-400">
                <p class="text-lg">Help Customer</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/customer-service.png"/>
                <span>Browse self service options, help articles or contact us</span>
            </div>
            <div class="item_profile p-5 bg-white rounded cursor-pointer border-solid border-2 border-gray-400">
                <p class="text-lg">login & Security</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/login-security.png"/>
                <span>manage your sensitive account info and add a layer of security to your account</span>
            </div>
            <div class="item_profile p-5 bg-white rounded cursor-pointer border-solid border-2 border-gray-400">
                <p class="text-lg">Orders & Product</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/booking.png"/>
                <span>Start tracking all your orders, and latest product, and create your wishlist</span>
            </div>
            <div class="item_profile p-5 bg-white rounded cursor-pointer border-solid border-2 border-gray-400">
                <p class="text-lg">Your Messages</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/new-message.png"/>
                <span>View any response message from Customers or Sellers</span>
            </div>
            <div class="item_profile p-5 bg-white rounded cursor-pointer border-solid border-2 border-gray-400">
                <p class="text-lg">Primium Membership</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/crown.png"/>
                <span>Manage your membership, view benefits, and get your premium now ..</span>
            </div>
            <div class="item_profile p-5 bg-white rounded cursor-pointer border-solid border-2 border-gray-400">
                <p class="text-lg">Payment methods</p>
                <img class="" src="http://localhost/Shopy-net/src/views/images/profile/secure-payment.png"/>
                <span>View all transactions, manage payment methods and settings</span>
            </div>
        </div>
    </section>
</body>
<?php 
include_once __DIR__.'/composent/footer.php';