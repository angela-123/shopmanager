<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>STOCK AUDIT</title>

        <style>
            input[type = "button"]
            {
                width: 120px;
                height: 60px;
                border: 1px #414141 solid;
            }
            
            
            th{
                text-align: left;
                font-size: 12pt;
                font-weight: normal;
                color: darkblue;
                width: 598px;
                
            }
            
            
            td{
                font-size: 10pt;
                font-weight:  bolder;
                color: #dd514c;
                border: 0px #49afcd solid;
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
                
                $("#btp").click(function(){
                    
                    var kode = $("#kode").val();
                    var loc = $("#loc").val();
                    
                    
                    $.ajax({
                        type:"post",
                        url:"myaudit.php",
                        data:"kode="+kode+"&loc="+loc,
                        
                        success:function(data)
                        {
                            $("#mina").html(data);
                        },
                        
                        
                        error:function()
                        {
                            alert(new Date());
                        }
                        
                    });
                    
                });
                
            });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="form-group col-sm-4 col-md-6 col-lg-6">
            <label class="form-control">Itemname</label>
            <input type="text" id="kode" name="kode" size="45" class="form-control">
            
            
            <input type="button" value="Preview" id="btp" class="btn btn-primary btn-lg">
                </div>
        
                
            </div>
            <div id="mina" title="STOCK AUDIT" class="col-sm-4"></div>
        </div>
        <?php
        
        ?>
        
        
                            		                           <script type="text/javascript">
$("input#kode").autocomplete ({
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

<script type="text/javascript">
	$("#minat").dialog(
			{
			show:"slide",
			    hide:"puff",
			    height:"auto",
			    width:"600",
			    position:"right top"
			    
			    	
			}
			
			);
	</script>


    </body>
</html>
