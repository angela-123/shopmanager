<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <title>NAVBAR</title>
        <style> 
            #mynavy{
                background: #a6e1ec;
            }
            
           #mynavy a{
                color: #122b40;
                font-size: 1.2em;
                font-family: tahoma;
            }
            
           .dropdown ul,dropdown-toggle ul{
                color: darkred;
                background: #8c8c8c;
            }
            
            #eva{
                position: absolute;
                bottom:5%;
                left:5%;
            }
            
            #max{
                
                display: block;
            }
            
            h1{
                
                color:yellow;
                font-style:  italic;
            }
            
            body{
                
                opacity: 0.75;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
          <script src="js/bootstrap.min.js"></script>  
‪<!-- Optional Bootstrap theme -->
‪
               
 
    </head>
    <body onload="adx();">
        
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
                    
                    <a class="navbar-brand brand" href="#" style=" background: lightblue; font-size: 2em;">KING-CHUKS</a>
                    
                </div>
                
                <div class="collapse navbar-collapse navbar-center" id="mynavbar-content" style=" background: orangered; color:  #8c8c8c;">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Start<b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: #a6e1ec;">
                                <li><a href="hugo.php">Create Departments</a></li>
                                <li><a href="dcustomers.php">Customers</a></li>
                                <li><a href="suppliers.php">Suppliers</a></li>
                                
                                <li><a href="items.php">Opening Stock</a></li>
                                
                               
                                <li><a href="stockreps.php">Preview Products</a></li>
                                <li><a href="delsales.php">Delete Sales</a></li>
                                <li><a href="hmsuseradmins.html">Create Users</a></li>
                                
                                
                            </ul>
                        </li>
                        
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Transactions<b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: #a6e1ec;">
                                <li><a href="retails.php">Point Of Sales</a></li>
                                <li><a href="tpurch.php">Purchases</a></li>
                                <li><a href="allman.php">Deposits-Payments-Others</a></li>
                                
                                
                                
                                
                            </ul>
                        </li>
                        
                        
                       
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="">Sales Reports <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: white;">
                                <li><a href="dsales.php">Daily</a></li>
                                
                                <li><a href="msales.php">Monthly</a></li>
                                <li><a href="yrsales.php">Yearly</a></li>
                            </ul>
                            
                        </li>
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Purchases Report <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: lightskyblue;">
                                <li><a href="dpurchases.php">Daily</a></li>
                                <li><a href="mpurchases.php">Monthly</a></li>
                                <li><a href="ypurchases.php">Yearly</a></li>
                                
                            </ul>
                            
                        </li>
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ledger<b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:  #e78f08;">
                                <li><a href="custledger.php">Customers Ledger</a></li>
                                <li><a href="tledger.php">Suppliers Ledger</a></li>
                                
                                
                            </ul>
                            
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stock Reports <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:  #f8efc0;">
                                <li><a href="stockreps.php">Stock Sheet</a></li>
                                
                                <li><a href="audit.php">Stock Audit</a></li>
                               
                                <li><a href="search.php">Stock Search</a></li>
                                
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Reports <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: #a6e1ec;">
                                <li><a href="debtors.php">Debtors</a></li>
                                
                                <li><a href="audit.php">Stock Audit</a></li>
                               
                                <li class="dropdown">
                                    
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Reports <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: #a6e1ec;">
                                <li><a href="debtors.php">Debtors</a></li>
                                
                                <li><a href="audit.php">Stock Audit</a></li>
                               
                                <li class="dropdown">
                                    
                                    
                                    
                                    
                                </li>
                                
                                
                            </ul>
                                    
                                    
                                </li>
                                
                                
                            </ul>
                            
                        </li>
                    </ul>
                    
                </div>
                
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" id="max">
                   
                    
                    <div class="row">
                        <div class="col-md-6" id="mix">
                            <img src="img/iron.jpg" height="500" width="500" class="img-responsive">
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        <script src="js/jquery-1.11.3.js"></script>
        ‪<script src="js/bootstrap.min.js"></script>
        
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
    
    $("#mix").slideUp(8000);
</script>


        
        <div id="eva" style="background:  #1c94c4;color: #e7e7e7;font-size: 2.5em" class="col-sm-6 col-md-6 col-lg-10">
            
            <h2 style="color: darkblue;"><nobr>Welcome:<?php echo $_SESSION['username']; ?></nobr></h2>
            
        </div>
        
        <script>
            function adx()
            {
                $("#eva").fadeOut(5000);
            }
        </script>
    </body>
</html>
