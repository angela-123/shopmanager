<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>DAILY INVOICES</title>
                                               
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
                
        
         $zon = mysql_connect('localhost','magnelli_staff','kovachenko123');
    mysql_selectdb(magnelli_app);
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
                
                $("#btl").click(function(){
                    
                    var mnt = $("#mnt").val();
                    var year = $("#yr").val();
                    
                    
                    $.ajax({
                        type:'post',
                        url:'mnvo.php',
                        data:'mnt='+mnt+"&yr="+year,
                        
                        success:function(data)
                        {
                            $("#gana").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#gana").html('Not Connected');
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
                        <input type="text" id="mnt" class="form-control">
                        
                        <label>Year</label>
                        <input type="number" id="yr" class="form-control">
                        
                        <input type="button" id="btl" value="Search" class="btn btn-success btn-lg">
                            
                        
                        
                    </div>
                    
                </div>
                <div id="gana" class="col-md-5"></div>
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
