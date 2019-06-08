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
        $cname = $_POST['cname'];
        
        $zill = "select * from products where productname = '$cname'";
        
        $ede = mysql_query($zill);
        
        $akamu = mysql_fetch_assoc($ede);
        $cost = $akamu['unitcost'];
        echo 'The Cost Price is...' .$cost;
        ?>
    </body>
</html>
