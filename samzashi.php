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
        <style>
            h2{
                font-size: 1.3em;
                color: red;
                background: white;
            }
        </style>
    </head>
    <body>
        <?php
        $zonn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app);
        $loc = $_POST['loc'];
        
        $raya = "select location, sum(qtyout * unitprice) as totalsales,sum(paid) as cash from sales where sdate = curdate() and location= '$loc' group by location ";
        
        $zaya = mysql_query($raya);
        $trila = mysql_fetch_assoc($zaya);
        $sales = $trila['totalsales'];
        $cash = $trila['cash'];
        
        echo '<h2>Total Sales Now.............' .  number_format($sales,2) .'</h2>';
        echo '<h2>Total Cash Sales Now.............' .  number_format($cash,2) .'</h2>';
        
        ?>
    </body>
</html>
