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
            .jit{
                text-align: center;
                
            }
            
            td{
                font-weight: bold;
                color: black;
            }
        </style>
    </head>
    <body>
        <?php
          $conn = mysql_connect('localhost','staff','angela');
        mysql_select_db(hotels)or die('Cant connect');
        
        $cname = $_POST['cname'];
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];
        $room = $_POST['room'];
        $pmt = $_POST['pmt'];
        $disc = $_POST['disc'];
        
        $daz = "select * from rooms where roomno = '$room'";
        $red = mysql_query($daz);
        $sx = mysql_fetch_assoc($red);
        $rate = $sx['rate'];
        
        $trf = "insert into bills(date,cashier,customer,date1,date2,room,discount,status)values(curdate(), 'na', '$cname','$date1','$date2','$room', '$disc','Occupied')";
        mysql_query($trf);
        
        
        $dx = "select datediff(date2,date1) as nodays from billings where customer = '$cname' and date = curdate() ";
        
        
        $jack = "select date, cashier,customer, date1,date2, datediff(date2,date1) as nodays,room from bills where customer = '$cname' and date = curdate()";
        $fx = mysql_query($jack) or die('cant query');
        $fad = mysql_fetch_assoc($fx);
        //$ndayss = $fad['nodays'];
        $date11 = $fad['date1'];
        $date22 = $fad['date2'];
        $ndays = $fad['nodays'];
        $total = $ndays * $rate;
        $mydisc = $total * $disc * 0.01;
        $gtotal = $total - $mydisc;
        $paid = $fad['paid'];
        
        
       
        
        
        
        ?>
        <h3 style=" background: whitesmoke;">Total Bill:.....<?php echo number_format($total); ?></h3>
        <h3 style=" background: whitesmoke;">Discount:.....<?php echo number_format($mydisc,2); ?></h3>
         <h3 style=" background: whitesmoke;">To Pay:.....<?php echo number_format($gtotal); ?></h3>
        
    </body>
</html>
