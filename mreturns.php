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
        <title>DAILY RETURNS</title>
                                               
                                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
        
        
                                                               <?php
                
        
         $zon = mysql_connect('localhost','ejhil_staff','kovachenko123');
    mysql_selectdb(ejhil_app);
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
            $(document).ready(function(){
                
                $("#btn").click(function(){
                    
                    var mnt = $("#mnt").val();
                    var yr =$("#yr").val();
                    
                    
                    $.ajax({
                        type:"post",
                        url:"msoccer.php",
                        data:"mnt="+mnt+"&yr="+yr,
                        
                        success:function(data)
                        {
                            $("#gum").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#gum").html('Not Connected');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Month</label>
                        <input type="text" id="mth" class="form-control">
                        
                        <label>Year</label>
                        <input type="text" id="yr" class="form-control">
                        
                        
                        <input type="button" id="btn" class="btn btn-primary btn-lg" value="Preview Returns">
                        
                    </div>
                    
                </div>
                
                
                <div id="gum" class="col-md-8"></div>
                
            </div>
            
        </div>
        
        <script>
            $(function(){
                $("#dte").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
                
            });
        </script>
        <?php
        // put your code here
        ?>
    </body>
</html>
