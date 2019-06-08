<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ROOMS</title>
         

    </head>
    <body>
        
        <script>
            
            $(document).ready(function(){
                
                $("#btn").click(function(){
                    
                    var room = $("#room").val();
                    var cat = $("#cat").val();
                    var rate = $("#rate").val();
                    
                    
                    $.ajax({
                        type:"post",
                        url:"roms.php",
                        data:"room="+room+"&cat="+cat+"&rate="+rate,
                        
                        success:function(data)
                        {
                            $("#fax").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#fax").html('Not Connected');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <label>Room#</label>
                    <input type="text" id="room" class="form-control">
                    <label>Category</label>
                    <input id="cat" type="text" class="form-control">
                    <label>Rate</label>
                    <input type="number" id="rate" class="form-control">
                    <input type="button" id="btn" class="btn btn-primary btn-lg" value="Update" style=" background: orange;">
                    
                </div>
                
                <div id="fax" class="col-md-5"></div>
                
            </div>
            
        </div>
        
        
                <script type="text/javascript">
$("input#cat").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "cats.php",
data : data,
complete : function (xhr, result)
{
if (result !== "success") return;
var response = xhr.responseText;
var books = [];
$(response).filter ("li").each (function ()
{
books.push ($(this).text ());
});
callback (books);
}
});
}
});
</script>
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
