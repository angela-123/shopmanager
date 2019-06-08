<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
        <title></title>
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
                
                $("#btp").click(function(){
                    
                    var loc = $("#loc").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"stash.php",
                        data:"loc="+loc,
                        
                        
                        success:function(data)
                        {
                            $("#bili").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#bili").html('Bros, No Network');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="form-control" style=" background:  #e4b9b9;">Location</label>
                        <select id="loc" class="form-control">
                            <option value="samsung">Samsung</option>
                            <option value="magnelli">Magnelli</option>
                        </select>
                        <button class="btn btn-primary btn-lg" id="btp">View Stock</button>
                        
                    </div>
                    
                    <div id="bili"></div>
                    
                </div>
                
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
