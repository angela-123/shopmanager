<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TOPIMI</title>
    </head>
    <body>
        <?php
        $conn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app)or die('Cant connect');
        
        $xane = $_POST['vane'];
        
        $sale = "select sdate,customername,productname,qtyout,unitprice,qtyout * unitprice as amount ";
        
        $res = mysql_query($sale);
        
        if($res)
        {
            echo 'Preview Data';
        }
        
 else {
            echo 'Maya';
 }
        
        
        ?>
        
        
        <form>
            <table>
                <thead>
                    <tr>
                <th>Date</th>
                <th>Dealername</th>
                <th>Market</th>
                <th>Majorbrand</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" id="<?php echo $xane; ?>" value="" class="jim"></td>
                        <td><input type="text" id="loc" value="<?php echo $xane; ?>"></td>
                        <td><input type="text" id="mkt"></td>
                        <td><input type="text" id="brd"></td>
                        <td><input type="button" id="<?php echo $xane; ?>" value="Update"></td>
                    </tr>
                </tbody>
            </table>
        </form>
       
    </body>
</html>
