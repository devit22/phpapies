<?php

include("connection.php");
$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['topic_name']) &&
    isset($_POST['quetionText']) && 
    isset($_POST['optionA']) &&
    isset($_POST['optionB']) &&
    isset($_POST['optionC']) &&
    isset($_POST['optionD']) &&
    isset($_POST['rightOption'])
    ) { 
 
    $topicName = $_POST['topic_name'];
    $questionText = $_POST['quetionText'];
    $optionA = $_POST['optionA'];
    $optionB = $_POST['optionB'];
    $optionC = $_POST['optionC'];
    $optionD = $_POST['optionD'];
    $rightOption = $_POST['rightOption'];

    $qry = "INSERT INTO $topicName(quetionText, optionA, optionB,optionC,optionD,rightOption)
    VALUES ('$questionText', '$optionA', '$optionB','$optionC','$optionD','$rightOption')";
      

   if (mysqli_query($conn, $qry)) {
        $response["message"]= "Question Added  Successfully";
        $response["status"]= "true";
        echo  json_encode($response);
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