<?php
if(session_status() == PHP_SESSION_NONE)
session_start();

include_once __DIR__.'/admin_component/header.php';



?>
<body>
<?= '<h1> admin place</h1>';?>
</body>
<?php 
include_once __DIR__.'/admin_component/footer.php';