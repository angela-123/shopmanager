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
        <?php
         $nas = mysql_connect('localhost','staff','angela');
         mysql_select_db(hotels);
         $date = $_POST['date'];
         //$gname = $_POST['gname'];
         $room = $_POST['room'];
         $amt = $_POST['amt'];
         $det = $_POST['det'];
         $cashier = $_SESSION['username'];
         
         $eu = "select * from rooms where roomno = '$room'";
         
         $maya = mysql_query($eu);
         $tuf = mysql_fetch_assoc($maya);
         $gname = $tuf['customer'];
         $checkin = $tuf['checkin'];
         $checkout = $tuf['checkout'];
         
         $jag = "update rooms set payment = payment + $amt,balance = balance - $amt where roomno = '$room'";
         mysql_query($jag) or die('cant update rooms');
          $ky = "insert into balances(date,roomno,customer,amount,cashier,details)values('$date','$room', '$gname','-$amt','$cashier','$det')";
          mysql_query($ky) or die('cant balances');
          $exd = "insert into bills(date,cashier,customer,date1,date2,room,paid,bpmt,refund)values('$date','$cashier','$gname','$checkin','$checkout',  '$room',0,'0',  '$amt')";
          
          mysql_query($exd);
          
          $china = "select * from balances where customer = '$gname' and roomno = '$room'";
          $gad = mysql_query($china);
          
          $row = mysql_fetch_assoc($gad);
          
          
          
         
         
        ?>
        
        <table class="table table-responsive table-hover table-bordered table-striped">
            <thead>
            <img src="images/sam.jpg" width="300" class="img img-responsive img-rounded">
            </thead>
            <tbody>
                <tr>
                    <td>Receipt#</td>
                    <td><?php echo $row['bid'];?></td>
                </tr>
                
                <tr>
                    <td>Guest Name</td>
                    <td><?php echo $row['customer'];?></td>
                </tr>
                
                <tr>
                    <td>Room#</td>
                    <td><?php echo $row['roomno'];?></td>
                </tr>
                <tr>
                    <td>Receipt#</td>
                    <td><?php echo $row['bid'];?></td>
                </tr>
                <tr>
                    <td>Payment</td>
                    <td><?php echo $row['amount'];?></td>
                </tr>
                <tr>
                    <td>Payment Received By</td>
                    <td><?php echo $_SESSION['username'];?></td>
                </tr>
                
            </tbody>
            
        </table>
    </body>
</html>
