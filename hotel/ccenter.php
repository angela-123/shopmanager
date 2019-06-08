<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>COST CENTERS</title>
        <style>
            td{
                
                border: 1px #c0c0c0 solid;
            }
            
            
            th{
                width: 350px;
            }
        </style>
               
                        <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
    </head>
    <body>
        <script>
            $(document).ready(function(){
                
                $("#btn").click(function(){
                    
                    var cc = $("#cc").val();
                    
                    $.ajax({
                        type:"post",
                        url:"ctplace.php",
                        data:"cc="+cc,
                        
                        success:function(data)
                        {
                            $("#riot").html(data);
                        },
                        
                        error:function()
                        {
                            alert(new Date());
                        }
                                
                        
                    });
                });
                
            });
        </script>
        
        <div class=" container-fluid">
            <div class=" row">
                <div class="col-md-3">
            <label>Costcenter</label>
            <input type="text" id="cc" class=" form-control">
            <input type="button" id="btn" value="Save" class="btn btn-primary btn-lg">
        </div>
                <div id="riot" class="col-md-3"></div>
                
        </div>
        </div>
        
        <?php
        // put your code here
        ?>
        
        
         
    </body>
</html>
