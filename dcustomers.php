<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <title></title>
        
        <style>
            .form-control{
                
                background: wheat;
            }
        </style>
                                        
      <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
          <script src="js/bootstrap.min.js"></script>  
          <script src="js/jquery-1.11.3.js"></script>
        ‪<script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <script>
            $(document).ready(function(){
                
                
                $("#btn").click(function(){
                    var cname = $("#cname").val();
                    var address = $("#add").val();
                    var phone = $("#phone").val();
                    var email = $("#email").val();
                    var limit = $("#limit").val();
                    var disc = $("#disc").val();
                    
                    
                    $.ajax({
                        type:"post",
                        url:"custdetails.php",
                        data:"cname="+cname+"&address="+address+"&phone="+phone+"&email="+email+"&limit="+limit+"&disc="+disc,
                        
                        
                        success:function(data)
                        {
                            $("#ayo").html(data);
                        },
                        
                        
                        error:function()
                        {
                            alert('No Service');
                        }
                        
                        
                    });
                    
                    
                    
                });
                
            });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
            <div class="form-group" >
                
                <label class="form-control" style=" background:  lightblue;">Customername</label>
                <input type="text" id="cname" class="form-control">
                
                <label class="form-control" style=" background:  lightskyblue;">Address</label>
                <input type="text" id="add" class="form-control">
                <label class="form-control" style=" background:  lightblue;">Phone#</label>
                <input type="text" id="phone" class="form-control">
                
                
                
                <input type="button" id="btn" value="update" class="btn btn-primary btn-lg">
            </div>
                </div>   
            <div id="ayo" class="col-md-5"></div>
            </div>
            </div>
        </div>
        <?php
        
        ?>
    </body>
</html>
