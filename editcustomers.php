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
                                                                     <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
               
‪<!-- Optional Bootstrap theme -->
‪
          <script src="js/bootstrap.min.js"></script>  
    </head>
    <body>
        
 
        
        <script>
            $(document).ready(function(){
                
                $("#bcode").click(function(){
                    
                    var bcode = $("#bcode").val();
                    
                    $.ajax({
                        type:"post",
                        url:"explace.php",
                        data:"bcode="+bcode,
                        
                        success:function(data)
                        {
                            $("#rani").html(data);
                            $("#bcode").val('');
                        },
                        
                        error:function()
                        {
                            $("#rani").html('Not Connected');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <label>Productname</label>
                    <input type="text" id="bcode" class="form-control" placeholder="barcode">
                    
                    
                </div>
                
                <div id="rani" class="col-md-8"></div>
                
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
        
        
                
                                                                    		                           <script type="text/javascript">
$("input#bcode").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "drives.php",
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
    </body>
</html>
