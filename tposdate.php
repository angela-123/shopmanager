<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SALES POINT</title>
        <style>
            thr{ position: relative;
                width:100%;
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
                
                $("#btx").click(function(){
                    
                    
                    var date = $("#date").value();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"zposdate.php",
                        data:"date="+date,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                        },
                        
                        
                        error:function()
                        {
                            alert(new Date());
                        }
                        
                    });
                    
                });
                
                
                
                
                $("#btf").click(function(){
                    
                    var cname = $("#cname").val();
                    var date = $("#date").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"bafazos.php",
                        data:"pname="+cname+"&date="+date,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                        },
                        
                        
                        error:function()
                        {
                            alert(new Date());
                        }
                        
                    });
                    
                });
                
                
                $("#btview").click(function(){
                    
                    var date = $("#date").value();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"sasha.php",
                        data:"date="+date,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                        },
                        
                        error:function()
                        {
                            alert('No Network');
                        }
                        
                    });
                    
                    
                });
                
            });
        </script>
        
      
            
    
        <?php
        $zonn = mysql_connect('localhost','dinavica_staff','kovachenko123');
        mysql_select_db(dinavica_app);
        $adele = "insert into receipts(rdate)values(curdate())";
        mysql_query($adele);
        
        $jan = "select MAX(recno)as recno,curdate() as date from receipts";
        $ran = mysql_query($jan);
        
        $fam = mysql_fetch_assoc($ran);
        
        $rec = $fam['recno'];
        $date = $fam['date'];
        
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3" style="background: #dcdcdc">
                
                <form role="form" id="diag" >
                    
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" id="date" class="form-control" value="<?php echo $date; ?>">
                    </div>
                    <div class="form-group">
                        <label>Customername</label>
                        <input type="text" id="cname" class="form-control">
                        
                    </div>
                    
                    
                    
                    
                                      
                    
                    
                    
                    
                    
                    
                    
                    
                    <input type="button" id="btf" class="btn btn-primary btn-lg" value="Preview Ledger">
                </form>
                    
          
                       
                   
                </div>
                <div id="ayo" class="col-sm-4 col-md-8 col-lg-6 col-lg-offset-1"></div>
            
            </div>
            
           
            
        </div>
        
        
                 
                
                
                           
                
            
        
        
              
                
            
        
            
        
        
        
        
                                                            		                           <script type="text/javascript">
$("input#pname").autocomplete ({
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
$("input#cname").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "custs.php",
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
