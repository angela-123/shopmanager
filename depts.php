<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>DEPARTMENTS</title>
        <style>
            label{
                
                color: darkblue;
                font-weight:  bolder;
                font-size: 1.4em;
            }
            
            input[type = "button"]
            {   position: absolute;
                width: 30%;
                height: 55%;
            }
            
            #popo{
                
                position:  absolute;
                bottom:60%;
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
                
                $("#btn").click(function(){
                    
                    var depname = $("#dname").val();
                    
                    $.ajax({
                        type:"post",
                        url:"regdepts.php",
                        data:"dept="+depname,
                        
                        success:function(data)
                        {
                            $("#ziko").html(data);
                            $("#dname").val('');
                        },
                        
                        error:function()
                        {
                            alert('No Network');
                        }
                        
                    });
                    
                });
                
                
            });
        </script>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="control-label col-sm-4">Department</label>
                <input type="text" class="form-control">
                
                
            </div>
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
