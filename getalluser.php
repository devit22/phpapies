<?php
require("connection.php");
$sql = "SELECT * from register";
$result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {  

        $row = mysqli_fetch_assoc($result);  

       $product = array();  

       $product["id"] = $row["id"];  

       $product["email"] = $row["email"];  

       $product["name"] = $row["email"];  


       $response["users"] = array();  

       array_push($response["users"], $product);  

       // echoing JSON response  

       print json_encode($response);  

    } else {  

       // no product found  

       $response["success"] = 0;  

       $response["message"] = "No product found";  

       // echo no users JSON  

       print json_encode($response);  

    }  

mysqli_close($conn);
?>