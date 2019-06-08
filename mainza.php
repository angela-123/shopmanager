<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app = "myApp">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <title>BEAUTY PARLOUR</title>
        <style> 
            
           
            
           #mynavy a{
                color:yellow;
                font-size: 1.4em;
                font-family:tahoma;
            }
            
           .dropdown ul,dropdown-toggle ul{
                color: darkred;
                background:black;
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

            #ploho{
                display:none;
            }
            
            
        </style>
‪               
       <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
           
          <script src="js/jquery-1.11.3.js"></script>
          <script src = "js/angular.min.js"></script>
          <script src = "js/angular-route.min.js"></script>
        ‪<script src="js/bootstrap.min.js"></script>
 
    </head>
    <body onload="adx();">
        
        <?php //session_start(); ?>
        
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
                    
                    <a class="navbar-brand brand" href="#" style=" background: orangered; font-size: 3em;font-style:italic; color:orange;" id = "ploho">JESSI BEAUTY STUDIO</a>
                    
                </div>
                
                <div class="collapse navbar-collapse navbar-center" id="mynavbar-content" style=" background:blue; color:orangered;">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Start<b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:darkblue;">
                                
                                
                                
                                
                                
                                
                                <li><a href="#!items">Register Products</a></li>
                                
                                <li><a href="#!prodsedit">Update Products</a></li>
                                
                                <li><a href="#!dcustomer">Customers</a></li>
                                
                                
                                
                                
                                
                                <li><a href="#!users">Create Users</a></li>
                                <li><a href="#!remuser">Remove User</a></li>
                                
                                
                            </ul>
                        </li>
                        
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Transactions<b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: brown;">
                                <li><a href="#!retails">Point Of Sales</a></li>
                                <li><a href="#!wsales">Whole Sales</a></li>
                                <li><a href="#!tpurch">Stock In</a></li>
                                <li><a href="#!allmana">Customer Opening Balance</a></li>
                                <li><a href="#!allman">Deposits-Payments-Others</a></li>
                                
                                
                                
                                
                            </ul>
                        </li>
                        
                        
                       
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="">Sales Reports <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:navy;">
                                <li><a href="#!dinvoice">Sales Invoice Analysis</a></li>
                                <li><a href="#!dinvoicesum">Transactions Summary</a></li>
                                
                                
                                
                                
                                
                            </ul>
                            
                        </li>
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Purchases Report <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:amber;">
                                <li><a href="#!mpurchases">Stock In </a></li>
                                
                                
                                
                            </ul>
                            
                        </li>
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ledger<b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:  #e78f08;">
                                <li><a href="#!custledger">Customers Ledger</a></li>
                                
                                
                                
                                
                                
                                
                                
                            </ul>
                            
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stock Reports <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:brown;">
                                <li><a href="#!stockreps">Stock Sheet</a></li>
                           
                                                       <li><a href="#!stockrepall">Stock Worth</a></li>
             
                                <li><a href="#!search">Stock Search</a></li>
                                
                                
                            </ul>
                            
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Edits <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:silver;">
                                
                               
                               <li><a href="#!updateprods">Edit Product Stock Balance</a></li>
                                
                            </ul>
                            
                        </li>
                        
                        
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Reports <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: #a6e1ec;">
                                
                                <li><a href="#!stocktaking">Stock Taking Sheet</a></li>
                                
                                
                                
                                
                                
                            </ul>
                            
                            
                            
                        </li>
                    </ul>
                    
                </div>
                
            </div>
        </div>

        <div ng-view></div>






        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" id="max">
                   
                    
                    <div class="row">
                        
                        
                    </div>
                    
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
$("#ploho").fadeIn(5000);
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
       
        <script>
             $("a").mouseover(function(){
            this.style.color = 'darkblue';
            $("a").mouseout(function(){
                this.style.color = "yellow";

            });

        });
        </script>


<script>
                    var angela = angular.module('myApp',['ngRoute']);
                    angela.config(function($routeProvider){
                        $routeProvider.when("/",{

                            templateUrl:'jessihome.html'

                        }).when("/items",{

                            templateUrl:'items.php'
                        }).when('/prodsedit',{

                            templateUrl:'prodsedit.php'
                        }).when('/dcustomer',{

                            templateUrl:'dcustomers.php'
                        }).when('/users',{
                            templateUrl:'users.php'
                        }).when('/remuser',{

                            templateUrl:'remuser.php'
                        }).when('/retails',{
                            templateUrl:'retails.php'
                        }).when('/tpurch',{
                            templateUrl:'updateprice.php'
                        }).when('/tpurch',{
                            templateUrl:'tpurch.php'
                        }).when('/allmana',{
                            templateUrl:'allmana.php'
                        }).when('/allman',{
                            templateUrl:'allman.php'
                        }).when('/dinvoice',{
                            templateUrl:'dinvoice.php'
                        }).when('/dinvoicesum',{
                            templateUrl:'dinvoicesum.php'
                        }).when('/mpurchases',{
                            templateUrl:'mpurchases.php'
                        }).when('/custledger',{
                            templateUrl:'custledger.php'
                        }).when('/stockreps',{
                            templateUrl:'stockreps.php'
                        }).when('/stockrepall',{
                            templateUrl:'stockrepall.php'
                        }).when('/search',{
                            templateUrl:'search.php'
                        }).when('/updateprods',{
                            templateUrl:'updateprods.php'
                        }).when('/stocktaking',{
                            templateUrl:'stocktaking.php'
                        }).when('/wsales',{

                            templateUrl:'wsalesnew.php'
                        }).when('/yrs',{

                            templateUrl:'yrrsales.php'
                        }).when('/mtsales',{
                            templateUrl:'mtsales.php'
                        }).when('/mtsaless',{
                            templateUrl:'mtsalescash.php'
                        }).when('/cashperf',{
                            templateUrl:'cashierperf.php'
                        }).when('/mpurch',{
                            templateUrl:'mpurchases.php'
                        }).when('/dhist',{
                            templateUrl:'dhist.php'
                        }

                        ).when('/dashboard',{
                            templateUrl:'dashboard.php'
                        }).when('/stock',{

                            templateUrl:'stock.php'
                        }).when('/audit',{

                            templateUrl:'audit.php'
                        }).when('/worth',{
                            templateUrl:'stockwrth.php'
                        }).when('/count',{
                            templateUrl:'stockcount.php'
                        }).when('/supas',{
                            templateUrl:'supayments.php'
                        }).when('/edits',{
                            templateUrl:'edits.php'
                        }).when('/editprods',{
                            templateUrl:'editprods.php'
                        })


                    });

                    </script>

    </body>
</html>
