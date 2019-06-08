<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
 
    </head>
    <body>
        <script>
            $(document).ready(function(){
                
               $("#btx").click(function(){
                   
                   var room = $("#room").val();
                   
                   
                   $.ajax({
                       
                       type:"post",
                       url:"outs.php",
                       data:"room="+room,
                       
                       success:function()
                       {
                           //$("#dax").html(data);
                           alert('Room Status Updated');
                       },
                       
                       error:function()
                       {
                           $("#dax").html('Not Connected');
                       }
                       
                   });
                   
               });
            });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <label>Room#</label>
                    <input type="text" id="room" class=" form-control">
                    <input type="button" id="btx" class="btn btn-primary btn-lg" style="background: orangered;" value="Update Room Status">
                    
                    
                </div>
                <div class="dax"></div>
            </div>
            
        </div>
        
                <script type="text/javascript">
$("input#room").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "rms.php",
data : data,
complete : function (xhr, result)
{
if (result != "success") return;
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
