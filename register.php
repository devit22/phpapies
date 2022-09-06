<?php
require('connection.php');


$response = array();  
if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password'])) {  
   $email = $_POST['email'];  
   $name = $_POST['name'];  
   $password = $_POST['password'];  
 
   $qry = "INSERT INTO register(email, name, password) VALUES('$email', '$name', '$password')";

   // check if row inserted or not  

   if (mysqli_query($conn, $qry)) {
    $response["success_msg"] = 1;  
    $response["message"] = "Product successfully Insert.";  
    echo json_encode($response); 
  } else {
    $response["success_msg "] = 0;  
      $response["message"] = "Product not insert because Oops! An error occurred.";   
      echo json_encode($response);  
  }
  mysqli_close($conn);
  
}



?>