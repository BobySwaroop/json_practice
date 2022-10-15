<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div id="load"></div>

</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $.ajax({
            url:'demo.json',
            method:'POST',
            success:function(data){
               
                $.each(data, function(key,value){
                    $("#load").append(value.id + "<br>" + value.userId + "<br>" + value.title + "<br>" + value.body + "<br>" + value.name);
value.gren[1].enail
                })
            
                
            }
        })
    })

</script>
</html>