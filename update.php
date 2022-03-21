<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/Add New Customer.css">
</head>

<body>


<header>
    <nav class="navbar navbar-dark bg-dark">
         Navbar content 
    <h1>Sai Laxmi Bank</h1>
    <a href="index.html">
      <h4>Home</h4>
    </a>
    
      <h4>customers</h4>
    <a href="make transaction.html">
      <h4> Make transaction</h4>
    </a>
    <a href="transaction history.html">
      <h4>Transaction History</h4>
    </a>
      </nav>
</header>
    <div id="Welcome">
        <h1>Welcome to Adding Information Page</h1>
        <h5>Enter the neccesary Information</h5>
      </div>
      <div id="Background">
      <div id="Form">
        <form class="row g-3" method="POST" action="">
        <div class="col-12">
        <?php
    include 'connect.php';
    $id = $_GET['id'];
    $sql ="select * from customers where id = $id";

    $query =mysqli_query($con, $sql);
    $rows = mysqli_fetch_assoc($query);
    if(isset($_POST['Submit'])){
       
    $Username=$_POST['Username'];
    $Email=$_POST['Email'];
    $AccountBalance=$_POST['AccountBalance'];
    $AccountNumber = $_POST['AccountNumber'];
    
    $updatequery="UPDATE customers SET  Username='$Username' , Account_Number='$AccountNumber' , Email='$Email' , Account_Balance='$AccountBalance' WHERE id=$id";
    $result=mysqli_query($con,$updatequery);
    if($result){
      ?>
               <script> alert('Hurray! Updated Successfully');
               windows.location('customers.php');
                               
               </script>
    
<?php
    }else{
?>

                    <script> alert(' Updation Failed');
                               
                    </script>
                     
<?php
    }

  }
?>
            
                <label for="inputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="inputUsername" placeholder="FirstName  LastName" name="Username" value="<?php echo $rows['Username']; ?>">
              </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="Email" value="<?php echo $rows['Email']; ?>">
            </div>
            <div class="col-md-6">
              <label for="inputBalance" class="form-label">Account Balance</label>
              <input type="text" class="form-control" id="inputBalance" name="AccountBalance" value="<?php echo $rows['Account_Balance']; ?>">
            </div>
            <div class="col-md-6">
                <label for="inputAccNumber" class="form-label">Account Number</label>
                <input type="text" class="form-control" id="inputAccNumber" name="AccountNumber" value="<?php echo $rows['Account_Number']; ?>">
              </div>
            
            <div class="col-12">
              <button type="submit" class="btn btn-primary"  name="Submit" value="update">Update</button>
            </div>
          
           </form>
          </div>
        </div>

