<?php

include("connection.php");


$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['topic_name'])) { 
 
    $topicName = $_POST['topic_name'];
   // $size = (int) $_POST['my_post'];
   ALTER TABLE `dart` ADD `first` VARCHAR(30) NOT NULL AFTER `rightOption`, ADD `two` INT(40) NOT NULL AFTER `first`, ADD `three` TEXT NOT NULL AFTER `two`;

 $firstpart = "ALTER TABLE $topicName ADD `unqueid` VARCHAR(23) NOT NULL AFTER `rightOption`;
  foreach($_POST  as $k => $v){
    echo "$k => $v";
  }

      

//       $qry = "CREATE TABLE ".$topicName."(
//         quetionText VARCHAR(110)  NOT NULL,
//         optionA VARCHAR(40)  NOT NULL,
//         optionB VARCHAR(40)  NOT NULL,
//         optionC VARCHAR(40)  NOT NULL,
//         optionD VARCHAR(40)  NOT NULL,
//         rightOption VARCHAR(40) NOT NULL
//         )";
//    if (mysqli_query($conn, $qry)) {


//     $qrytwo = "INSERT INTO topic(topic) values('$topicName')";

//     if(mysqli_query($conn,$qrytwo)){
//         $response["message"]= "Table Created Successfully";
//         $response["status"]= "true";
//         echo  json_encode($response);
//     }else{
//         $response["message"]= "Please fill info correctly";
//         $response["status"]= "false";
//         echo  json_encode($response); 
//     }



//    }else{
//     $response["message"]= "Please fill info correctly";
//     $response["status"]= "false";
//     echo  json_encode($response);
//}
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