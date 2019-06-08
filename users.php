<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CREATE USERS</title>
                                                             <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>

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
            $(document).ready(function(){
                
                $("#btu").click(function(){
                    var usname = $("#usname").val();
                    var pswd =$("#pswd").val();
                    var status = $("#status").val();
                    var loc = $("#loc").val();
                    
                    
                    $.ajax({
                        type:"post",
                        url:"userpost.php",
                        data:"usname="+usname+"&pswd="+pswd+"&status="+status+"&loc="+loc,
                        
                        success:function(data)
                        {
                            $("#luger").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#luger").html('Not Connected');
                        }
                        
                        
                    });
                    
                });
                
                
            });
        </script>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" id="usname" class="form-control" placeholder="username">
                        <label>Password</label>
                        <input type="password" id="pswd" class="form-control" placeholder="password">
                        <label>Permission</label>
                        <input type="text" id="status" class="form-control" placeholder="access type">
                        <label>Location</label>
                        <select id="loc" class="form-control">
                            <option value="Abuja">Abuja</option>
                            <option value="Lagos">Lagos</option>
                            
                        </select>
                        <input type="button" id="btu" class="btn btn-primary" value="Create User">
                        
                    </div>
                    
                </div>
                <div id="luger" class="col-md-4"></div>
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
