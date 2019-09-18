<?php
  header('Content-type: application/json');

  include 'api.php'; //includo database
  $data1 = [];
  foreach ($data as $key) {
    $data1[] = $key;
  } //creo nuovo array con dati database
  echo json_encode($data);
 ?>
