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
                font-weight: bold;
                font-family: Arial ;
                
            }
            
            td{
                font-weight: bold;
                color: black;
                border:1px #000000 solid;
            }
            
            #pack{
                text-align: center;
            }
            
            .jito{
                font-size: 0.85em;
                text-align: left;
                font-weight: bold;
            }
            
            .muke{
                font-size: 0.84em;
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
        $cash = $_SESSION['username'];
        $disc = $_POST['disc'];
        
        
        
        $daz = "select * from rooms where roomno = '$room'";
        $red = mysql_query($daz);
        $sx = mysql_fetch_assoc($red);
        $rate = $sx['rate'];
        
         //$jackk = "select checkin,checkout, datediff('$date2','$date1') as nodays from rooms where roomno = '$room'";
        $jackk = "select datediff('$date2','$date1') as pico";
        $vx = mysql_query($jackk); 
        $ara = mysql_fetch_assoc($vx);
        
        $nd = $ara['pico'];
        $tbx = $nd * $rate;
        $tdisc = $tbx * $disc * 0.01;
        $balance = $tbx - $pmt-$tdisc;
        
        
        
        $isi = "update rooms set checkin = '$date1',checkout = '$date2',customer = '$cname',bill = '$tbx',payment = '$pmt',balance = '$balance' where roomno = '$room'";
        mysql_query($isi) or die('cant update room table');
        
        $trf = "insert into bills(date,cashier,customer,date1,date2,room,rate,paid,discount)values(curdate(), '$cash', '$cname','$date1','$date2','$room','$rate', '$pmt','$disc')";
        mysql_query($trf);
        
        $rove = "update rooms set status = 'Occupied' where roomno = '$room'";
        mysql_query($rove);
        
        $dx = "select datediff(date2,date1) as nodays from bills where customer = '$cname' and date = curdate() ";
        
        $jack = "select billid, date, cashier,customer, date1,date2, datediff(date2,date1) as nodays,paid,room from bills where customer = '$cname' and date = curdate()";
        $fx = mysql_query($jack) or die('cant query');
        $fad = mysql_fetch_assoc($fx);
        //$ndayss = $fad['nodays'];
        $date11 = $fad['date1'];
        $date22 = $fad['date2'];
        $ndays = $fad['nodays'];
        $rec = $fad['bilid'];
        $total = $ndays * $rate;
        $paid = $fad['paid'];
        
        
        
        $ball = $total - $pmt - $tdisc;
        
        $fap = mysql_query($jack);
        
        $dd = mysql_fetch_assoc($fap);
        
        $val = "insert into status(date,roomno,hstatus)values(curdate(),'$room','checkin')";
        mysql_query($val) or die('cant insert');
        
        ?>
        
        
        <br><br>  
        <table class="table table-responsive table-bordered table-hover">
            <thead style=" text-align: center">
            
            <img src="images/sam.jpg"  class="img img-responsive img-rounded">
            <p class="jit">No 1,Komoe Street,Cadastral Zone A6</p>
            <p class="jit">Maitama,Abuja</p>
             <p class="jit">09-2902533</p>
            <p class="jit">Receiptno...... <?php echo $rec; ?>
            <p class="jit">Date...... <?php echo $date1; ?>
            <p class="jit">Guest Bill</p>

                
            </thead>
                    
                    <tr>
                        <td>Name Of Guest</td>
                        <td><?php echo $cname; ?></td>
                    </tr>
                    <tr>
                        <td>Check In Date</td>
                        <td><?php echo $date1; ?></td>
                    </tr>
                    
                    <tr>
                        <td>Check Out Date</td>
                        <td><?php echo $date2; ?></td>
                    </tr>
                    
                    <tr>
                        <td>Roomno</td>
                        <td><?php echo $room; ?></td>
                    </tr>
                    
                    
                    <tr>
                        <td>Room Rate</td>
                        <td><?php echo number_format($rate,2); ?></td>
                    </tr>
                    
                    <tr>
                        <td>No. Of Nights</td>
                        <td><?php echo $ndays ?></td>
                    </tr>
                    
                    <tr>
                        <td>Discount</td>
                        <td><?php echo number_format($tdisc,2); ?></td>
                    </tr>
                    
                    <tr>
                        <td class="nuke">Total Bill</td>
                        <td class="nuke"><?php echo number_format($total,2); ?></td>
                    </tr>
                    
                    
                    <tr>
                        <td class="nuke">Total Payment</td>
                        <td class="nuke"><?php echo number_format($pmt,2); ?></td>
                    </tr>
                    
                    
                    <tr>
                        <td class="nuke">Balance</td>
                        <td class="nuke"><?php echo number_format($ball,2); ?></td>
                    </tr>
                    
                </table>
                <p class="jit">Cashier.......<?php echo $cash; ?></p>
                    <p class="jito">*No refund of money after payment</p>
                    <p class="jito">*Check out time is 12noon</p>
                    
                     <p class="jito">*For late check in between 12.00am and 4.00am</p>
                    <p class="jito">Check out time still remains 12noon</p>
                    <p class="jito">*Always leave your key in the reception when going out</p>
                    <br>
                    <br>
                    <br>
                    <p id="pack">.............</p>
                   
                   
        
            
        
    </body>
</html>
