<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <title>HOTEL MANAGER PRO</title>
        <style> 
            #mynavy{
                background:lightskyblue;
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
            
            #hobo{
                
                background: orangered;
            }
            
           .dropdown ul,dropdown-toggle ul{
                color: darkred;
                background: #8c8c8c;
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
            
            #kini{
                
                display:  none;
            }
            
        </style>
        
                      <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
          <script src="js/bootstrap.min.js"></script>  
          <script src="js/jquery-1.11.3.js"></script>
        ‪<script src="js/bootstrap.min.js"></script>
 
    </head>
    <body onload="adxx();">
        
        <?php session_start(); ?>
        
        <div class="navbar navbar-default" id="mynavy">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle = "collapse" data-target="#mynavbar-content">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                    
                    <a class="navbar-brand brand" href="#" style=" font-style:  italic;color: darkblue;font-size: 2.5em; background:gray;">SAMUEL`S LODGE</a>
                    
                </div>
                
                <div class="collapse navbar-collapse navbar-center" id="mynavbar-content">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Start<b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: white; color:burlywood;">
                                <li><a href="hmsuseradmin.html">Create Users</a></li>
                                <li><a href="depts.php">Create Room Types</a></li>
                                <li><a href="rooms.php">Rooms</a></li>
                                
                                <li><a href="newmenu.php">Edit Rooms</a></li>
                                
                                
                                <li><a href="trunks.php">Close Transactions</a></li>
                                
                                
                            </ul>
                        </li>
                        
                        
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transactions <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:white;">
                                <li><a href="checkin.php">Check In</a></li>
                                <li><a href="checkout.php">Check Out</a></li>
                                
                                
                                
                                
                                
                            </ul>
                            
                        </li>
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Report <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:  #c8e5bc;">
                                <li><a href="dbsalesprinto.php">Daily Sales Total By Cashiers</a></li>
                                 <li><a href="dbsalesprinto.php">Daily Sales Total</a></li>
                                
                                <li id="hobo"><a href="cleansales.php">Daily Sales-Only Evening To Morning</a></li>
                               
                                
                                <li><a href="mgsales.php">Monthly Sales</a></li>
                                <li><a href="yrbsales.php">Yearly Sales</a></li>
                                
                                
                            </ul>
                            
                        </li>
                        
                        
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Expenses <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: burlywood;">
                                <li><a href="cc.php">Cost Centers</a></li>
                                <li><a href="expenses.php">Expenses Entry</a></li>
                                <li><a href="dexpenses.php">Daily Expenses Report</a></li>
                                <li><a href="mexpenses.php">Monthly Expenses Report</a></li>
                                <li><a href="yrexpenses.php">Yearly Expenses Report</a></li>
                                
                                
                            </ul>
                            
                        </li>
                        
                        
                       
                        
                        
                        
                        <li><a href="jogin.php" id="mikl">Log Out</a></li>
                        
                    </ul>
                    
                </div>
                
            </div>
        </div>
        
        
        

        <?php
        // put your code here
        ?>
<script>
    $(document).ready(function(){
        
        $("#help").click(function(){
            
           
           $.ajax({
               
               url:"help.php",
               
               success:function(data)
               {
                   $("#yaya").html(data);
               },
               
               error:function()
               {
                   alert('No Network');
               }
               
           });
            
        });
        
    });
</script>
<div id="yaya"></div>

<script>
            
            $("#yaya").dialog({
                
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
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-6">
                    
                </div>
                
            </div>
            
        </div>
    </body>
</html>
