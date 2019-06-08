<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRODUCTS</title>
        <style>
            .form{
                background:  #999999;
            }
        </style>
                              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
        
        <script>
            $(document).ready(function(){
                
                $("#btn").click(function(){
                    
                    var bcode = $("#bcode").val();
                    var pname = $("#pname").val();
                    var subdep = $("#subdep").val();
                    var dep = $("#dept").val();
                    var rate = $("#rate").val();
                    var ucost = $("#ucost").val();
                    var opstock = $("#opstock").val();
                    var loc = $("#loc").val();
                    
                    $.ajax({
                        
                        type:"post",
                        url:"regstocka.php",
                        data:"bcode="+bcode+"&pname="+pname+"&subdep="+subdep+"&dep="+dep+"&rate="+rate+"&ucost="+ucost+"&opstock="+opstock+"&loc="+loc,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                            $("#bcode").value('');
                            $("#pname").val('');
                            $("#subdep").val('');
                            $("#dept").val('');
                            $("#rate").val('');
                            $("#ucost").value('');
                        },
                        
                        error:function()
                        {
                            alert(new Date());
                        }
                        
                    });
                    
                    
                });
                
            });
        </script>
        <div class="row" >
            <div class="col-sm-4 col-sm-offset-2" >
                <div class="form-group">
                <label>Poductname</label>
                <input type="text" id="pname" class="form-control">
                
                
                
                
                <label>Opening Stock</label>
                <input type="number" id="opstock" class="form-control">
                
                
                    <label>Location</label>
                    <select id="loc" class="form-control">
                        <option value="samsung">samsung</option>
                        <option value="magnelli">magnelli</option>
                        
                    </select>
                    
                
                <input type="button" id="btn" value="update" class="btn btn-primary">
                </div>
                <div id="ayo"></div>
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
        
                        
                                                    		                           <script type="text/javascript">
$("input#dept").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "mydepts.php",
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
        

                                                    		                           <script type="text/javascript">
$("input#subdep").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "subdrives.php",
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

                                                            		                           <script type="text/javascript">
$("input#pname").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "driven.php",
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
