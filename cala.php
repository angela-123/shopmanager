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
        <script>
            
        </script>
        <?php
        $zonn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app);
        $rec = $_POST['rec'];
        
        $cax = "select sid,sdate,productname,qtyout,unitprice,paid,recno from sales where recno = '$rec' ";
        
        $res = mysql_query($cax) or die('cant query');
        ?>
        
        <?php 
        while ($row = mysql_fetch_assoc($res))
        {
            
        
        ?>
        <div class="table table-responsive table-striped">
        <input type="number" value="<?php echo $row['sid']; ?>"><input type="date" value="<?php echo $row['sdate']; ?>"><input type="text" value="<?php echo $row['productname']; ?>">
        
        </div>
        
        <?php 
        
        }
        ?>
        <button class="btn btn-primary btn-lg">Update</button>
    </body>
</html>
