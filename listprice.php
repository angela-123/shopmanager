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
        
        $pname = $_POST['pname'];
        
        $dx = "select rate from products where productname = '$pname'";
        
        $res = mysql_query($dx);
        $fact = mysql_fetch_assoc($res);
        $rate = $fact['rate'];
        if($res)
        {
            echo $rate;
        }
        
 else {
     
            echo 'Cant Find Price';
 }
        ?>
    </body>
</html>
