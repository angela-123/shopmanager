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
        <title></title>
        <style>
            button{
                
                background: lightblue;
                color: darkred;
                font-weight:  bolder;
                font-size: 1em;
            }
            
            #ja,#user,#rx,#recno,#ada,#add,#ph,#phone{
                
                display: none;
            }
        </style>
                           
                    <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
                                                                 <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
               
‪<!-- Optional Bootstrap theme -->
‪
          <script src="js/bootstrap.min.js"></script>                         

    </head>
    <body>
        
     
        
                       
        
        
        
                              <?php
                
        
    $zon = mysql_connect('localhost','staff','angela');
    mysql_selectdb(whites);
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
        $zonn = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites) or die('cant connect');
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
                    var user = $("#user").val();
                    var disc = $("#disc").val();
                    var uprice = $("#uprice").val();
                    var add = $("#add").val();
                    var phone = $("#phone").val();
                    var stype = $("#stype").val();
                    
                    
                    if(customer === '')
                    {
                        alert('Enter Customer name');
                        return;
                    }
                    if(user === '')
                     {
                      alert('Enter Cashier Name, To Continue');
                       return;
                     }
                     
                     if(uprice <=0)
                     {
                      alert('Unitprice, To Continue');
                       return;
                     }
                     
                    
                    if(qty < 0)
                    {
                        alert('Cant Sell Negative Quantity');
                        return;
                    }
                    
                    $.ajax({
                        
                        type:"post",
                        url:"zashnew.php",
                        data:"pname="+pname+"&rate="+rate+"&qty="+qty+"&loc="+loc+"&recno="+recno+"&pmt="+pmt+"&customer="+customer+"&user="+user+"&disc="+disc+"&uprice="+uprice+"&stype="+stype,
                        
                        success:function(data)
                        {   
                            
                            $("#silas").html(data);
                            $("#qty").val('0');
                            $("#pname").val('');
                                                    
                            
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
                    
                    $.ajax({
                        type:"post",
                        url:'cyrils.php',
                        data:"customer="+customer+"&add="+add+"&phone="+phone,
                        
                        success:function(data)
                        {
                            $("tilo").html(data);
                        },
                        
                        error:function()
                        {
                            $("#tilo").html('Not Connected');
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
                            $("#qty").val('0');
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
                    var rek = $("#retinv").val();
                    var price = $("#rate").val();
                    var disc = $("#disc").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"returns.php",
                        data:"customer="+cust+"&prod="+prod+"&qty="+qty+"&price="+price +"&recno="+rek+"&disc="+disc,
                        
                        
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
                
                
                
                $("#change").click(function(){
                    
                    
                    var pname = $("#pname").val();
                    var rate = $("#newprice").val();
                    
                    $.ajax({
                        
                        type:"post",
                        url:"radon.php",
                        data:"pname="+pname+"&rate="+rate,
                        
                        
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
                
                
                $("#pname").click(function(){
                    
                    
                    var pname = $("#pname").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"xpricex.php",
                        data:"pname="+pname,
                        
                        success:function(data)
                        {
                            $("#karo").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#karo").html('Cant Connect');
                        }
                        
                    });
                    
                });
                
                
                $("#cnamex").click(function(){
                    
                    var customer = $("#cname").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"discount.php",
                        data:"customer="+customer,
                        
                        success:function(data)
                        {
                            $("#laro").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#laro").html('Discount Disconnected');
                        }
                        
                    });
                    
                });
                
                
                $("#del").click(function(){
                    
                    var pname = $("#pname").val();
                    var qty = $("#qty").val();
                    var recno = $("#recno").val();
                    var customer = $("#cname").val();
                    var user = $("#user").val();
                    $.ajax({
                        
                        type:"post",
                        url:"delete.php",
                        data:"pname="+pname+"&qty="+qty+"&recno="+recno+"&customer="+customer+"&user="+user,
                        
                        success:function()
                        {   
                            
                            
                            alert('Sales Deleted');
                            //window.location.reload();
                            
                        },
                        
                        
                        error:function()
                        {
                            alert('Not Connected');
                        }
                        
                    });
                    
                });
                
                
                $("#btnext").click(function(){
                    
                    $("#pname").val('');
                    $("#qty").val('0');
                    $("#disc").val('0');
                    $("#pmt").val('0');
                    
                });
                
                
                $("#alter").click(function(){
                    
                   var recno = $("#recno").val();
                   var disc =$("#disc").val();
                   
                   $.ajax({
                       
                       type:"post",
                       url:"invrepalter.php",
                       data:"recno="+recno+"&disc="+disc,
                       
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
                
                $("#regco").click(function(){
                    
                   
                     
                     $("#ada").fadeIn(1000);
                     $("#add").fadeIn(1000);
                     $("#ph").fadeIn(1000);
                     $("#phone").fadeIn(1000);
                    
                         
                    
                    
                });
                
                
                $("#sales").click(function(){
                    
                    $.ajax({
                        type:"post",
                        url:"ropes.php",
                        
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
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        
                        <label id="ja">Data Entry Clerk</label>
                        
                        <input type="text" id="user" class="form-control" value="<?php echo $user; ?>">
                        
                        <label id="rx">Receipt#</label>
                        
                        <input type="number" id="recno" class="form-control" value="<?php echo $rec; ?>">
                        
                        <label>Sales Type</label>
                        
                        <select id="stype" class="form-control">
                            <option value="cash">cash</option>
                            <option value="pos">pos</option>
                            <option value="pos-cash">pos-cash</option>
                            <option value="transfer">transfer</option>
                            <option value="cheque">cheque</option>
                            
                        </select>
                        
                        
                        
                        <label>Customername</label>
                        <input type="text" id="cname" class="form-control" placeholder="customername">
                        
                        <label id="ada">Address</label>
                        <input type="text" id="add" class="form-control" placeholder="address">
                        <label id="ph">Phone#</label>
                        <input type="text" id="phone" class="form-control" placeholder="phoneno">
                        <label>Model#</label>
                        <input type="text" id="pname" class="form-control" style=" color: darkblue;" placeholder="productname">
                        <label>Quantity</label>
                        <input type="number" id="qty" class="form-control" value="0">
                        
                        <label>Unit Price</label>
                        <input type="number" id="uprice" class="form-control" value="0">
                        <label>Discount</label>
                        <input type="number" id="disc" class="form-control" value="0">
                        
                        
                        <label>Payment</label>
                        <input type="number" id="pmt" class="form-control" value="0">
                        
                        
                        
                        <input type="button" id="btx" value="Update" class="btn btn-default" style=" background: lightblue; font-weight: bolder; color: darkred;">
                        
                        <button id="print" class="btn btn-default" onclick="printDiv('silas')" style=" background: lightblue">Print Receipt</button>
                        
                        <button id="ledger" class="btn btn-default" style=" background:  lightblue;">Customer Ledger</button>
                        <button id="sales" class="btn btn-default" style=" background:  lightblue;">Preview Daily Sales</button>
                        
                        
                       
                        <input type="button" value="New Customer" class="btn btn-default" id="regco" style=" background:  lightblue;">
                        
                    </div>
                    
                </div>
                
                <div id="silas" class="col-sm-6"></div>
                    
                
                <div class="col-sm-2">
                    <div id="milo" style=" background: white;">
                        <div id="tilo" class="col-sm-2"></div>
                        
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-sm-4">
                    <div id="karo"></div>
                    <div id="laro"></div>
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
    ?>
        
    </body>
</html>
