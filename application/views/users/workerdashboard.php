<h2>Current Reservations</h2>
<table>
<?php

foreach ($reservations as $reservation):


endforeach;

?>
</table>
<br /><br /><br />

<h2>Current Inventory</h2>
<table>
  <tr><td>Category</td><td>Item</td><td>Serial</td><td>Accessories</td></tr>
<?php

  foreach ($items as $item):
    echo "<tr><td>{$item->cattitle}</td>";
    echo "<td>".anchor("inventory/checkout/{$item->id}", $item->description, ['title'=>"click to checkout this item"])."</td>";
    echo "<td>{$item->serial}</td>";
    echo "<td>{$item->accessories}</td>";
    echo "</tr>";
  endforeach;

?>
</table>
<br /><br /><br />
