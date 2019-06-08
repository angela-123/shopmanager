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
        <style>
            td{
                
                border: 1px #1b6d85 solid;
                background:  #888;
                color:  #fbcb09;
            }
            
            table{
                
                border: 1px #cccccc solid;
                width: 400px;
            }
            
            th{
                color: darkred;
                font-size: 12pt;
                background:  #1c94c4;
                
            }
            
            nobr
            {
               color:  #fbd850;
            }
            
            a{
                
                text-decoration:  none;
            }
            
            .toro{
                
                color: linen;
            }
            
            
            #maya{
                
                position:  absolute;
                top:50px;
                left: 460px;
                border: 1px #cccccc solid;
            }
            
            
            #joke{
                position: absolute;
                left: 460px;
                border: 1px #cccccc solid;
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
                
                $('.till').bind('click', function(){
                    
                    var cname = $(this).attr('id');
                    
                    $.ajax({
                        type:"post",
                        url:"syria.php",
                        data:"cname="+cname,
                        
                        success:function(data)
                        {
                            $("#maya").html(data);
                        },
                        
                        
                        error:function()
                        {
                            alert('No Network');
                        }
                        
                        
                        
                    });
                    
                });
                
            });
            
            
                
            
        </script>
        <script>
            
            $(document).ready(function(){
                
                $('.joke').bind('click', function(){
                    
                    var vane = $(this).attr('id');
                    
                    $.ajax({
                        
                        type:"post",
                        url:"mytomers.php",
                        data:"vane="+vane,
                        
                        success:function(data)
                        {
                            $("#joke").html(data);
                        },
                        
                        error:function()
                        {
                            alert('No Network');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        <?php
        $conn = mysql_connect('localhost','staff','angela');
         mysql_select_db(whites)or die('Cant connect');
         
         $sed = "select customername from customers";
         
         $res = mysql_query($sed);
         
         
        ?>
        
        
        <form>
            <table class="table-responsive">
            <thead>
            <th>
            <tr>
                <td>customername</td>
                <td>Data Entry</td>
                <td>Preview Records</td>
                
            </tr>
            </th>
        </thead>
            <tbody>
                
                <?php 
                
                        while ($row = mysql_fetch_array($res)) {
                            
                        
                 
                ?>
                <tr>
                    <td><a class="toro" href="#" id="<?php echo $row['customername']; ?>"><?php echo $row['customername']; ?></a></td><td><a href="#" id="<?php echo $row['dealername']; ?>" class="till"><nobr>Preview Records</nobr></a></td><td><a href="#" id="<?php echo $row['customername']; ?>" class="joke"><nobr>Add Records</nobr></a></td>
            <div id="maya" class="table-responsive" ></div>
            <div id="faya"></div>
            <div id="joke"></div>
                    
                    
                </tr>
            
                
                <?php 
                
                        }
                ?>
                
            </tbody>
        </table>
            
            <input type="b
                
        </form>
    </body>
</html>
