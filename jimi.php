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
        $zonn = mysql_connect('localhost','ejhil_staff','kovachenko123');
        mysql_select_db(ejhil_app);
        
        $sname = $_POST['sname'];
        $inv = $_POST['inv'];
        $pid = $_POST['pid'];
        $paid = $_POST['paid'];
        
        
        $upd = "update purchases set paid = '$paid' where pid = '$pid' and suppliername = '$sname'";
        
        $dt = mysql_query($upd);
        
        if($dt)
        {
            echo 'Record Updated';
        }
        
 else {
     
            echo 'Record Not Updated';
 }
        ?>
    </body>
</html>
