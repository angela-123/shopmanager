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
        $zon = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_selectdb(magnelli_app);
        
        $pname = $_POST['pname'];
        $qty = $_POST['qty'];
        $recno = $_POST['recno'];
        $cust = $_POST['customer'];
        $user = $_POST['user'];
        
        $del = "delete from sales where productname = '$pname' And qtyout = '$qty' and recno = '$recno'";
        
        if(mysql_query($del))
        {
            echo 'Record Deleted';
        }
 else {
     
            echo 'Record Not Deleted';
 }
 
 
 $fex = "update stock set stockbal = stockbal + $qty where productname = '$pname' ";
 mysql_query($fex);
 
 $cx = "select * from stock where productname = '$pname'";
 $cxx = mysql_query($cx);
 
 $new = mysql_fetch_assoc($cxx);
 
 $newbal = $new['stockbal'];
 $cbal = $newbal;
 $iop = "insert into dstock(sdate,productname,opstock,qtyin,qtyout,stock)values(curdate,'$pname',0,0,0,'$newbal')";
 $poke = "insert into audit(adate,jobtype,doneby,productname,qty,customername,invno)values(curdate(),'Void Sales','$user','$pname','$qty', '$cust','$recno')";
 
 mysql_query($iop);
 
 
 $ch = "select * from products where productname = '$pname'";
 
 $xoo = mysql_query($ch);
 
 $roo = mysql_fetch_assoc($xoo);
 
 $price = $roo['rate'];
 
 $total = $qty * $price;
 
 $ds = "update balances set balance = balance - $total where customername = '$cust'";
 
 mysql_query($ds);
 
 
 $fet = "select * from balances where customername = '$cust'";
 
 $rew = mysql_query($fet);
 
 $zx = mysql_fetch_assoc($rew);
 
 $rbal = $zx['balance'];
 
 $fist = "insert into dbalance(bdate,customername,sales,payment,balance)values(curadte(),'$cust',0,0,'$rbal')";
 
 mysql_query($fist);
 
 $qtty = -$qty;
 $sales = "insert into sales(sdate,customername,productname,qtyout,unitprice,recno)values(curdate(),'$cust','payments','$qtty','$price','$recno')";
 
 //mysql_query($sales) or die('cant query');
     
     
 
 mysql_query($poke) or die('cant audit');
 
        ?> 
    </body>
</html>
