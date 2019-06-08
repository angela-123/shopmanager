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
        
        $px = $_POST['pname'];
        //echo $px;
        
        $pane = "select productname, model,rate from products where productname = '$px' ";
        
        $res = mysql_query($pane);
        
        $yx = mysql_fetch_assoc($res);
        
        $price = $yx['rate'];
        $pname = $yx['model'];
        //$status = $yx['discount'];
        
        echo  '<h4>Current Price Is.............' .  number_format($price,2) .'</h4>';
        echo  '<h4>Item Name Is.............' .$pname .'</h4>';
        //echo '<H4>' .$status .'</H4>'
        

        ?>
    </body>
</html>
