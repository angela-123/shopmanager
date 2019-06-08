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
                
                $("#btn").click(function(){
                    
                    var dt1 = $("#dte1").val();
                    var dt2 = $("#dte2").val();
                    var dt3 = $("#dte3").val();
                    var rm = $("#room").val();
                    var amt = $("#amt").val();
                    var details = $("#details").val();
                    var gname = $("#gname").val();
                    
                    
                    $.ajax({
                        type:"post",
                        url:"revs.php",
                        data:"dte1="+dt1+"&dte2="+dt2+"&rm="+rm+"&amt="+amt+"&details="+details+"&gname="+gname+"&dte3="+dt3,
                        
                        success:function(data)
                        {
                            $("#shiloh").html(data);
                        },
                        
                        error:function()
                        {
                            $("#shiloh").html('Not Connected');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        <div class=" container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <label>Date</label>
                    <input type="date" id="dte1" class="form-control">
                    <label>Guest Name</label>
                    <input type="text" id="gname" class=" form-control">
                    <label>Start Date For Reservation</label>
                    <input type="date" id="dte2" class=" form-control">
                     <label>End Date For Reservation</label>
                    <input type="date" id="dte3" class=" form-control">
                    
                    
                    <label>Room#</label>
                    <input type="text" id="room" class="form-control">
                    <label>Payment</label>
                    <input type="number" id="amt" class="form-control">
                    <label>Details</label>
                    <input type="text" id="details" class="form-control">
                    <input type="button" id="btn" class="btn btn-primary btn-lg" value="Update" style=" background: orangered;">
                    
                    
                </div>
                <div id="shiloh" class="col-md-4"></div>
            </div>
            
        </div>
              <script>
            $(function(){
                
                $("#dte1").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>
              <script>
            $(function(){
                
                $("#dte2").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>
    <script>
            $(function(){
                
                $("#dte3").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>

        <?php
        // put your code here
        ?>
    </body>
</html>
