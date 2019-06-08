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
                background: #2e6da4;
            }
            
           #mynavy a{
                color: #000;
                font-size: 1.3em;
                font-family: tahoma;
            }
            
           .dropdown ul,dropdown-toggle ul{
                color: darkred;
                background: #8c8c8c;
            }
        </style>
        <script src="libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
        <script src="libs/jquery-ui-1.10.0.custom.min.js"></script>
        
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
               
 
            
    </head>
    <body>
        
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
                    
                    <a class="navbar-brand brand" href="#">Dinavic</a>
                    
                </div>
                
                <div class="collapse navbar-collapse navbar-center" id="mynavbar-content">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Start<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="hugo.php">Create Departments</a></li>
                                <li><a href="dcustomers.php">Customers</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="items.php">Initialize Stock</a></li>
                                <li><a href="items.php">Preview Products</a></li>
                                
                            </ul>
                        </li>
                        
                        
                        
                        <li><a href="tpos.php">Point Of Sales</a></li>
                        <li><a href="tpurch.php">Purchases</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sales Reports <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Daily</a></li>
                                <li><a href="#">Intervally</a></li>
                                <li><a href="#">Monthly</a></li>
                                <li><a href="#">Quarterly</a></li>
                            </ul>
                            
                        </li>
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Purchases Report <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Monthly</a></li>
                                <li><a href="#">Quarterly</a></li>
                                <li><a href="#">Yearly</a></li>
                                
                            </ul>
                            
                        </li>
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ledger<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="custledger.php">Customers Ledger</a></li>
                                <li><a href="#">Suppliers Ledger</a></li>
                                <li><a href="tposdate.php">Ledger By Date</a></li>
                                <li><a href="#">Stock Worth By Departments</a></li>
                            </ul>
                            
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Sheets <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Customers</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Departments</a></li>
                            </ul>
                            
                        </li>
                    </ul>
                    
                </div>
                
            </div>
        </div>
        

        <?php
        // put your code here
        ?>
    </body>
</html>
