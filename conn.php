<?php

$conn =mysqli_connect('localhost','root','','json');

if(isset($_POST['submit'])){
$name = $_POST['name'];
 $mail = $_POST['email']; 
 
 
 $query="INSERT INTO `form`(`name`, `email_id`) VALUES ('$name','$mail')";
 $result=mysqli_query($conn,$query);
 if($result){
    echo 0;
 }
 else{
   echo 1;
 }

}

  


?>