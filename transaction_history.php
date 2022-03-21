<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="css/transaction history.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
         
    <h1>Sai Laxmi Bank</h1>
    <a href="index.php" class="Home_link" target="blank">
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
        <h1 class="text-center pt-4">TRANSACTION HISTORY</h1>
        </div>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">Sender</th>
                <th class="text-center">Sender Account Number</th>
                <th class="text-center">Sender Email</th>
                <th class="text-center">Reciever</th>
                <th class="text-center">Reciever Account Number</th>
                <th class="text-center">Reciever Email</th>
                <th class="text-center">Country</th>
                <th class="text-center">Amount Transffered</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connect.php';

            $sql ="select * from transact";

            $query = mysqli_query($con, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            
            <td class="py-2"><?php echo $rows['sender_customer_name']; ?></td>
            <td class="py-2"><?php echo $rows['sender_account_number']; ?></td>
            <td class="py-3"><?php echo $rows['sender_email']; ?> </td>
            <td class="py-2"><?php echo $rows['recipient_customer_name']; ?> </td>
            <td class="py-2"><?php echo $rows['recipient_account_number']; ?> </td>
            <td class="py-2"><?php echo $rows['recipient_email']; ?> </td>
            <td class="py-2"><?php echo $rows['country']; ?> </td>
            <td class="py-2"><?php echo $rows['transferred_amount']; ?> </td>
            
            </tr>
             
            <?php
            }
            ?>

        </tbody>
    </table>

    </div>

</body>
</html>