<?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'hoteldb';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error) {

      var_dump('error');
      var_dump($conn);
      die();
    }


    $query = "SELECT status, price, id
              FROM pagamenti
              WHERE id >= 100
            ";
    $res = $conn -> query($query);

    if (!$res) {
        var_dump('error');
      }

    if ($res && $res -> num_rows > 0) {
      $data = [];

      while($row = $res -> fetch_assoc()) {
          $data[] = [
              'status' => $row['status'],
              'price' => $row['price'],
              'id' => $row['id']
            ];

      }

    }


    $conn->close();

?>
