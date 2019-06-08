<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <title>HOTEL MANAGER LITE </title>
        <style> 
            #mynavy{
                background: #149bdf;
            }
            
           #mynavy a{
                color: #000;
                font-size: 1.3em;
                font-family: tahoma;
            }
            
            #mikl{
                font-size: 0.67em;
                color: orangered;
            }
            
            #jil,#jilli,#pizzaro,#pizza{
                display: none;
            }
            
            li a{
                text-decoration: none;
                font-size: 1em;
                color: darkred;
            }
            
            #miko,#mixp,#liki,#reps,#repx{
                color: orangered;
                text-decoration: none;
                font-family: tahoma;
            }
            
            #hobo{
                
                background: orangered;
            }
            
            ul li a{
                color:  #8c8c8c;
                text-decoration: none;
            }
            
            #jolp{
                position: absolute;
                bottom: 0;
                text-align: center;
                font-weight: bold;
                
            }
            
           .dropdown ul,dropdown-toggle ul{
                color: darkred;
                background: #8c8c8c;
            }
            
            #lozz{
                display: none;
            }
            
            a{
                text-decoration: none;
                color:  #000;
            }
            
            ul{
                list-style: none;
            }
            
            #jules,#jazz{
                display: none;
            }
            h1{
                font-size: 10em;
                color: linen;
                font-style:  italic;
            }
            
            #eva{
                position: absolute;
                bottom:5%;
                left:5%;
            }
            
            a{
                font-family: calibri;
                font-weight: normal;
                color: orangered;
            }
            
            #kini{
                
                display:  none;
            }
            
            #jules a{
                color: orangered;
                font-weight: normal;
            }
            
            .btn btn-link {
                color: darkgoldenrod;
            }
            
            
        </style>
        
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
    <body onload="adxx();" id="yappa">
        
        
        
     
        
        <?php session_start(); ?>
        
        <div class="navbar navbar-default" id="mynavy">
            
            
            
            
            
        </div>
        
        
        

        <?php
        // put your code here
        ?>
<script>
    $(document).ready(function(){
        
        $("#reps").click(function(){
            
            //$("#jil").fadeIn(1000);
            $("#jil").toggle(1000);
            
        });
        
        $("#miko").click(function(){
            
            //$("#jil").fadeIn(1000);
            $("#pizza").toggle(1000);
            
        });
        
        
        
        
         $("#zonik").click(function(){
            
            //$("#jil").fadeIn(1000);
            $("#jules").toggle(1000);
            
        });
        
         $("#repx").click(function(){
            
            //$("#jil").fadeIn(1000);
            $("#jazz").toggle(1000);
            
        });
        
        
        $("#liki").click(function(){
            
            //$("#jil").fadeIn(1000);
            $("#pizzaro").toggle(1000);
            
        });
        
        
         $("#mixp").click(function(){
            
            //$("#jil").fadeIn(1000);
            $("#lozz").toggle(1000);
            
        });
        
        $("#usman").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"users.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
        $("#refs").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"refunds.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
        
        
        
        
        
        
        
        
        
        
        
        
         $("#resv").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"reserves.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        $("#tnite").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"balances.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
        
        
        
        
        
         $("#rstatus").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"roomstatus.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
        
        
        
        
        
         $("#tara").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"checkin.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
        
        
         $("#rm").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"depts.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
         $("#rcat").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"rooms.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
         $("#rswap").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"swaps.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
         $("#pitof").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"ccenter.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
        
        $("#pitox").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"alstatus.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
        
        
         $("#pitofi").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"dexpenses.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
        
        $("#pito").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"salesreps.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        $("#cc").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"cc.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
 
        
        
        
        
        
         $("#dex").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"expenses.php",
                
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('My Oga No Show');
                }
                
            });
            
        });
        
        
         $("#pito").click(function(){
            
            $.ajax({
                
                type:"post",
                url:"sales.php",
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('Not Connected');
                }
                
            });
            
        });
        
         $("#mix").click(function(){
            
            $.ajax({
                
                type:"post",
                url:"users.php",
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('Not Connected');
                }
                
            });
            
        });
        
        
        
        
        
         $("#zonk").click(function(){
            
            $.ajax({
                
                type:"post",
                url:"expenses.php",
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('Not Connected');
                }
                
            });
            
        });
        
        
        
        
        $("#slash").click(function(){
            
            $.ajax({
                
                type:"post",
                url:"transactions.php",
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('Not Connected');
                }
                
            });
            
        });
        
        
         $("#out").mouseenter(function(){
            
            $.ajax({
                
                type:"post",
                url:"checkout.php",
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('Not Connected');
                }
                
            });
            
        });
        
        
        
        
        
        $("#miki").click(function(){
            
            $.ajax({
                
                type:"post",
                url:"patients.php",
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('Not Connected');
                }
                
            });
            
        });
        
        
        $("#niki").click(function(){
            
            $.ajax({
                
                type:"post",
                url:"incomes.php",
                success:function(data)
                {
                    $("#raila").html(data);
                },
                
                error:function()
                {
                    $("#raila").html('Not Connected');
                }
                
            });
            
        });
        
        
    });
</script>
<div id="yaya"></div>

<script>
            
            $("#yayaxxx").dialog({
                
                show:"slide",
                width:"550",
                height:"auto",
                position:"right top "
                
            });
        </script>
        
        <div id="eva" style="background:  #1c94c4;color: #e7e7e7;font-size: 2.5em" class="col-sm-6 col-md-6 col-lg-10">
            
            <h2 style="color: darkblue;"><nobr>Welcome:<?php echo $_SESSION['username']; ?></nobr></h2>
            
        </div>
        
        <script>
            function adxx()
            {
                $("#eva").fadeOut(5000);
                $("#kini").fadeIn(10000);
            }
        </script>
        <div class=" container-fluid">
            <div class="row">
                
                <div class="col-md-3">
                    <img src="images/sam.jpg" class="img img-responsive img-rounded" width="300">
                    <div class=" panel">
                        <div class="panel-body" style=" background: peachpuff; border: 1px #8c8c8c solid;">
                            <a href="#" class="btn btn-link" style="font-size:1.3em;" id="mixp">Start</a><br>
                            <ul id="lozz">
                                <li><a href="#" class="btn btn-link" id="usman">Create Users</a></li>
                                <li><a href="#" class="btn btn-link" id="rm">Room Categories</a></li>
                                <li><a href="#" class="btn btn-link" id="rcat">Rooms</a></li>
                                
                                
                            </ul>
                            <a href="#" class="btn btn-link" style="font-size:1.3em;" id="miko">Transactions</a><br>
                             <ul id="pizza">
                                 <li><a href="#" class="btn btn-link" id="resv">Reservations</a></li>
                                <li><a href="#" class="btn btn-link" id="tara">Checkin</a></li>
                                <li><a href="#" class="btn btn-link" id="out">Checkout</a></li>
                                <li><a href="#" class="btn btn-link" id="tnite">Payments</a></li>
                                <li><a href="#" class="btn btn-link" id="rstatus">Room Status</a></li>
                                 <li><a href="#" class="btn btn-link" id="rswap">Room Swap</a></li>
                                 <li><a href="#" class="btn btn-link" id="refs">Refunds</a></li>
                                
                            </ul>
                            
                            <a href="#" class="btn btn-link" style="font-size:1.3em;" id="liki">Expenses</a><br>
                            <ul id="pizzaro">
                                <li><a href="#" class="btn btn-link" id="cc">Cost Centers</a></li>
                                <li><a href="#" class="btn btn-link" id="dex">Daily Expenses</a></li>
                                
                                
                            </ul>
                            
                            
                            
                            <a href="#" class="btn btn-link" style="font-size:1.3em;" id="reps">Reports</a><br>
                           
                                <ul id="jil">
                                    <li><a id="pito" href="#" class="btn btn-link">Sales</a></li>
                                     <li><a id="pitox" href="#" class="btn btn-link" >Daily Checkin-Checkout</a></li>
                                    <li><a href="#" class="btn btn-link" id="zonik">Expenses</a>
                                        <ul id="jules">
                                            <li><a id="pitofi" href="#" class="btn btn-link">Expenses Report</a></li>
                                             <li><a id="pitof" href="#" class="btn btn-link" >Cost Center Analysis</a></li>
                                              <li><a id="pitor" href="#" class="btn btn-link">Recipients</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="btn btn-link">Cash Flow</a></li>
                                    
                                </ul>
                             <a href="#" class="btn btn-link" style="font-size:1.3em;" id="repx">Edits</a>
                             <ul id="jazz">
                                 <li><a href="#" class="btn btn-link" id="dta">Transactions</a></li>
                                 <li><a href="#" class="btn btn-link" id="dte">Expenses</a></li>
                                 
                                 
                             </ul>
                            
                        </div>
                                    
                                
                            <img src="images/sam.jpg" class="img img-responsive img-rounded" width="300">
                        
                    </div>
                   
                </div>
               
                <div id="raila" class="col-md-9"></div>
                </div>
                
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
                
                $("#dte1").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>
        
              <script>
            $(function(){
                
                $("#dte2").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>
        
    </body>
    
</html>
