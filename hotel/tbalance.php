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
         $date1 = $_POST['date1'];
         $date2 = $_POST['date2'];
         $cashier = $_SESSION['username'];
         
         $data = "select * from rooms where roomno = '$room'";
         
         $tes = mysql_query($data);
         
         $cak = mysql_fetch_assoc($tes);
         
         $totbill = $cak['bill'];
         $pmtx = $cak['payment'];
         $balx = $cak['balance'];
         $checkin = $cak['checkin'];
         $checkout = $cak['checkout'];
         $rate = $cak['rate'];
         $gname = $cak['customer'];
                 
          $jackk = "select datediff('$checkout','$checkin') as pico";
        $vx = mysql_query($jackk); 
        $ara = mysql_fetch_assoc($vx);
        
        $nd = $ara['pico'];
          
          
         
         
        ?>
        
        <table class="table table-responsive table-hover table-bordered table-striped">
            <thead>
            <img src="images/sam.jpg" width="300" class="img img-responsive img-rounded">
            </thead>
            <tbody>
                <tr>
                    <th>Bill Summary</th>
                    
                </tr>
                
                <tr>
                    <td>Date</td>
                    <td><?php echo $date;?></td>
                </tr>
                
                
                
                <tr>
                    <td>Guest Name</td>
                    <td><?php echo $gname;?></td>
                </tr>
                
                <tr>
                    <td>Room#</td>
                    <td><?php echo $room;?></td>
                </tr>
               
                <tr>
                    <td>Checkin Date</td>
                    <td><?php echo $checkin;?></td>
                </tr>
                <tr>
                    <td>Checkout Date</td>
                    <td><?php echo $checkout;?></td>
                </tr>
                
                
                
                <tr>
                    <td>Number Of Nights</td>
                    <td><?php echo $nd;?></td>
                </tr>
                
                 <tr>
                    <td>Room Rate</td>
                    <td><?php echo number_format($rate,2);;?></td>
                </tr>
                
                
                <tr>
                    <td>Total Bill</td>
                    <td><?php echo number_format($totbill,2);?></td>
                </tr>
                
                <tr>
                    
                    
                    <td>Payment</td>
                    <td><?php echo number_format($pmtx,2);?></td>
                </tr>
                
                
                <tr>
                    <td>Balance</td>
                    <td><?php echo number_format($balx);?></td>
                </tr>
                <tr>
                    <td>Payment Received By</td>
                    <td><?php echo $_SESSION['username'];?></td>
                </tr>
                
            </tbody>
            
        </table>
    </body>
</html>
