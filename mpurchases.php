<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <title>DAILY SALES REPORT</title>
 
                                                                 <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
 
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
               
‪<!-- Optional Bootstrap theme -->
‪
          
    </head>
    <body>
        
                                         <?php
                
        
         $zon = mysql_connect('localhost','staff','angela');
    mysql_selectdb(whites);
    $user = $_SESSION['username'];
$wela = "select username,password,status,location from users where username = '$user'";
	$tas = mysql_query($wela);
	$message = "Access Denied, You Have No Business Here";
	$vid = mysql_fetch_assoc($tas);
	
		$perm = $vid['status'];
                $loc = $vid['location'];
	
	
	//if($perm!='pharmacy') 
	if($perm!='admin')
	{   print '<div id = "jimi" class = "col-sm-4 col-md-6 col-lg-10">';
		print '<h1><blink>' .$message.'</blink></h1>';
		print '</div>';
		
		exit();
	}
        
        ?>
        
        <script>
            $(document).ready( function(){
                
                $("#btn").click(function(){
                    
                    var date = $("#dte").val();
                    var yr = $("#yr").val();
                    
                    $.ajax({
                        type:"post",
                        url:"mpurch.php",
                        data:"date="+date+"&yr="+yr,
                        
                        success:function(data)
                        {
                            $("#taz").html(data);
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
                <form class="form-group col-sm-3 col-md-3 col-lg-3">
                    <label>Month</label>
                    <input type="text" id="dte" class="form-control">
                    <label>Year</label>
                    <input type="number" id="yr" class="form-control">
                    <input type="button" id="btn" value="Search" class="btn btn-primary btn-lg">
                    
                    
                </form>
                
                    
        <div id="taz" class="col-sm-9 col-md-9 col-lg-8"></div>
            
                
            </div>
            
        
        <?php
        // put your code here
        ?>
        
        </div>
    </body>
</html>
