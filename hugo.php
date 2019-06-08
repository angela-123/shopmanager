<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJHIL LIMITED</title>
                                        
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
                
                $("#btnn").click(function(){
                    
                    var dept = $("#dept").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"dept.php",
                        data:"dept="+dept,
                        
                        success:function(data)
                        {
                            $("#yaya").html(data);
                            $("#dept").val('');
                        },
                        
                        error:function()
                        {
                            alert(new Date());
                        }
                        
                    });
                    
                });
                
            });
        </script>
        <form class="form">
            <div class="form-group col-md-4">
            <label>Department</label><br>
            <input type="text" id="dept" class="form-control" placeholder="Enter Department Name"><br>
            <input type="button" id="btnn" value="update" class="btn btn-primary">
            <div id="yaya" class="well-sm">
                
            </div>
            </div>
            
        </form>
        
        <div id="ken"></div>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
