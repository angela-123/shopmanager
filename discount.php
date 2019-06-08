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
        mysql_select_db(ejhil_app) or die('cant connect');
        
        $customer = mysql_escape_string($_POST['customer']);
        
        $vat = "select * from customers where customername = '$customer'";
        
        $nu = mysql_query($vat);
        
        $lup = mysql_fetch_assoc($nu);
        
        $discount = $lup['discount'];
        
        echo '<h5>Customer discount is..............'. number_format($discount,2) .'</h5>';
                
                
        
        
        ?>
    </body>
</html>
