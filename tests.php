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
                                   
                        <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
               
‪<!-- Optional Bootstrap theme -->
‪
          <script src="js/bootstrap.min.js"></script>  
    </head>
    <body>
        <script>
        $(document).ready(function(){
                
                $("#slash").click(function(){
                    
                    
                    //$("#rate").val('5600');
                    
                    var pname = $("#pname").val();
                    
                    
                    
                    $.ajax({
                        type:"post",
                        url:"price.php",
                        data:"pname="+pname,
                        
                        
                        success:function(data)
                        {
                           
                           
                            $("#rate").val(data.Value);
                            //alert($("#rate").val(parseInt(data)));
                            
                            
                           
                            
                            
                        },
                        
                        
                        error:function()
                        {
                            $("#rate").val('89000');
                        }
                        
                    });
                    
                });
                
            });
            </script>
        <?php
        // put your code here
        ?>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group">
                        <label class="form-control">Productname</label>
                        <input type="text" id="pname" class="form-control">
                        <label class="form-control">Rate</label>
                        <td id="rate" contenteditable="true"></td>
                            
                        </div>
                        <button id="slash">Push</button>
                        
                    </div>
                    
                </div>
                
            </div>
    </body>
</html>
