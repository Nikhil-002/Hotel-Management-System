<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
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
        <h1><b>Show Reservation</b></h1>
        <input type="text" placeholder="Enter Customer-Id " />
        <button class="btn">Submit</button>
      </form>
    </div>
</body>
</html>