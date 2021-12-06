<?php
$insert = false;
if(isset($_POST['cust_fname'])){
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
    $cust_add = $_POST['cust_add'];
    $cust_fname = $_POST['cust_fname'];
    $cust_lname = $_POST['cust_lname'];
    $cust_dob = $_POST['cust_dob'];
    $cust_PhNo = $_POST['cust_PhNo'];
    
    $sql = "INSERT INTO `hotel_management`.`customer` ( `cust_add`, `cust_fname`, `cust_lname`, `cust_dob`, `cust_PhNo`) VALUES ( '$cust_add', '$cust_fname', '$cust_lname', '$cust_dob', '$cust_PhNo');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
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
          <a class="link link-active" href="./AddCustomer.php">Add Customer</a>
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
        echo "<p class='submitMsg'>Thanks for submitting your form. Customer Added</p>";
        }
    ?>
      <form action="AddCustomer.php" method="post">
        <h1><b>Adding Customer</b></h1>
        <input name = "cust_fname" id="cust_fname" type="text" placeholder="First Name " />
        <input name = "cust_lname" id="cust_lname" type="text" placeholder="Last Name" />
        <input name = "cust_dob" id="cust_dob" type="date" name="date" id="date" placeholder="Enter your D.O.B.">
        <input name="cust_PhNo" id ="cust_PhNo" type="phone" placeholder="Enter Phone no." />
        <textarea name="cust_add" id="decust_add" cols="30" rows="10" placeholder="Enter your address"></textarea>
        <button class="btn">Submit</button>
      </form>
    </div>
</body>
</html>