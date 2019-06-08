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
        
        $dtu = "select sum(stockbal * rate) as worth from stock";
        $nerd = mysql_query($dtu);
        
        $mave = mysql_fetch_assoc($nerd);
        $worth = $mave['worth'];
        echo '<h3> Total Stock Worth...........' . number_format($worth,2);
                
        
        
        ?>
    </body>
</html>
