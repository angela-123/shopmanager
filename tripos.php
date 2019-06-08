<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SALES POINT</title>
        <style>
            thr{ position: relative;
                width:100%;
            }
            
            #mkx{
                
                position:  absolute;
                left: 600px;
                top: 100px;
                background:  #9d9d9d;
            }
            
            
        </style>
                           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        
    </head>
    <body>
        <script>
            
            $(document).ready(function(){
                
                $("#btview").click(function(){
                    
                    var date = $("#date").val();
                    var cname = $("#cname").val();
                    var pname = $("#pname").val();
                    var qty = $("#qty").val();
                    var uprice = $("#uprice").val();
                    var paid = $("#paid").val();
                    var dep = $("#dep").val();
                    var other = $("#others").val();
                    var rec = $("#rec").val();
                    var stype = $("#stype").val();
                    
                    $.ajax({
                        
                        type:"post",
                        url:"zpos.php",
                        data:"date="+date+"&cname="+cname+"&pname="+pname+"&qty="+qty+"&uprice="+uprice+"&paid="+paid+"&dep="+dep+"&other="+other+"&rec="+rec+"&stype="+stype,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                            $("#pname").val('');
                            $("#qty").val('');
                            $("#uprice").val('');
                            $("#dep").val('');
                            $("#other").val('');
                            $("#paid").val();
                            
                        },
                        
                        
                        error:function()
                        {
                            alert('No Network');
                        }
                        
                    });
                    
                    
                    
                    
                });
                
                
                $("#btf").click(function(){
                    
                    var cname = $("#cname").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"bafa.php",
                        data:"pname="+cname,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                        },
                        
                        
                        error:function()
                        {
                            alert('Btf Clicked');
                        }
                    });
                    
                    
                });
                
                $("#bprint").click(function(){
                    
                    var cname = $("#cname").val();
                    var date = $("#date").val();
                    var pname = $("#pname").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"del.php",
                        data:"date="+date+"&cname="+cname+"&pname="+pname,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                            alert('Record Deleted');
                        },
                        
                        error:function()
                        {
                            alert('Cant Delete');
                        }
                        
                    });
                    
                });
                
                
                $("#pname").click(function(){
                    
                    var pname = $("#pname").value();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"listprice.php",
                        data:"pname="+pname,
                        
                        success:function(data)
                        {
                            $("#mkx").html(data);
                        },
                        
                        
                        error:function()
                        {
                            alert('Cant Find Price');
                        }
                                        
                    });
                    
                });
                
            });
            
            
        </script>
        
      
            
    
        <?php
        $zonn = mysql_connect('localhost','nwinco_staff','kovachenko123');
        mysql_select_db(nwinco_app) or die('cant connect');
        $adele = "insert into receipts(rdate,cashier)values(CURDATE(),'na')";
        mysql_query($adele) or die('cant insert');
        
        $jan = "select MAX(recno)as Recno from receipts";
        $ran = mysql_query($jan);
        ?>
        <?php
        while ($fam = mysql_fetch_assoc($ran))
        {
            $max = $fam['Recno'];
        }
        
        $rec = $fam['Recno'];
        $date = $fam['date'];
        
        ?>
        
        <?php
        $rex = "select CURDATE() as date";
        $toyo = mysql_query($rex);
        $wow = mysql_fetch_assoc($toyo);
        $datee = $wow['date'];
        ?>
        
        <?php 
        $pname = $_POST['pname'];
        
        $dx = "select rate from products where productname = '$pname'";
        
        $res = mysql_query($dx);
        $fact = mysql_fetch_assoc($res);
        $rate = $fact['rate'];
        if($res)
        {
            echo $rate;
        }
        
 else {
     
            echo 'Cant Find Price';
 }
        ?>
        
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4" style="background: #dcdcdc">
                    
                <form role="form" id="diag" >
                    
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" id="date" class="form-control" value="<?php echo $datee; ?>">
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Sales Type</label>
                        <input type="text" id="stype" class="form-control" value="cash">
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <label>Customername</label>
                        <input type="text" id="cname" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label>Productname</label>
                        <input type="text" id="pname" class="form-control">
                       
                    </div>
                    
                    <div class="form-group">
                        <label>Qty</label>
                        <input type="number" id="qty" class="form-control" value="0">
                       
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Unitprice</label>
                        <input type="number" id="uprice" class="form-control">
                       
                    </div>
                    
                    <div class="form-group">
                        <label>Paid</label>
                        <input type="text" id="paid" class="form-control" value="0">
                       
                    </div>
                    
                    <div class="form-group">
                        <label>Deposit</label>
                        <input type="number" id="dep" class="form-control" value="0">
                       
                    </div>
                    
                    
                    
                    
                    
                    <div class="form-group">
                        <label>Receipt#</label>
                        <input type="text" id="rec" class="form-control" value="<?php echo $max; ?>">
                       
                    </div>
                    
                    <input type="button" id="btview" value="Save" class="btn btn-primary btn-lg "><input type="button" value="Preview Ledger" id="btf" class="btn btn-primary btn-lg"><input type="button" id="bprint" value="Print Invoice" class="btn btn-primary btn-lg">
                </form>
                    
                   
                    
          
                       
                   
                </div>
                <div id="mkx">
                     
                    </div>
                
                
                <div id="ayo" class="col-sm-4 col-md-4 col-lg-6 col-lg-offset-1"></div>
            
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
        // put your code here
        ?>
    </body>
</html>
