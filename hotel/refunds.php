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
                $("#btx").click(function(){
                    
                    var date = $("#date").val();
                    var room = $("#room").val();
                    var gname = $("#gname").val();
                    var amt = $("#amt").val();
                    var det = $('#details').val();
                    var date1 = $("#dte1").val();
                    var date2 = $("#dte2").val();
                    
                    
                    $.ajax({
                        type:"post",
                        url:"tbala.php",
                        data:"date="+date+"&room="+room+"&gname="+gname+"&amt="+amt+"&det="+det+"&date1="+date1+"&date2="+date2,
                        
                        success:function(data)
                        {
                            $("#yam").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#yam").html('Not Connected');
                        }
                        
                    });
                    
                    
                    $.ajax({
                        type:"post",
                        url:"tbalance.php",
                        data:"date="+date+"&room="+room+"&gname="+gname+"&amt="+amt+"&det="+det+"&date1="+date1+"&date2="+date2,
                        
                        success:function(data)
                        {
                            $("#ayam").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#ayam").html('Not Connected');
                        }
                        
                    });
                    
                    
                    
                });
                
                
                
            });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <label>Date</label>
                    <input type="date" id="date" class="form-control">
                    <label>Room#</label>
                    <input type="text" id="room" class="form-control">
                    <label>Amount Refunding</label>
                    <input type="number" id="amt" class="form-control">
                    <input type="button" id="btx" class="btn btn-primary btn-lg" value="Update">
                    
                </div>
                <div id="yam" class="col-md-3"></div>
                <div id="ayam" class="col-md-4"></div>
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
        <script>
          $(function(){
                
                $("#date").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>
    </body>
</html>
