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
                background: #1c94c4;
            }
            
           li{
                color:  #cd0a0a;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="libs/jquery-1.11.2.min.js"></script>
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
                                <li><a href="items.php">Initialize Stock</a></li>
                                <li><a href="items.php">Preview Products</a></li>
                                
                            </ul>
                        </li>
                        
                        
                        
                        <li><a href="tpos.php">Point Of Sales</a></li>
                        <li><a href="#">Purchases</a></li>
                        
                        
                    </ul>
                    
                </div>
                
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
