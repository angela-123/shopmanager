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
        $zonn = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        
        $pname = $_POST['pname'];
        $rate = $_POST['price'];
        
        $zap = "update products set rate = '$rate' where productname = '$pname'";
        $rap = "update stock set rate = '$rate' where productname = '$pname'";
        
        $dag = mysql_query($zap);
        $gop = mysql_query($rap);
        
        if($dag)
        {
            echo 'Price Updated';
        }
        
 else {
            echo 'Price Not Updated';
 }
        ?>
    </body>
</html>
