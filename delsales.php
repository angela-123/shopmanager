<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>DELETE SALES</title>
                                     
                                         
                                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
        
        <?php session_start() ?>
        
                <?php
                
        
         $zon = mysql_connect('localhost','magnelli_staff','kovachenko123');
    mysql_selectdb(magnelli_app);
    $user = $_SESSION['username'];
$wela = "select username,password,status,location from users where username = '$user'";
	$tas = mysql_query($wela);
	$message = "Access Denied";
	while ($vid = mysql_fetch_assoc($tas))
	{
		$perm = $vid['status'];
                $loc = $vid['location'];
	}
	
	//if($perm!='pharmacy') 
	if($perm!='admin')
	{   print '<div id = "jim">';
		print '<h1>' .$message.'</h1>';
		print '</div>';
		
		exit();
	}
        
        ?>
        
        <?php
        $zonn = mysql_connect('localhost','nwinco_staff','kovachenko123');
        mysql_select_db(nwinco_app);
        
        
        
        ?>
        
        <script>
            $(document).ready(function(){
                
                $("#btview").click(function(){
                    
                    var qty = $("#qty").val();
                    var rec = $("#numb").val();
                    var pname = $("#pname").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"miki.php",
                        data:"qty="+qty+"&recno="+rec+"&pname="+pname,
                        
                        
                        success:function(data)
                        {
                            $("#saya").html(data);
                        },
                        
                        error:function()
                        {
                            alert('No Network');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        <div class="container-fluid">
            
            <div class="row col-sm-6 col-md-4 col-lg-4">
                <div id="form-group">
                    
                    <label class="form-control" style="background:  #66afe9;">Receipt#</label>
                    <input type="number" id="numb" class="form-control">
                    <label class="form-control">Productname</label>
                    <input type="text" id="pname" class="form-control">
                    <label class="form-control">Quantity To be Removed</label>
                    <input type="number" id="qty" class="form-control">
                    
                    <input type="button" class="btn btn-primary btn-lg" value="View Sales" id="btview">
                    <input type="button" class="btn btn-primary btn-lg" value="Delete Sales">
                    
                </div>
            </div>
            
            <div class="row col-sm-6 col-md-6 col-lg-6">
                <div class="table table-responsive" id="saya">
                    
                </div>
                
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
        
            
       
    </body>
</html>
