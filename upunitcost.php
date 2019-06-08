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
        $nas = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        
        $rx = "insert into dstock(stdate,productname,model,description,opstock,stock)select curdate(), productname,productname,productname,stock,stock from newproducts";
        
        mysql_query($rx);
        ?>
    </body>
</html>
