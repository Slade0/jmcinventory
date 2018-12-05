<h2>Current Reservations</h2>
<table>
<?php

foreach ($reservations as $reservation):


endforeach;

?>
</table>

<h2>Past Reservations</h2>
<table>
<?php

foreach ($reservations as $reservation):


endforeach;

?>
</table>

<a name="inventory"><h2>Inventory</h2></a>
<?php echo anchor("inventory/add", "Add item"); ?>
<!-- <?php echo anchor("inventory/import", "Import"); ?>  Commented out b/c we don't want to import on a regular basis -->
<table>
  <tr><th>Category</th><th>Serial</th><th>Name</th><th>Accessories</th><th>QR Code for Checkin/Checkout</th><th>Admin</th></tr>
<?php
foreach ($items as $item):
    echo "<tr><td>{$item->cattitle}</td>";
    echo "<td>".anchor("inventory/edit/{$item->id}", $item->serial?$item->serial:'N/A')."</td>";
    echo "<td>{$item->description}</td>";
    echo "<td>{$item->accessories}</td>";
    echo "<td style='text-align:center'>".anchor("inventory/qrcode/{$item->id}/1", "print qrcode", ['title'=>"print qrcode"])."</td>";
    echo "<td>".
       anchor("inventory/edit/{$item->id}", img("assets/img/pencil.png"), ['title'=>'edit']). '&nbsp;' .
       anchor("inventory/delete/{$item->id}", img("assets/img/redx.gif"), ['title'=>'delete','onclick'=>"return confirm('Are you sure you want to delete this item?');"]).
       "</td>";
    echo "</tr>";

endforeach;
?>
</table>

<a name="users"><h2>Users</h2></a>
<a href="users/adminadd">Add user</a>
<table style="margin:0 auto">
<?php
foreach ($users as $user):
    echo "<tr><td>{$user->email}</td><td>{$user->role_id}</td><td>{$user->created}</td></tr>";
endforeach;
?>
</table>
<br /><br /><br />
