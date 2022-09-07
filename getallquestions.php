


<?php

include("connection.php");


$response = array();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   

      $topicName = $_GET['topic_name'];

      $qry = "SELECT * from $topicName";
$result = mysqli_query($conn, $qry);




   if (mysqli_num_rows($result) > 0) {

 

        $product = array();  

        while($r = mysqli_fetch_assoc($result)) {
            
           $product[] = $r;
        }


    $response = array();  
   $response["questions"] = $product;
    echo json_encode($response); 


   }else{
    $response["message"]= "No Record found";
    $response["status"]= "false";
    echo  json_encode($response);
   }
   

}else{
    $response["message"]= "GET METHOD REQUIRED";
    $response["status"]= "false";
    echo  json_encode($response);
}


?>


