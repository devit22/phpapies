<?php 
include_once('connection.php');
$id=$_POST['id'];
// print_r($id);
$query_select=$db->Select('property');
if(!empty(isset($_POST['add']))){

  foreach($_FILES['image']['name'] as $key => $value){
        $img=$_FILES['image']['name'][$key];
        $tmp_name=$_FILES['image']['tmp_name'][$key];
        $path='uploads/'.$img;
        move_uploaded_file($_FILES['image']['tmp_name'][$key],$path);
        $query=$db->multi_images('images',$id,$path,$type);
         
   }
}
?>