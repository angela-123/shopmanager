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
            .tulip{
                
                width: 60px;
                height: 60px;
                background:orangered;
                border: 0.87px #0000cc solid;
            }
        </style>
      
    </head>
    <body>
        <script>
            
            $(document).ready(function(){
                
                $('.tulip').bind('mouseenter',function(){
                    $("#roomno").val($(this).attr('id'));
                 
    
                    
                    var roomno = $(this).attr('id');
                   
                    $.ajax({
                        
                        type:"post",
                        url:"rstatus.php",
                        data:"room="+roomno,
                        
                        success:function(data)
                        {
                            $("#dito").html(data);
                        },
                        
                        error:function()
                        {
                            $("#dito").html('Not Connected');
                        }
                        
                    });
                    
    });
    
    
    
    });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                     <?php
                    $conn = mysql_connect('localhost','staff','angela');
                     mysql_select_db(hotels)or die('Cant connect');
                     $ws = "select roomno from rooms";
                     $kaya = "select ptype from mopmt";
                     //$abd = mysql_query($kaya) or die('cant select');
                     $wss = mysql_query($ws);
                     
                     while ($roww = mysql_fetch_assoc($wss))
        {
            echo '<button class = "tulip" id =' .$roww['roomno'] .'>' .'<nobr>'.$roww['roomno'].'</nobr>'.'</button>';
        }
          
        
        ?>
                    <hr>
                    
                </div>
                <div id="dito"></div>
            </div>
        </div>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
