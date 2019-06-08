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
        
        $date = $_POST['date'];
        $cname = $_POST['cname'];
        $pname = $_POST['pname'];
        
        $det = "delete from purchases where pdate = '$date' and suppliername = '$cname' and productname = '$pname'";
        
        $del = mysql_query($det);
        
        if($del)
        {
            echo 'Record Deleted';
        }
        
 else {
     
            echo 'Record Not Delrted';
 }
        ?>
    </body>
</html>
