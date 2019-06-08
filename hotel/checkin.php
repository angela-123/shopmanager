<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CHECKIN</title>
        <style>
            .cholo{
                display: none;
            }
            
            #checkin,#btc{
                display: none;
            }
            
        </style>
 
    </head>
    <body>
        <script>
            $(document).ready(function(){
                
                $("#check").click(function(){
                    
                    $(".cholo").fadeIn(2000);
                    $("#add").fadeOut(2000);
                    $("#ad").fadeOut(2000);
                    //$("#phone").fadeOut(2000);
                    //$("#ph").fadeOut(2000);
                    $("#check").fadeOut(2000);
                    $("#btn").fadeOut(2000);
                    $("#btc").fadeIn(2000);
                    $("#checkin").fadeIn(2000);
                    $('#reg').fadeOut(2000);
                    
                    
                    
                });
                
                
                $("#reg").click(function(){
                    
                    var cname = $("#cname").val();
                    var add = $("#add").val();
                    var phone = $('#phone').val();
                    
                    //alert(new Date());
                    $.ajax({
                        
                        type:"post",
                        url:"postguests.php",
                        data:"cname="+cname+"&add="+add+"&phone="+phone,
                        
                        success:function(data)
                        {
                            $("#ganya").html(data);
                        },
                        
                        
                        error:function()
                        {
                            $("#ganya").html('Not Connected');
                        }
                        
                    });
                    
                });
                
                $("#checkin").click(function(){
                    
                     var cname = $("#cname").val();
                     var room = $("#room").val();
                     var date1 = $("#date1").val();
                     var date2 = $("#date2").val();
                     var pmt = $("#pmt").val();
                     var disk = $("#disc").val();
                     var phone = $("#phone").val();
                     
                     
                     $.ajax({
                         type:"post",
                         url:"bill.php",
                         data:"cname="+cname+"&room="+room+"&date1="+date1+"&date2="+date2+"&pmt="+pmt+"&disc="+disk+"&phone="+phone,
                         
                         
                         success:function(data)
                         {
                             $("#fax").html(data);
                         },
                         
                         
                         error:function()
                         {
                             $("#fax").html('Not Connected');
                         
                          }
                         
                     });
                     
                });
                
                $("#pmt").blur(function(){
                    
                    var cname = $("#cname").val();
                     var room = $("#room").val();
                     var date1 = $("#date1").val();
                     var date2 = $("#date2").val();
                     var pmt = $("#pmt").val();
                     var disc = $("#disc").val();
                     
                     
                     $.ajax({
                         type:"post",
                         url:"bills.php",
                         data:"cname="+cname+"&room="+room+"&date1="+date1+"&date2="+date2+"&pmt="+pmt+"&disc="+disc,
                         
                         
                         success:function(data)
                         {
                             $("#fax").html(data);
                         },
                         
                         
                         error:function()
                         {
                             $("#fax").html('Not Connected');
                         
                          }
                         
                     });
                    
                });
                
                
            });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <label>Customer Name</label>
                    <input type="text" id="cname" class="form-control">
                    <label id="ad">Address</label>
                    <input type="text" id="add" class="form-control">
                    <label id="ph">Phone#</label>
                    <input type="text" id="phone" class="form-control">
                    <div class="cholo">
                    <label>Room#</label>
                    <input type="text" id="room" class="form-control">
                    <label>Checkin Date</label>
                    <input type="date" id="date1" class="form-control">
                    <label>Checkout Date</label>
                    <input type="date" id="date2" class="form-control">
                    <label>Discount</label>
                    <input type="number" id="disc" class="form-control" value="0">
                    
                    <label>Payment</label>
                    <input type="number" id="pmt" value="0" class="form-control">
                    </div>
                    <input type="button" id="reg" value="Register Guest" class="btn btn-primary btn-lg" style=" background:orange;">
                    <input type="button" id="check" value="CheckinUI" class="btn btn-primary btn-lg" style=" background:orange;">
                    <input type="button" id="checkin" value="Check In Guest" class="btn btn-primary btn-lg" style=" background:orange;">
                    <input type="button" id="btc" value="Print Receipt" class="btn btn-primary btn-lg"  onclick="printDiv('fax')" style=" background: orangered;">
                    <div id="ganya"></div>
                </div>
                
                <div id="fax" class="col-md-3 col-md-offset-3"></div>
                
            </div>
            
        </div>
        
        
        
                                         <script type="text/javascript">
    function printDiv(divID)
    {   //var dte = document.getElementById('hy');
     //dte = new Date();
        var divElements = document.getElementById(divID).innerHTML;

        var oldpage = document.body.innerHTML;

        document.body.innerHTML = "<html><head><title></title></head><body><table title = INTENT ENERGY SOLUTIONS>" +divElements + "</table></body>";
        
        window.print();
        
        
        

        document.body.innerHTML = oldpage; 
        //document.forms["dag"].refresh();
        window.location.reload();
        
    }
    </script>
        
                        
        <script type="text/javascript">
$("input#room").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "rms.php",
data : data,
complete : function (xhr, result)
{
if (result != "success") return;
var response = xhr.responseText;
var books = [];
$(response).filter ("li").each (function ()
{
books.push ($(this).text ());
});
callback (books);
}
});
}
});
</script>

      <script>
            $(function(){
                
                $("#date1").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>
        
        
        
              <script>
            $(function(){
                
                $("#date2").datepicker({
                    
                    dateFormat:"yy-mm-dd"
                    
                });
            });
        </script>


        
        <?php
        // put your code here
        ?>
    </body>
</html>
