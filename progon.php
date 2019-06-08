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
        <style>
            #fex{
                
               
                border: 0px #c09853 solid;
                
            }
            
            #arama{
                
                font-size: 2.5em;
               
                
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
            
            
            input[type = "text"]
            {
                font-size: 11pt;
                color:darkblue;
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
        
        <?php 
        
        session_start();
        ?>
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
                    url:"newjogger.php",
                    //data:"rdate="+date+"&guestname="+gname+"&menuitem="+kode+"&qty="+qty+"&rate="+rate+"&recno="+recno;
                    data:"username="+username+"&password="+password,
                     
                    success:function(data)
                    {
                       $("#info").html(data);
                       $("#tulio").html(data);
                       
                       $("#fex").fadeOut(100);
                       
                       
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
        <div class="container-fluid">
        
            <div id="fex" class="row">
            
            <div  id ="mid" class=" col-md-4 col-md-offset-3" >
                <div class="form-group">
                <label class="form-control" style=" text-align:  center; color:  #000099; font-size: 1.5em; background: #c43c35;">AUTHENTICATION</label>
                <label class="form-control" style=" background: #149bdf;">Username</label><br>
                <input type="text" name="usname" id="usname" class="form-control"><br>
                <label class="form-control" style=" background:  #66afe9;">Password</label><br>
                <input type="password" name="pswd" id="pswd" class="form-control"><br>
            
                <input type="button" value="login" id="save" class="btn bg-primary btn-lg">
                </div>
            <div id="info"></div>
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
