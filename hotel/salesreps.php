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
    </head>
    <body>
        <script>
            $(document).ready(function(){
                
                $("#btj").click(function(){
                    var start = $("#start").val();
                    var end = $("#end").val();
                    var cashier = $("#cash").val();
                    
                    $.ajax({
                        type:"post",
                        url:"sreps.php",
                        data:"start="+start+"&end="+end+"&cashier="+cashier,
                        
                        success:function(data)
                        {
                            $("#mono").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#mono").html('Not Connected');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <label>Start Date</label>
                    <input type="date" id="start" class="form-control">
                    <label>End Date</label>
                    <input type="date" id="end" class="form-control">
                    <label>Cashier</label>
                    <input type="date" id="cash" class="form-control">
                    <input type="button" id="btj" class="btn btn-primary btn-lg" value="Preview">
                    
                </div>
                <div id="mono" class="col-md-4"></div>
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
