
<?php
include("connection.php");


$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['topic_name'])) { 
 
    $topicName = $_POST['topic_name'];
      $qry = "DROP TABLE $topicName";

   if (mysqli_query($conn, $qry)) {


    $qrytwo = "DELETE FROM  topic WHERE  topic = '$topicName'";

    if(mysqli_query($conn,$qrytwo)){
        $response["message"]= "Table Deleted  Successfully";
        $response["status"]= "true";
        echo  json_encode($response);
    }else{
        $response["message"]= "Please fill info correctly";
        $response["status"]= "false";
        echo  json_encode($response); 
    }



   }else{
    $response["message"]= "Please fill info correctly";
    $response["status"]= "false";
    echo  json_encode($response);
   }
    }else{
        $response["message"]= "pls fill all fields ";
        $response["status"]= "false";
        echo  json_encode($response);
    }

}else{
    $response["message"]= "POST METHOD REQUIRED";
    $response["status"]= "false";
    echo  json_encode($response);
}


?>