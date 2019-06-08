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
        
        $room = $_POST['room'];
        
        $gas = "update rooms set customer = 'no guest',bill = '0',payment = '0',balance = '0',status = 'Vacant',checkin = '',checkout = '' where roomno = '$room'";
        
        mysql_query($gas) or die('cant update');
        
        echo 'Room Status Updated';
        $gel = "insert into status(date,roomno,hstatus)values(curdate(),'$room','checkout')";
        mysql_query($gel) or die('cant insert');
        ?>
    </body>
</html>
