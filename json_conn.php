<?php
$conn =mysqli_connect('localhost','root','','json');
$filename ="data.json";
$data=file_get_contents($filename);
$arr =json_decode($data,true);
echo "<pre>";
print_r($arr);
echo "</pre>";
foreach($arr as $value){

    


   
    // $query ="INSERT INTO `data` (`name`,`gender`,`designation`) VALUES ('".$value['name']."', '".$value['gender']."', '".$value['designation']."')";

}
$query="SELECT * FROM `data`";
$ar=array();
while($row=mysqli_fetch_assoc($query)){
    array_push($ar,$query);
}
 echo json_encode($arr);
// $result = mysqli_query($conn, $query);
  
//   if (mysqli_num_rows($result) > 0) {
    
//       while($row = mysqli_fetch_assoc($result)) {
//           echo "name: " . $row['name'];
//           echo "gender: " . $row['gender'];
//           echo "designation: " . $row['designation'];
    
//       }
//   } 

// if($result){
//     // echo "data insert"; 
    
//     // echo $row['gender'];
//     // echo $row['designation'];
    
// }

// else{
//     echo "data not insert";
// }


?>