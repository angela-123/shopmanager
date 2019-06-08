<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <title>DAILY INVOICES</title>
                                               
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
            $(document).ready(function(){
                
                $("#btl").click(function(){
                    
                    var date = $("#dte").val();
                    var datts = $("#dtp").val();
                    
                    
                    $.ajax({
                        type:'post',
                        url:'gropes.php',
                        data:'date='+date+"&datts="+datts,
                        
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
                
                
                
                $("#btd").click(function(){
                    
                    
                    var date = $("#dte").val();
                    var datx = $("#dtp").val();
                    
                    $.ajax({
                        
                        type:"post",
                        url:"dsum.php",
                        data:"date="+date+"&datex="+datx,
                        
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
                <div class="col-md-3 col-sm-3 col-lg-3">
                    <div class="form-group">
                        <label>Beginning Date</label>
                        <input type="date" id="dte" class="form-control">
                        <label>End Date</label>
                        <input type="date" id="dtp" class="form-control">
                        <input type="button" id="btl" value="Search" class="btn btn-success btn-lg">
                        
                        <button id="print" class="btn btn-primary btn-lg" onclick="printDiv('gana')">Print Report</button>
                            
                        
                        
                    </div>
                    
                </div>
                <div id="gana" class="col-md-4"></div>
            </div>
            
        </div>
        
        <script>
            $(function(){
                
                $("#dte").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>

<script>
            $(function(){
                
                $("#dtp").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>



        
                 <script type="text/javascript">
    function printDiv(divID)
    {   //var dte = document.getElementById('hy');
     //dte = new Date();
        var divElements = document.getElementById(divID).innerHTML;

        var oldpage = document.body.innerHTML;

        document.body.innerHTML = "<html><head><title></title></head><body><table title = INTENT ENERGY SOLUTIONS>" +divElements + "</table></body>";
        
        window.print();
        
        
        

        document.body.innerHTML = oldpage; 
        //document.forms["dag"].refresh();
        window.location.reload();
        
    }
    </script>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
