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
         mysql_select_db(ajpos)or die('Cant connect');
         
         $waiter =$_POST['waiter'];
         $table = $_POST['table'];
         
         $dx = "select sum(qtyout * unitprice) as tsales from dailies where sdate = curdate()and tnumber = '$table'and waiter ='$waiter' group by tnumber ";
         echo '';
         $rad = mysql_query($dx) or die('cant select');
         
         $yoyo = mysql_fetch_assoc($rad);
         
         $tbtotal = $yoyo['tsales'];
         
         echo '<h3> Total for table.....' .number_format($tbtotal,2) ;
        ?>
    </body>
</html>
