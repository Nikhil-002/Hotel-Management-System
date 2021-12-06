<?php

  $username = "root";
  $server = "localhost";
  $password = "";

  $con = mysqli_connect($server,$username, $password);

  if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Management</title>
    
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar">
      <a class="navbar-brand" href="#"> HOTEL MANAGEMENT</a>
      <ul class="list-non-bullet nav-pills">
        <li class="list-item-inline">
          <a class="link link-active" href="./">Book Room</a>
        </li>
        <li class="list-item-inline">
          <a class="link" href="./AddCustomer.php">Add Customer</a>
        </li>
        <li class="list-item-inline">
          <a class="link" href="./Rooms.php">Rooms</a>
        </li>
        <li class="list-item-inline">
          <a class="link" href="./Transactions.php">Reservations</a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <form action="index.php">
        <h1><b>Book Room</b></h1>
        <input type="int" placeholder="Enter Customer-Id " />
        <input type="int" placeholder="Enter Reception-Id" />
        <select class="dropdown" aria-label="Transaction Mode">
          <option selected>Transaction Mode</option>
          <option value="Net Banking">Net Banking</option>
          <option value="Credit Card">Credit Card</option>
          <option value="Debit Card">Debit Card</option>
          <option value="Cash">Cash</option>
        </select>
        <input type="int" placeholder="Amount" />
        <button class="btn">Submit</button>
      </form>
    </div>
  </body>
</html>
