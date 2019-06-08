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
        $zonn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app) or die('cant connect');
        $date = $_POST['date'];
        $customer = $_POST['cname'];
        $product = $_POST['pname'];
        $qty = $_POST['qty'];
        
        $del = "delete from sales where sdate = '$date' and customername = '$customer' and productname = '$product'";
        
        $res = mysql_query($del);
        
        if($res)
        {
            echo 'Deleted';
        }
        
 else {
            echo 'Not Deleted';
 }
        ?>
    </body>
</html>
