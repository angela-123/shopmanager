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
                
                $("#bts").click(function(){
                    
                    var from = $("#from").val();
                    var to = $("#to").val();
                    var inn = $("#chkin").val();
                    var out = $("#cout").val();
                    
                    $.ajax({
                        type:"post",
                        url:"swp.php",
                        data:"from="+from+"&to="+to+"&in="+inn+"&out="+out,
                        
                        success:function(data)
                        {
                            $("#work").html(data);
                        },
                        
                        error:function()
                        {
                            $("#work").html('Not Connected');
                        }
                    });
                    
                });
                
            });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <label>Swap From</label>
                    <input type="number" id="from" class="form-control">
                    <label>Swap To</label>
                    <input type="number" id="to" class="form-control">
                    <label>Checkin</label>
                    <input type="date" id="chkin" class="form-control">
                    <label>Checkout</label>
                    <input type="date" id="cout" class="form-control">
                    
                    <input type="button" id="bts" class="btn btn-primary btn-lg" value="Swap">
                </div>
                <div class="col-md-4" id="work"></div>
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
