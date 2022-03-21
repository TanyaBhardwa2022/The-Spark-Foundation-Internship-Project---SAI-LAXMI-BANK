<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer Information</title>
    <link rel="stylesheet" href="Add New Customer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        <form class="row g-3" method="POST" action="connect.php">
            <div class="col-12">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="inputUsername" placeholder="FirstName  LastName" name="Username">
              </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="Email">
            </div>
            <div class="col-md-6">
              <label for="inputBalance" class="form-label">Account Balance</label>
              <input type="text" class="form-control" id="inputBalance" name="AccountBalance">
            </div>
            <div class="col-md-6">
                <label for="inputAccNumber" class="form-label">Account Number</label>
                <input type="text" class="form-control" id="inputAccNumber" name="AccountNumber">
              </div>
            
            <div class="col-12">
              <button type="submit" class="btn btn-primary" onclick="func()" name="Submit">Submit</button>
            </div>
          <h6 id="Customer ID">Customer ID will be generated once you click on Submit for unique identification. It will be used later...</h6>-->
          <!-- <script> 
            function func(){
              var d = new Date().getTime();
              // document.getElementById("Customer ID").innerHTML = d;
              window.alert(d)
             
            }
          </script>
             -->
            <!-- </form>
          </div>
        </div>
</body>
</html>   -->


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
<?php
    include 'connect.php';
    if(isset($_POST['Submit'])){
    $Username=$_POST['Username'];
    $Email=$_POST['Email'];
    $AccountBalance=$_POST['AccountBalance'];
    $AccountNumber = $_POST['AccountNumber'];
    $sql="INSERT INTO customers(Username,Email,Account_Number, Account_Balance) VALUES('$Username','$Email','$AccountNumber','$AccountBalance')";
    $result=mysqli_query($con,$sql);
    if($result){
      ?>
               <script> alert('Hurray! User created');
                               
                     </script>";
    <?php                 
    }else{
      ?>
      <script> alert('Hurray! User created');
                               
                               </script>";

      <?php
    }

  }
?>

<header>
    <nav class="navbar navbar-dark bg-dark">
         
    <h1>Sai Laxmi Bank</h1>
    <a href="index.php" target="blank">
      <h4>Home</h4>
    </a>
    <a href="customers.php" target="blank">
      <h4>Customers Info</h4>
      </a>
    <a href="make_transaction.php" target="blank">
      <h4> Make transaction</h4>
    </a>
    <a href="transaction_history.php" target="blank">
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
        <form class="row g-3" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>">
            <div class="col-12">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="inputUsername" placeholder="FirstName  LastName" name="Username">
              </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="Email">
            </div>
            <div class="col-md-6">
              <label for="inputBalance" class="form-label">Account Balance</label>
              <input type="text" class="form-control" id="inputBalance" name="AccountBalance">
            </div>
            <div class="col-md-6">
                <label for="inputAccNumber" class="form-label">Account Number</label>
                <input type="text" class="form-control" id="inputAccNumber" name="AccountNumber">
              </div>
            
            <div class="col-12">
              <button type="submit" class="btn btn-primary"  name="Submit">Submit</button>
            </div>
          
           </form>
          </div>
        </div>

