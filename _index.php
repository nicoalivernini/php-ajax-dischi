<?php
  include './dati.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Dischi</title>
</head>
<body>

 <?php

  foreach ($database as $key => $value) {
    ?>
    <h2><?= $value['title'] ?></h2>
    <h4><?= $value['author'] ?></h4>
    <span><?= $value['year'] ?></span>
    <span><?= $value['genere'] ?></span>
    <?= $value['poster'] ?>

  <?php } ?>

</body>
</html>
