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
         $room = $_POST['room'];
         $tr = "select * from rooms where roomno = '$room'";
         
         $res = mysql_query($tr);
         
         $rx = mysql_fetch_assoc($res);
         
         
         

         
        ?>
        <div class=" container-fluid">
            <div class="row">
                <div class="col-md-4">
        <table class="table table-responsive table-hover table-striped table-bordered">
            <tr>
                <td>Room#</td>
                <td><?php echo $rx['roomno']; ?></td>
            </tr>
            <tr>
                <td>Guest Name</td>
                <td><?php echo $rx['customer']; ?></td>
            </tr>
            <tr>
                <td>Checkin Date</td>
                <td><?php echo $rx['checkin']; ?></td>
            </tr>
            
            <tr>
                <td>Checkout Date</td>
                <td><?php echo $rx['checkout']; ?></td>
            </tr>
            <tr>
                <td>Bill</td>
                <td><?php echo $rx['bill']; ?></td>
            </tr>
            
            <tr>
                <td>Payment</td>
                <td><?php echo $rx['payment']; ?></td>
            </tr>
            <tr>
                <td>Balance</td>
                <td><?php echo $rx['balance']; ?></td>
            </tr>
            
            <tr>
                <td>Reservation Start Date</td>
                <td><?php echo $rx['resvin']; ?></td>
            </tr>
            <tr>
                <td>Reservation End Date</td>
                <td><?php echo $rx['resvout']; ?></td>
            </tr>
            <tr>
                <td>Room Status</td>
                <td><?php echo $rx['status']; ?></td>
            </tr>
            
            
        </table>
                </div>
    </div>
        </div>
    </body>
</html>
