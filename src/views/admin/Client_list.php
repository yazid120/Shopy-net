<?php 
require_once __DIR__.'/../action/Db_Class_conn.php';
include_once __DIR__.'/../action/adminDisplayClass.php';

$Db_Object = new Db_connect();
$connection = $Db_Object ->connect();

$admin_Object = new adminDisplay($connection); 
$user_Display = $admin_Object->DisplayUSER($connection); 
$user_array = (json_decode($user_Display, true));
var_dump($user_array); 
?> 
<body>
  <h2>list des Clients</h2>
<div class="client_display_Object"> 
<table border="1">
<thead>
    <th>id</th>
    <th>nom</th>
</thead>
<tbody>
<?php 
 echo count($user_array);
$i= 0;
for($i= 0; $i<count($user_array); $i++):
?>
<tr>
  <?='<td>'.$user_array[$i]['id'].'<td>';?>
  <?= '<td>'.$user_array[$i]['user_name'].'<td>';?>
</tr>
<?php endfor;?> 
</tbody>
</table>


</div>
</body>