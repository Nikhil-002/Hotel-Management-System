<?php
$insert = false;
$msg = "";
if(isset($_POST['cust_id'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $cust_id = $_POST['cust_id'];
    $trans_type = $_POST['trans_type'];
    $trans_amount = $_POST['trans_amount'];
   
    
    $sql = "INSERT INTO `hotel_management`.`transactions` (`trans_type`, `trans_amount`, `tarns_date`, `cust_id`) VALUES ( '$trans_type', '$trans_amount', current_timestamp(), '$cust_id');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
        $msg = "<p class='submitMsg'>Thanks for submitting your form. Booking Completed.</p>";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
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
       <?php
        if($insert == true){
        echo $msg;
        }
    ?>
      <form action="index.php" method="post">
        <h1><b>Book Room</b></h1>
        <input name="cust_id" id="cust_id"type="int" placeholder="Enter Customer-Id " />
        <select name="trans_type" id="trans_type" class="dropdown" aria-label="Transaction Mode">
          <option selected>Transaction Mode</option>
          <option value="Net Banking">Net Banking</option>
          <option value="Credit Card">Credit Card</option>
          <option value="Debit Card">Debit Card</option>
          <option value="Cash">Cash</option>
        </select>
        <input name="trans_amount" id="trans_amount" type="int" placeholder="Amount" />
        <button class="btn">Submit</button>
      </form>
    </div>
  </body>
</html>
