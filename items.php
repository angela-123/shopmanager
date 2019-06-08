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
        <title>PRODUCTS</title>
        <style>
            .form{
                
            }
            
            
        </style>
        <style>
            
        </style>
                                        

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
                
                $("#btn").click(function(){
                    
                    var bcode = $("#bcode").val();
                    var pname = $("#pname").val();
                    var subdep = $("#subdep").val();
                    var dep = $("#dept").val();
                    var rate = $("#rate").val();
                    var ucost = $("#ucost").val();
                    var opstock = $("#opstock").val();
                    var disc = $("#disc").val();
                    var del = $("#del").val();
                    var dept = $("#dept").val();
                    var model = $("#model").val();
                    
                    $.ajax({
                        
                        type:"post",
                        url:"regitems.php",
                        data:"bcode="+bcode+"&pname="+pname+"&subdep="+subdep+"&dep="+dep+"&rate="+rate+"&ucost="+ucost+"&opstock="+opstock+"&disc="+disc+"&del="+del+"&dept="+dept+"&model="+model,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                            $("#bcode").val('');
                            $("#pname").val('');
                            $("#subdep").val('');
                            $("#dept").val('');
                            $("#rate").val('');
                            $("#ucost").val('');
                            $("#disc").val('');
                            $("#opstock").val('');
                        },
                        
                        error:function()
                        {
                            alert(new Date());
                        }
                        
                    });
                    
                    $.ajax({
                        type:"post",
                        url:"vol.php",
                        data:"bcode="+bcode,
                        
                        success:function(data)
                        {
                            $("#dx").html(data);
                        },
                        
                        error:function()
                        {
                            $("#dx").html('Not Connected');
                        }
                    });
                    
                    
                    
                    
                });
                
                
                $("#btx").click(function(){
                    
                    var pname = $("#pname").val();
                    $.ajax({
                        type:"post",
                        url:"procks.php",
                        data:"pname="+pname,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#ayo").html('Data Not Available');
                        }
                            
                        
                        
                        
                    });
                    
                });
                
                
                $("#btp").click(function(){
                    
                    
                    var bcode = $("#bcode").val();
                    var pname = $("#model").val();
                    var subdep = $("#subdep").val();
                    var dep = $("#dept").val();
                    var rate = $("#rate").val();
                    var ucost = $("#ucost").val();
                    var opstock = $("#opstock").val();
                    var disc = $("#disc").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"ejupdate.php",
                        data:"bcode="+bcode+"&pname="+pname+"&subdep="+subdep+"&dep="+dep+"&rate="+rate+"&ucost="+ucost+"&opstock="+opstock+"&disc="+disc,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                            $("#bcode").val('');
                            $("#pname").val('');
                            $("#subdep").val('');
                            $("#dept").val('');
                            $("#rate").val('');
                            $("#ucost").val('');
                            $("#disc").val('');
                        },
                        
                        
                        error:function()
                        {
                            $("#ayo").html('Not Connected');
                        }
                        
                    });
                    
                    
                    
                });
                
                $("#bcodee").click(function(){
                    
                    var bcode = $("#bcode").val();
                    
                    $.ajax({
                        type:"post",
                        url:"tat.php",
                        data:"bcode="+bcode,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                        },
                        
                        error:function()
                        {
                            $("#ayo").html('Not Connected');
                        }
                        
                    });
                    
                    
                });
                
                $("#btnew").click(function(){
                     var bcode = $("#bcode").val();
                    var pname = $("#model").val();
                    var subdep = $("#subdep").val();
                    var dep = $("#dept").val();
                    var rate = $("#rate").val();
                    var ucost = $("#ucost").val();
                    var opstock = $("#opstock").val();
                    var disc = $("#disc").val();
                    var del = $("#del").val();
                    var dept = $("#dept").val();
                    
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"newitems.php",
                        data:"bcode="+bcode+"&pname="+pname+"&subdep="+subdep+"&dep="+dep+"&rate="+rate+"&ucost="+ucost+"&opstock="+opstock+"&disc="+disc+"&del="+del+"&dept="+dept,
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                            $("#bcode").val('');
                            $("#pname").val('');
                            $("#subdep").val('');
                            $("#dept").val('');
                            $("#rate").val('');
                            $("#ucost").val('');
                            $("#disc").val('');
                            $("#opstock").val('');
                        },
                        
                        error:function()
                        {
                            alert(new Date());
                        }
                        
                    });
                    
                    
                    $.ajax({
                        type:"post",
                        url:"vol.php",
                        data:"bcode="+bcode,
                        
                        success:function(data)
                        {
                            $("#dx").html(data);
                        },
                        
                        error:function()
                        {
                            $("#dx").html('Not Connected');
                        }
                    
        });
        
        
        $.ajax({
                        type:"post",
                        url:"joko.php",
                        
                        success:function(data)
                        {
                            $("#nuke").html(data);
                        },
                        
                        error:function()
                        {
                            $("#nuke").html('Not Connected');
                        }
                    });
        
        
                    
                });
                
            });
        </script>
        <div class="container-fluid">
            <div class="row " >
                <div class="col-md-3">
                <label>Product Code</label>
                <input type="text" id="bcode" class="form-control">
                
                
                <label>Product Name</label>
                <input type="text" id="model" class="form-control">
                
                
                <label>Dept</label>
                <input type="text" id="dept" class="form-control">
                
                
                
                <label>Rate</label>
                <input type="number" id="rate" class="form-control" value="0">
                <label>Unitcost</label>
                <input type="number" id="ucost" class="form-control">
                
                
                
                
                
                <label>Opening Stock</label>
                <input type="number" id="opstock" class="form-control" value="0">
                
                <input type="button" id="btnew" value="Update Product" class="btn btn-primary btn-lg">
               
                <input type="button" id="btx" value="Preview Stock" class="btn btn-primary btn-lg">
                <div id="dx"></div>
               
            </div>
                <div class="col-sm-8">
                    <div id="ayo" style=" background: white;"></div>
                    <div id="nuke" ></div>
                </div>
        </div>
            
        </div>
        <?php
        // put your code here
        ?>
        
                        
                                                    		                           <script type="text/javascript">
$("input#bcodee").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "sites.php",
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
$("input#subdep").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "subdrives.php",
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
