<?php

include("connection.php");


$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['topic_name']) 
     
    // isset($_POST['question']) && 
    // isset($_POST['optionA']) &&
    // isset($_POST['optionB']) &&
    // isset($_POST['optionC']) &&
    // isset($_POST['optionD']) &&
    // isset($_POST['rightOption'])
    ) { 
 
    $topicName = $_POST['topic_name'];
    // $questionText = $_POST['question'];
    // $optionA = $_POST['optionA'];
    // $optionB = $_POST['optionB'];
    // $optionC = $_POST['optionC'];
    // $optionD = $_POST['optionD'];
    // $rightOption = $_POST['rightOption'];

     // $qry = "create table ".$topicName."(questionText varchar(120), optionA varchar(40),optionB varchar(40),optionC varchar(40),optionD varchar(40),rightOption)";
      

      $qry = "CREATE TABLE ".$topicName."(
        quetionText VARCHAR(110)  NOT NULL,
        optionA VARCHAR(40)  NOT NULL,
        optionB VARCHAR(40)  NOT NULL,
        optionC VARCHAR(40)  NOT NULL,
        optionD VARCHAR(40)  NOT NULL,
        rightOption VARCHAR(40) NOT NULL
        )";
   if (mysqli_query($conn, $qry)) {


    $response["message"]= "Table Created Successfully";
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