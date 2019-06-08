 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>AUTHENTICATION</title>
        <style>
            
            body{
                
                background:  #1b6d85;
            }
            .container{
                position: absolute;
                top:25%;
                left:30%;
               
            }
            
            p{
                color:  #265a88;
               
            }
            
            a{
                
                position:  absolute;
                top:35%;
                left: 30%;
                color: darkred;
                font-size: 1.4em;
                text-decoration:  none;
            }
            
            
            #jana{
                
                position: absolute;
                top:40%;
                left: 30%;
                    
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
    <body style="background:lightseagreen">
        <script>
            $(document).ready(function(){
                
                $("#btnn").click(function(){
                    
                    var usname = $("#usname").val();
                    var pswd = $("#pswd").val();
                    
                    
                    $.ajax({
                        
                        type:"post",
                        url:"mala.php",
                        data:"usname="+usname+"&pswd="+pswd,
                        
                        
                        success:function(data)
                        {
                            $("#kolo").html(data);
                           $(".form").fadeOut(100);
                           $("#conn").fadeOut(100);
                           $("p").fadeOut(100);
                           $("#cta").fadeOut(100);
                        },
                        
                        error:function(rata)
                        {
                            $("#kolo").html(rata);
                            $("#kolo").show();
                            $("p").fadeOut();
                        }
                        
                    });
                    
                });
                
            });
        </script>
        
        
        <div class="container-fluid">
        
            <div class="row">
                
                    
                    
                
                
            </div>
            
        </div>
        
        
        
        
        <form class="form">
            <div class="container-fluid">
                <div class="row">
                
                    <div class="form-group col-sm-6 col-md-5 col-lg-6 col-lg-offset-3 jumbotron" style="background:blueviolet" id="miki">
            <label>User Name</label><br>
            <input type="text" id="usname" class="form-control glyphicon-arrow-down" placeholder="Enter Username"><br>
            <label>Password</label>
            <input type="password" class="form-control" placeholder="your password" id="pswd">
            <input type="button" id="btnn" value="Login" class="btn btn-primary btn-lg">
            <div id="yaya" class="well-sm">
                
            </div>
            </div>
                </div> 
            </div>
        </form>
        <div id="kolo"></div>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
