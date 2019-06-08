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
          $conn = mysql_connect('localhost','staff','angela');
        mysql_select_db(hotels)or die('Cant connect');
        
        $from = $_POST['from'];
        $to = $_POST['to'];
        $in = $_POST['in'];
        $out = $_POST['out'];
        
        $first = "select * from rooms where roomno = '$from'";
        $zade = mysql_query($first);
        $fx = mysql_fetch_assoc($zade);
        $cin = $fx['checkin'];
        $cot = $fx['checkout'];
        $bal = $fx['balance'];
        $cust = $fx['customer'];
        
        $jackk = "select datediff('$out','$in') as pico";
        $vx = mysql_query($jackk); 
        $ara = mysql_fetch_assoc($vx);
        
       
        echo 'To room'.$to;
        
        $second = "select * from rooms where roomno = '$to'";
        $toso = mysql_query($second);
        $fs = mysql_fetch_assoc($toso);
        $rtt = $fs['rate'];
        
         $nd = $ara['pico'];
        $tbx = $nd * $rtt+$bal;
        $tob = $bal+$tbx;
        //echo 'Rate for to'.$rtt;
        
        $hb = "update rooms set checkin= '$in',checkout = '$out',bill= '$tbx',balance = '$tob',customer = '$cust' where roomno = '$to'";
        
        mysql_query($hb) or die('cant update swap room');
        
        
        
        
        
        ?>
    </body>
</html>
