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

    </head>
    
    <body>
        
        <script>
            $(document).ready(function(){
                
                
                $("#btc").click(function(){
                    
                    
                    var dept = $("#dept").val();
                    
                    $.ajax({
                        
                        type:"post",
                        url:"mydepts.php",
                        data:"dept="+dept,
                        
                        success:function(data)
                        {
                            $("#btview").html(data);
                        },
                        
                        
                        error:function()
                        {
                            alert('No Network');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="form-control" style=" background:  #0088cc;">Category</label>
                        <input class="form-control" id="dept" placeholder="category">
                        <button class=" btn btn-primary btn-lg " id="btc">Save</button>
                        <button class="btn btn-primary btn-lg" id="btview">Category</button>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
