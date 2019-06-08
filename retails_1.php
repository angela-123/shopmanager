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
                           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
        
        <?php session_start(); ?>
        
                       
        
        
        
                              <?php
                
        
         $zon = mysql_connect('localhost','nwinco_staff','kovachenko123');
    mysql_selectdb(nwinco_app);
    $user = $_SESSION['username'];
$wela = "select username,password,status,location from users where username = '$user'";
	$tas = mysql_query($wela);
	$message = "Access Denied";
	$vid = mysql_fetch_assoc($tas);
	
		$perm = $vid['status'];
                $loc = $vid['location'];
	
	
	//if($perm!='pharmacy') 
	//if($perm!='admin')
	//{   print '<div id = "jimi" class = "col-sm-4 col-md-6 col-lg-10">';
		//print '<h1>' .$message.'</h1>';
		//print '</div>';
		
		//exit();
	//}
        
        ?>
        
        
        
        <?php
        $zonn = mysql_connect('localhost','nwinco_staff','kovachenko123');
        mysql_select_db(nwinco_app) or die('cant connect');
        $adele = "insert into receipts(rdate,cashier)values(CURDATE(),'na')";
        mysql_query($adele) or die('cant insert');
        
        $jan = "select MAX(recno)as Recno from receipts";
        $ran = mysql_query($jan);
        ?>
        <?php
        $fam = mysql_fetch_assoc($ran);
        
            $max = $fam['Recno'];
        
        
        $rec = $fam['Recno'];
        $date = $fam['date'];
        
        ?>
        
        
        
        <script>
            $(document).ready(function(){
                
                $("#btx").click(function(){
                    
                    var pname = $("#pname").val();
                    var rate = $("#rate").val();
                    var qty = $("#qty").val();
                    var loc = $("#loc").val();
                    var recno = $("#recno").val();
                    var pmt = $("#pmt").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"zash.php",
                        data:"pname="+pname+"&rate="+rate+"&qty="+qty+"&loc="+loc+"&recno="+recno+"&pmt="+pmt,
                        
                        success:function(data)
                        {   
                            
                            $("#silas").html(data);
                            $('#pname').value("");
                            $('#qty').val("");
                            $('#pmt').val("");
                        },
                        
                        error:function()
                        {
                            alert('No Network');
                        }
                        
                    });
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"zashi.php",
                        
                        success:function(data)
                        {
                            $("#milo").html(data);
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
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="form-control" style=" background: #c7ddef;">Location</label>
                        <input type="text" value="emab" id="loc" class="form-control">
                        <label class="form-control" style=" background: #c7ddef; ">Receipt#</label>
                        <label></label>
                        <input type="number" id="recno" class="form-control" value="<?php echo $rec; ?>">
                        <label class="form-control" style=" background: #c7ddef; border: 0px #009999 solid;">Productname</label>
                        <input type="text" id="pname" class="form-control" style=" color: darkblue;">
                        <label class="form-control" style=" background: #c7ddef; ">Quantity</label>
                        <input type="number" id="qty" class="form-control">
                        <label class="form-control" style=" background: #c7ddef; ">Rate</label>
                        
                        <input type="number" id="rate" class="form-control">
                        <label class="form-control">Payment</label>
                        <input type="number" id="pmt" class="form-control" value="0">
                        <button id="btx" class="btn btn-primary btn-lg">Update</button>
                        <button id="print" class="btn btn-primary btn-lg" onclick="printDiv('silas')">Print Receipt</button>
                        
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <div id="silas"></div>
                    
                </div>
                <div class="col-sm-4">
                    <div id="milo" style=" background:  #c7ddef;">
                        
                    </div>
                </div>
                
            </div>
            
            
        </div>
        <?php
       
        ?>
        
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
                

        
    </body>
</html>
