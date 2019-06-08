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
                
        
    $zon = mysql_connect('localhost','magnelli_staff','kovachenko123');
    mysql_selectdb(magnelli_app);
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
        $zonn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app) or die('cant connect');
        $adele = "insert into receipts(rdate,cashier)values(CURDATE(),'na')";
        mysql_query($adele) or die('cant insert');
        
        $jan = "select MAX(recno)as Recno,curdate() as date from receipts ";
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
                    var customer = $("#cname").val();
                    
                    if(customer === '')
                    {
                        alert('Enter customername');
                        //alert($("#rate").val());
                        return;
                    }
                    
                    if(qty < 0)
                    {
                        alert('Cant Sell Negative Quantity');
                        return;
                    }
                    
                    $.ajax({
                        
                        type:"post",
                        url:"zash.php",
                        data:"pname="+pname+"&rate="+rate+"&qty="+qty+"&loc="+loc+"&recno="+recno+"&pmt="+pmt+"&customer="+customer,
                        
                        success:function(data)
                        {   
                            
                            $("#silas").html(data);
                            
                            
                            $("#qty").val('0');
                            $("#pmt").val('0');
                            $("#rate").val('0');
                        },
                        
                        error:function()
                        {
                            alert('No Network');
                        }
                        
                    });
                    
                    
                    
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"jude.php",
                        data:"customer="+customer,
                        
                        success:function(data)
                        {
                            $("#milo").html(data);
                            
                            $("#qty").val('0');
                            $("#pmt").val('0');
                            $("#rate").val('0');
                            
                        },
                        
                        
                        error:function()
                        {
                            $("#milo").html('Not Connected');
                        }
                        
                    });
                    
                });
                
                
                $("#ledger").click(function(){
                    
                    var customer = $("#cname").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"jude.php",
                        data:"customer="+customer,
                        
                        
                        success:function(data)
                        {
                            $("#milo").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#milo").html('Not Connected');
                        }
                        
                    });
                    
                    
                    
                });
                
                $("#returns").click(function(){
                    
                    
                    var cust = $("#cname").val();
                    
                    var prod = $("#pname").val();
                    var qty = $("#qty").val();
                    var rek = $("#recno").val();
                    var price = parseint($("#rate").val());
                    
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"returns.php",
                        data:"customer="+cust+"&prod="+prod+"&qty="+qty+"&price="+price +"&recno="+rek,
                        
                        
                        success:function(data)
                        {
                            $("#silas").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#silas").html('Not Connected');
                        }
                    });
                    
                   
                    
                });
                
                
                
                
            });
            
            
        </script>
        
        <?php
        
        $das= "select * from products where productname = '$pname'";
        
        $rez = mysql_query($das);
        
        $pt = mysql_fetch_assoc($rez);
        $price= $pt['rate'];
        echo $price;
        
        ?>
        
        <script>
            
            
            
            $(document).ready(function(){
                
                $("#slash").click(function(){
                    
                    
                    //$("#rate").val('5600');
                    
                    var pname = $("#pname").val();
                    
                    
                    
                    $.ajax({
                        type:"post",
                        url:"price.php",
                        data:"pname="+pname,
                        
                        
                        success:function(rara)
                        {
                           
                           
                            $("#rate").val(rara);
                            //alert($("#rate").html(rara));
                            
                            
                           
                            
                            
                        },
                        
                        
                        error:function()
                        {
                            $("#rate").val('89000');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    
                    <button id="slash">Call Up</button>
                        <label class="form-control" style=" background: #c7ddef;">Location</label>
                        <input type="text" value="Zuba" id="loc" class="form-control">
                        <label class="form-control" style=" background: #c7ddef; ">Receipt#</label>
                        
                        <input type="number" id="recno" class="form-control" value="<?php echo $rec; ?>">
                        <label class="form-control" style=" background:  #dca7a7;">Customername</label>
                        <input type="text" id="cname" class="form-control" placeholder="customername">
                        <label class="form-control" style=" background: #c7ddef; border: 0px #009999 solid;">Productname</label>
                        <input type="text" id="pname" class="form-control" style=" color: darkblue;" placeholder="productname">
                        <label  class="form-control" style=" background: #c7ddef; ">Quantity</label>
                        <input type="number" id="qty" class="form-control" value="0">
                        <label class="form-control" style=" background: #c7ddef; ">Rate</label>
                        
                        <input type="number" id="rate" value="0">
                        
                        
                        <label class="form-control">Payment</label>
                        <input type="number" id="pmt" class="form-control" value="0">
                        <input type="button" id="btx" value="Update" class="btn btn-primary btn-lg">
                        <button id="print" class="btn btn-primary btn-lg" onclick="printDiv('silas')">Print Receipt</button>
                        
                        <button id="ledger" class="btn btn-primary btn-lg">Customer Ledger</button>
                        <button id="returns" class="btn btn-primary btn-lg">Returns</button>
                    
                 
                    
                </div>
                
                
                <div id="silas" class="col-sm-6"></div>
                    
                
                <div class="col-sm-3">
                    <div id="milo" style=" background: white;">
                        
                    </div>
                </div>
                
            </div>
            
               
        </div>
        
        <div class="container-fluid">
            <div class="row">
                
                
                    
              
                
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
    
    
    
        
    </body>
</html>
