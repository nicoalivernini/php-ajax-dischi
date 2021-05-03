<?php
  include __DIR__.'/dati.php';
 ?>
<?php
header('Content-Type: application/json');

echo json_encode($database);
 ?>
