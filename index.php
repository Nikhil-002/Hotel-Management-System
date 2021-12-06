<?php

  $username = "root";
  $server = "localhost";
  $password = "";

  $con = mysqli_connect($server,$username, $password);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Management</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar">
      <a class="navbar-brand" href="#"> HOTEL MANAGEMENT</a>
      <ul class="list-non-bullet nav-pills">
        <li class="list-item-inline">
          <a class="link link-active" href="/">Book Room</a>
        </li>
        <li class="list-item-inline">
          <a class="link" href="/AddCustomer.html">Add Customer</a>
        </li>
        <li class="list-item-inline">
          <a class="link" href="/Rooms.html">Rooms</a>
        </li>
        <li class="list-item-inline">
          <a class="link" href="/Transactions.html">Reservations</a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <form action="index.php">
        <h1><b>Book Room</b></h1>
        <input type="text" placeholder="Enter your name " />
        <input type="datetime-local" name="" id="" />
        <!-- <input type="date" name="date" id="date" placeholder="Enter your D.O.B."> -->
        <input type="text" placeholder="Enter your address" />
        <select class="dropdown" aria-label="Select:">
          <option selected>Number of Rooms:</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <input type="phone" placeholder="Enter your Phone no." />
        <input type="email" placeholder="enter your E-mail" />
        <button class="btn">Submit</button>
      </form>
    </div>
  </body>
</html>
