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
        require 'connection.php';
        
        $kon = new Connection();
        $kon->connect();
        if($kon)
        {
            echo 'nwinco_app connected';
        }
        
 else {
     
            echo 'Not Connected';
 }
 
 $kon->selectdb();
 
 if($kon)
 {
     echo 'Database selected';
 }
 
 else {
     echo 'Database not selected';
}
        ?>
    </body>
</html>
