<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1>Added</h1> 
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
        <h1><b>Adding Customer</b></h1>
        <input type="text" placeholder="First Name " />
        <input type="text" placeholder="Last Name" />
        <input type="date" name="date" id="date" placeholder="Enter your D.O.B.">
        <input type="phone" placeholder="Enter Phone no." />
        <button class="btn">Submit</button>
      </form>
    </div>
</body>
</html>