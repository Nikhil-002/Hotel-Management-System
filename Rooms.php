<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hotel_management";
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  $sql = "SELECT * FROM `room`;";
  $result = $conn->query($sql);


  $conn->close();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
      <a class="navbar-brand" href="#"> HOTEL MANAGEMENT</a>
      <ul class="list-non-bullet nav-pills">
        <li class="list-item-inline">
          <a class="link " href="./">Book Room</a>
        </li>
        <li class="list-item-inline">
          <a class="link" href="./AddCustomer.php">Add Customer</a>
        </li>
        <li class="list-item-inline">
          <a class="link link-active" href="./Rooms.php">Rooms</a>
        </li>
        <li class="list-item-inline">
          <a class="link" href="./Transactions.php">Reservations</a>
        </li>
      </ul>
    </nav>
    <div class="container2">
    <h1><b> Rooms</b></h1>
    <table>
      <tr>
    <th>Room Number</th>
    <th>Room Type</th>
    <th>Price</th>
  </tr>
      <?php
      if($result->num_rows>0){
        while($row = $result->fetch_assoc() ){
          echo "<tr>" . "<td>".$row['room_no']."</td>" . "<td>".$row['room_type']."</td>" . "<td>".$row['room_price']."</td>" . "</tr>";
        }
      }else{
        echo "No data to be displayed";
      }
      ?>
    </table>
    </div>
</body>
</html>