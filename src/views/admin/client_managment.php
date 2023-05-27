<?php
if(session_status() == PHP_SESSION_NONE)
session_start();

require_once __DIR__.'/../action/Db_Class_conn.php'; 
require_once __DIR__.'/../action/adminDisplayClass.php';

$Db_Object = new Db_connect(); 
$connection_s = $Db_Object->connect(); 

#Recent Customers (Client method)
$Admin_Object = new adminDisplay();
?>

<?php
include_once __DIR__.'/admin_component/header.php';
?>

<body>
<h1 class="text-2xl m-5">client managment</h1>
<table border="1" class="border-collapse border border-slate-500 min-w-full text-center 
text-sm font-light dark:border-neutral-500">
<thead>
  <tr>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">User Id</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">User Name</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">email</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">sexe</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">date inscription</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">user status</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">Ability</th>
  </tr>
</thead>
    <?php 
      echo $Admin_Object->DisplayUSER($connection_s);
    ?>
</table>
</body>