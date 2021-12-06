<?php
$showTable = false;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$cust_id = 0;

if($_SERVER["REQUEST_METHOD"]=="POST"){
  // $sql = "SELECT * FROM `transactions` WHERE cust_id =" . $_POST["cust_id"] . ";" ; 
  $cust_id = $_POST['cust_id'];
  $showTable = true;
}
$sql = "SELECT * FROM `transactions`;" ; 
$result = $conn->query($sql);
$conn->close();
?>

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
          <a class="link " href="./">Book Room</a>
        </li>
        <li class="list-item-inline">
          <a class="link" href="./AddCustomer.php">Add Customer</a>
        </li>
        <li class="list-item-inline">
          <a class="link " href="./Rooms.php">Rooms</a>
        </li>
        <li class="list-item-inline">
          <a class="link link-active" href="./Transactions.php">Reservations</a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <form action="Transactions.php" method="post">
        <h1><b>Show Reservation</b></h1>
        <input id="cust_id" name="cust_id" type="text" placeholder="Enter Customer-Id " />
        <button class="btn">Submit</button>
      </form>
      <table>
      <tr>
    <th>Transaction Id</th>
    <th>Transaction Type</th>
    <th>Reservation Date</th>
    <th>Amount Paid</th>
  </tr>
      <?php
      if($showTable == true){
       if($result->num_rows>0){
         while($row = $result->fetch_assoc() ){
           if($row['cust_id'] == $cust_id)
          echo "<tr>" . "<td>".$row['trans_id']."<td>".$row['trans_type']."</td>" . "<td>".$row['tarns_date']."</td>" . "<td>".$row['trans_amount']."</td>" . "</tr>";
        }
      }else{
        echo "<tr>"."No data to be displayed"."</tr>";
      }
        }
      
      ?>
    </table>
    </div>
</body>
</html>