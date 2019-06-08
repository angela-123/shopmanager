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
                
                $("#dox").click(function(){
                    
                    var recno = $("#rec").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"cala.php",
                        data:"rec="+recno,
                        
                        success:function(data)
                        {
                            $("#cnn").html(data);
                        },
                        
                        error:function()
                        {
                            $("#cnn").html('No Network');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label class="form-control" style=" background:  #ec971f;">Receipt#</label>
                        <input type="number" id="rec" class="form-control">
                        <button class="btn btn-primary btn-lg" id="dox">View Sales</button>
                        
                    </div>
                    
                    <div id="cnn"></div>
                    
                </div>
                
            </div>
            
        </div>
        
        
    </body>
</html>
