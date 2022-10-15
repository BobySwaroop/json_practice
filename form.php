<?php
require("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Send the json data through ajax</h1>
    
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name"><br>
    <label for="mail">Email ID</label>
    <input type="text" id="mail" name="email">
    <input type="submit" id="sub"  name="submit">
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
     
    
     $("#sub").click(function(){
        // $('#sub').click(function(){
            var Name = document.getElementById("fname");
             var mailId = document.getElementById("mail");
            //  var json=new Array();
            //  json.push({name:"Ansh",phone:56789});
            //  json.push({name:"Bobby",phone:12345});
            //  var json_data=JSON.stringify(json);       
            //  let data_bind=new FormData();
            //  data_bind.append("name",Name);
            //  data_bind.append("email",mailId);
            //  data_bind.append("submit",'true');
             $.ajax({
                 url:"conn.php",
                 type:"post",
                 data:'name='+Name.value+'$email='+mailId+'$submit=',
                 success:function(data){
                    if(data==0){
                        console.log(data);

                    }
                    else{
                        alert('not done');
                    }

                 }
             });
     


     })
     
</script>
</html>