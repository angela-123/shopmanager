<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>DAILY SALES REPORT</title>
       <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
           
          <script src="js/jquery-1.11.3.js"></script>
        ‪<script src="js/bootstrap.min.js"></script>
 
    </head>
               <?php session_start(); ?>
        
                       
        
        
        
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
        
    <body>
        <script>
            $(document).ready( function(){
                
                $("#btn").click(function(){
                    
                    var date = $("#dte").val();
                    var yr = $("#yr").val();
                    var loc = $("#loc").val();
                    
                    $.ajax({
                        type:"post",
                        url:"mreps.php",
                        data:"date="+date+"&yr="+yr+"&loc="+loc,
                        
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
                <form class="form-group col-sm-4">
                    <label class="form-control" style=" background:  bisque;">Month</label>
                    <input type="text" id="dte" class="form-control"><br>
                    <label class="form-control" style=" background:  bisque;">Year</label>
                    <input type="number" id="yr" class="form-control"><br>
                    
                    
                    <input type="button" id="btn" value="Search" class="btn btn-primary btn-lg">
                    
                    
                    
                </form>
                
                    
        <div id="taz" class="col-md-8"></div>
            
                
            </div>
            
        
        <?php
        // put your code here
        ?>
        
        </div>
    </body>
</html>
