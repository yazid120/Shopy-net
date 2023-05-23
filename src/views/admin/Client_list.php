<?php 
require_once __DIR__.'/../action/Db_Class_conn.php';
include_once __DIR__.'/../action/adminDisplayClass.php';

$Db_Object = new Db_connect();
$connection = $Db_Object ->connect();

$admin_Object = new adminDisplay($connection); 
$user_Display = $admin_Object->DisplayUSER($connection); 
var_dump($user_Display);
?> 
<body>
  <h2>list des Clients</h2>
<div class="client_display_Object"> 
<table>
<tr>
    <th>id</th>
    <th>nom</th>
    <th>email</th>
    <th>sexe</th>
    <th>pwd</th>
    <th>date incription</th>
</tr>

<?php 
$num_users = count($user_Display); 
$i=0;
while($i< $num_users){
  echo '<tr><td>'.implode($user_Display[$i]).'<td></tr>'; 
  $i++;
}
?> 
 
</table>
</div>
</body>