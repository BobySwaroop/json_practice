<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        var senddata={id:1, fname:"boby", lname:"swaroop"};
        var data =JSON.stringify(senddata);
        console.log(data);
        // window.location="send.php?values="+data;
        var info =JSON.parse(data);
        console.log(info);
        console.log(info.fname + " "+ info.lname);
        document.write(info.fname + " "+ info.lname) ;
        
    </script>
</body>
</html>