<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
            <div class="col-lg-8">                                  
                <div class="form-group">
                        <label class="col-lg-3 control-label">Name:<font style="color: red;">*</font></label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="userName" name="Name" placeholder="Full Name" value="">
                        </div>
                </div>


                <div class="form-group">
                    <label class="col-lg-3 control-label">Mobile:<font style="color: red;">*</font></label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="userContactNumber" name="Mob_Num" type="number" placeholder="" onkeypress="enableKeys(event);" maxlength="10" placeholder="9966778888">
                    </div>
                </div>

                <div class="form-group">
                        <label class="col-lg-3 control-label">Email:<font style="color: red;">*</font></label>
                        <div class="col-lg-9">                                  
                            <input type="text" class="form-control" name="addressemailId" id="Email" placeholder="you@example.com" value="">
                        </div>
                </div>  
                <div class="form-group marg-bot-45">
                    <label class="col-lg-3 control-label"></label>
                    <div class="col-lg-9">

                        <a href="" class="btn btn-info"  id="btnBooking">Confirm Booking</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
        $(document).ready(function(){
            $("#btnBooking").on("click", function(e){

                // as you have used hyperlink(a tag), this prevent to redirect to another/same page
                e.preventDefault();

                // get values from textboxs  
                var uName = $('#userName').val();
                var mailId = $('#addressemailId').val();
                var mobNum = $('#userContactNumber').val();

                $.ajax({
                    url:"bs.conn.php",
                    type:"GET",
                    dataType:"json",
                    data:{type:"booking",Name:uName, Email:mailId, Mob_Num:mobNum},
                    //type: should be same in server code, otherwise code will not run
                    ContentType:"application/json",
                    success: function(response){
                        alert(JSON.stringify(response));
                    },
                    error: function(err){
                        alert(JSON.stringify(err));
                    }
                })
            });
        });
    </script>


</html>