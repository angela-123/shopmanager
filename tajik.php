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
        <style>
            #fexx{
                position:  absolute;
                top: 250px;
                left: 310px;
                border: 1px;
                width: 400px;
                height: 300px;
                border: 2px #c09853 solid;
            }
            
            input[type = "button"]{
                width: 100px;
                height: 50px;
                border: 1px #fef1ec solid;
                background:  #7699d1;
                font-size: 12pt;
            }
            
            h3{
                position: absolute;
                left: 390px;
                top:200px;
                color:  #c43c35;
            }
            
            
            #autoxp{
                
                top:350px;
            }
            
            label{
                font-size: 14pt;
                color: darkred;
                font-weight:  bold;
            }
            
            #mid{
                position: relative;
                left: 100px;
                top:40px;
            }
            
            body{
                background:white;
            }
            
            #tuliop{
                position: absolute;
                left: 400px;
                top:250px;
                color: red;
                font-size: 35pt;
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
    <body>
        
        <script>
            $(document).ready(function(){
            $("#save").click(function()
            {  
                
               //var date = $("#dte").val();
               var username = $("#usname").val();
               var password = $("#pswd").val();
               //var shift = $("#shift").val();
               
               //var qty = $("#qty").val();
              
              //var recno = $("#recno").val();
              
                
                $.ajax({
                    type:"POST",
                    url:"tadop.php",
                    //data:"rdate="+date+"&guestname="+gname+"&menuitem="+kode+"&qty="+qty+"&rate="+rate+"&recno="+recno;
                    data:"username="+username+"&password="+password,
                     
                    success:function(data)
                    {
                       $("#info").html(data);
                       $("#tulio").html(data);
                       $("#autox").fadeOut(100);
                       
                       
                    },
                    
                    error:function(data)
                    {
                        $("#info").html(data);
                        
                        
                    }
                    
                    
                });
            }
                    
                    );
            
    });
        </script>
        <div class="container-fluid" id="autox">
            <div class="row" style="">
                <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-control" style=" text-align: center; background:  #afd9ee;">AUTHENTICATION</label>
                    <label class="form-control">Username</label>
                    <input type="text" id="usname" class="form-control">
                    <label class="form-control">Password</label>
                    <input type="password" id="pswd" class="form-control">
                    <input type="button" class="btn btn-primary btn-lg" value="Login" id="save">
                    
                    <h4 style=" color: darkred; font-family: tahoma; text-align: center;">SAMSUNG LOGIN</h4>
                    
                </div>
                
            </div>
            </div>
        </div>
        
        <div id="tulio">
        </div>
        
        </script>

      <script type="text/javascript">
	$("#flex").dialog(
			{
			show:"slide",
			    hide:"puff",
			    height:"auto",
			    width:"560",
			    position:"center"
			    
			    	
			}
			
			);
	</script>
        
        
    </body>
</html>
