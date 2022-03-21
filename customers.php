<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information</title>
    <link rel="stylesheet" href="css/transaction history.css">
    <link rel="stylesheet" href="css/customers.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/fontawesome.min.css" integrity="sha512-KVdV5HNnN1f6YOANbRuNxyCnqyPICKUmQusEkyeRg4X0p8K1xCdbHs32aA7pWo6WqMZk0wAzl29cItZh8oBPYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
         
    <h1>Sai Laxmi Bank</h1>
    <a href="index.php" class="Home_link" target="blank" >
      <h4 >Home</h4>
    </a>
    <a href="customers.php" class="Customers_Info_link" target="blank">
      <h4>View Customers</h4>
      </a>
    <a href="make_transaction.php" class="Make_Transaction_link" target="blank">
      <h4> Make transaction</h4>
    </a>
    <a href="transaction_history.php" class="Transaction_History_link" target="blank">

      <h4>Transaction History</h4>
    </a>
      </nav>
</header>
<div class="container">
        <h1 class="text-center pt-4">CUSTOMER INFORMATION</h1>
        </div>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">ID</th> 
                <th class="text-center">Username</th>
                <th class="text-center">Email</th>
                <th class="text-center">Account Number</th>
                <th class="text-center">Account Balance</th>
                
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connect.php';

            $sql ="select * from customers";

            $query =mysqli_query($con, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['id']; ?></td>
            <td class="py-2"><?php echo $rows['Username']; ?></td>
            <td class="py-3"><?php echo $rows['Email']; ?></td>
            <td class="py-2"><?php echo $rows['Account_Number']; ?> </td>
            <td class="py-2"><?php echo $rows['Account_Balance']; ?> </td>
            <td><a href="update.php?id=<?php echo $rows['id']; ?>"><i style="font-size:24px" class="fa">&#xf044;</i></a></td>
            <td><a href="delete.php?id=<?php echo $rows['id']; ?>"><i style="font-size:24px" class="fa">&#xf014;</i></a></td>
            <td>
            <a href="process_transaction.php?id=<?php echo $rows['id']; ?>">
            <button type="button" class="Transfer">Process Transaction</button>
            </a>
            </td>
            </tr>
             
            <?php
            }
            ?>

        </tbody>
    </table>

    </div>

    <div class="Add_New_Customer_Button">
        <a href="Add_New_Customer.php">
            <button type="button" class="Buttons" >ADD NEW CUSTOMER</button>  
        </a>
    </div>

</body>
</html>