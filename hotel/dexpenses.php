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
        <style>
            th{
                text-align: left;
                color:  #000066;
                border: 1px #000099 solid;
                width: 659px;
                font-size: 10pt;
                
            }
            
            td{
                font-size: 9pt;
                color:  #800020;
                border: 1px #d9edf7 solid;
            }
        </style>
 
    </head>
    <body>
        <script>
            $(document).ready(function(){
                
                
                
                $("#btn").click(function(){
                    
                    var date = $("#dte").val();
                    var loc = $("#loc").val();
                    var datee = $("#datee").val();
                    
                    $.ajax({
                        type:"post",
                        url:"dexp.php",
                        data:"date="+date+"&loc="+loc+"&datee="+datee,
                        
                        success:function(data)
                        {
                            $("#tito").html(data);
                        },
                        
                        error:function()
                        {
                            alert('Noppe');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    
            <label>Start Date</label>
            <input type="date" name="dte" id="dte" class="form-control">
            <label>End Date</label>
            <input type="date" name="dat" id="datee" class="form-control">
            
            <input type="button" value="Preview" id="btn" class="btn btn-primary btn-lg">
        
        <?php
        
        ?>
        
            
            
        
                    
        </div>
                <div id="tito" class="col-md-4"></div>
                <div id="rito" class="col-md-5"></div>
            </div>
        </div>
                <script type="text/javascript">
$("input#loc").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "loca.php",
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
        
       
               <script>
            $(function(){
                
                $("#dte").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>
        
               
               <script>
            $(function(){
                
                $("#datee").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>
      
      


        
        <script type="text/javascript">
	$("#titop").dialog(
			{
			show:"slide",
			    hide:"puff",
			    height:"auto",
			    width:"660",
			    position:"left bottom"
			    
			    	
			}
			
			);
	</script>
        
        <script type="text/javascript">
	$("#ritas").dialog(
			{
			show:"slide",
			    hide:"puff",
			    height:"auto",
			    width:"360",
			    position:"left top"
			    
			    	
			}
			
			);
	</script>
        
        
    </body>
</html>
