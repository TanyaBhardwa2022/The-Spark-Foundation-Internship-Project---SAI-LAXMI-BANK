<?php

// $Username = filter_input(INPUT_POST, 'username');
// $Email = filter_input(INPUT_POST, 'email');
// $AccountNumber = filter_input(INPUT_POST, 'Account Number');
// $AccountBalance = filter_input(INPUT_POST, 'Account Balance');

// if (!empty($Username)){
//     if(!empty($Email)){
//         if(!empty($AccountNumber)){
//             if(!empty($AccountBalance)){
//                 $host = "localhost";
//                 $dbusername = "root";
//                 $dbpassword = "";
//                 $dbname = "Banking System";

//                 $conn = new mysqli_connect($host, $dbusername, $dbpassword, $dbname);
//                 if(mysqli_connect_error()){
//                     die('Connect Error ('.mysqli_connect_error().')'. mysqli_connect_error());
//                 }
//                 else{
//                     $sql = "INSERT INTO form(Username , Email, AccountNumber, AccountBalance)"
//                 }
//             }
//         }
//     }
// }

$username = "root";
$password = "";
$server = "localhost";
$database = "banking_system";
$con = mysqli_connect($server, $username, $password, $database);
if($con){
    ?>

    <!-- <script>
        alert("CONNECTION SUCCESSFUL");
    </script> -->

    <?php
}else{
    ?>
    <script>
        alert("CONNECTION NOT SUCCESSFUL");
    </script>
    <?php
}

?>