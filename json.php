<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <script>
        var object ={
            name :"boby swaroop",
            branch:"IT",
            number:7355402580,
            webdeveloper: true,
            country:["india","australia"]
           
        
        }

        
        for(data in object ){
            document.write(object[data]+"<br>");
        }
        console.log(object);
    </script> -->
    <!-- <script>
        var data =[{
                name:"usha",
                desgination:"php inern",
                city:"lucknow",
                number:123456789
            },
            {
                name:"shobhit",
                desgination:"php inern",
                city:"lucknow",
                number:7348795301

            }

        ]
            
        
        arr=JSON.stringify(data);
        document.write(arr);
        console.log(arr.name);
        
            // document.write(arr);
        
    </script> -->
    <script>
        var obj ={
            "data" :[
                {
                    "name":"boby",
                    "gender":"male",
                    number: 73836183
                },
                {
                    "name":"shobhit",
                    "gender":"male"
                },
                {
                    "name":"sanjeev",
                    "gender":"male"
                },
                {
                    "name":"usha",
                    "gender":"female"
                },
            ]
        }
        // document.write(obj.data[0].name + " " + obj.data[0].number);
        for(x in obj.data){
            for(y in obj.data[x]){
                document.write(obj.data[x][y]+ "<br>");
            }
        }
        </script>

    
</body>
</html>