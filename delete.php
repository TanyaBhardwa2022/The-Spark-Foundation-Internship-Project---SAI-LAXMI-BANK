<?php

include 'connect.php';

$Id = $_GET['id'];
$deletequery = "delete from customers where id = $Id";
$query = mysqli_query($con , $deletequery);
if($query){
    echo "<script> alert('Deleted Successfully');
                    window.location='customers.php';
          </script>";
}

else{
echo "Deletion Failed";
}

?>