<?php session_start(); ?>
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
            th{
                font-family:  sans-serif;
                font-weight:bold;
                color:  #0f0f0f;
                font-size: .85em;
                border: 0px #1c94c4 solid;
            }
            
            hr{
                border: 1px solid black;
            }
            
            .lax{
                
                font-size: 2em;
            }
            
            td{
                
                border: #1b6d85 solid 0px;
                font-size: 0.75em;
                font-family: tahoma;
                font-weight: bold;
            }
            
            
            .po{
                text-align:  left;
            }
            
            
            .yili{
                
                font-size: 1em;
                color: darkred;
            }
            
            .po{
                
                font-size: 0.55em;
                font-weight: bold;
            }
            
            th{
                font-size: 1em;
            }
            
            
            .bal{
                
                font-size: .95em;
                color:  black;
                    
            }
            
            h5{
                text-align: center;
            }
            
             li{
                
                text-align:center;
                color: black;
                font-size: 1em;
                list-style:  none; 
                font-family: calibri;
                font-weight: bold;
                
            }
            
            .pc{
                font-size: 0.45em;
                font-weight: bold;
            }
            
            h2{
                
                color: crimson;
            }
            .pH{
                font-size: .78em;
            }
            
        </style>
                      <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
                                                                 <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
               
‪<!-- Optional Bootstrap theme -->
‪
          <script src="js/bootstrap.min.js"></script> 
    </head>
    <body>
        <div class="container-fluid">
        <?php
        $zonn = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites) or die('cant connect');
        
        $product = $_POST['pname'];
        $qty = $_POST['qty'];
        $rate = $_POST['rate'];
        $paid = $_POST['pmt'];
        $recno = $_POST['recno'];
        $user = $_POST['user'];
        $disk =$_POST['disc'];
        $uprice = $_POST['uprice'];
        $stype = $_POST['stype'];
        
        $loc = $_POST['loc'];
        $customer = mysql_escape_string($_POST['customer']);
        
        $rayo = "select * from customers where customername = '$customer'";
        
        $tf = mysql_query($rayo);
        
        $drx = mysql_fetch_assoc($tf);
        
        $lim = $drx['limit'];
        
        
         $mydate = "select curdate() as tdate";
        $rdate = mysql_query($mydate);
        $zdate = mysql_fetch_assoc($rdate);
        $today = $zdate['tdate'];
        
        $dix = "select productname,model,description,dept,rate from products where productname = '$product'";
        $fad = mysql_query($dix);
        
        $go = mysql_fetch_assoc($fad);
        $sprice = $go['rate'];
        $dept = $go['dept'];
        $disc = $go['discount'];
        $dsc = $go['description'];
        
        //$ox = "select productname,location,stockbal from stock where productname = '$product'";
        
        //$box = mysql_query($ox);
        //$vox = mysql_fetch_assoc($box);
        //$gstock = $vox['stockbal'];
        //$pstock = $gstock - $qty;
        
        
        $cust = "select * from customers where customername = '$customer'";
        
        //$cxt = mysql_query($cust);
        //$rax = mysql_fetch_assoc($cxt);
        
        //$cdisc = $rax['discount'];
        
        $chx = "select * from stock where productname = '$product'";
        $chxx = mysql_query($chx);
        $dxr = mysql_fetch_assoc($chxx);
        
        $stock = $dxr['stockbal'];
        
        if($qty > $stock)
        {
            echo '<blink><h2>Product Out Of Stock,Or The Current Qty Exceeds Current Stock</h2></blink>';
            echo '<blink><h2> Available stock is.......'.$stock.'</h2></blink>';
        }
        
 else {
        
        $yey = "insert into sales(sdate,productname,model,description,salestype,customername,qtyout,unitprice,paid,discount,staffname,recno)values(curdate(),'$product', '$product', '$dsc','$stype',  '$customer', '$qty','$uprice','$paid','$disk', '$user', '$recno')";
        $rans = "insert into trans(transdate,productname,qtyin,qtyout,opstock,recno)values(curdate(), '$product',0.0,'$qty',0.0,'$recno')";
        $dstock = "insert into dstock(stdate,productname,qtyin,qtyout,stock)values(curdate(),'$product',0,'$qty',0)";
        $poke = "insert into audit(adate,jobtype,doneby,productname,qty,rate,payment,discount,customername,invno)values(curdate(),'Sales Entry','$user','$product','$qty','$sprice', '$paid','$disk', '$customer','$recno')";
        $cstock = "insert into cledger(ldate,transtype,customername,productname,qtyin,rate,deposit,paid,opbal)";
        $ups = "update stock set stockbal = stockbal - $qty where productname = '$product'";
        mysql_query($ups) or die('cant update stock table');
        
        $zade = mysql_query($yey)or die('cant insert now');
        $trice = mysql_query($rans) or die('cant insert trans table');
        
        
        $ox = "select productname,stockbal from stock where productname = '$product'";
        
        $box = mysql_query($ox);
        $vox = mysql_fetch_assoc($box);
        $gstock = $vox['stockbal'];
        
        $fiu = "insert into dstock(stdate,customername,invno,productname,opstock,qtyin,qtyout,stock)values(curdate(),'$customer','$recno', '$product',0.0,0.0,'$qty',$gstock)";
        
        mysql_query($fiu) or die('cant insert into stock counter');
        
        mysql_query($poke) or die('No Auditing');
        
 }
        
 //}
        if($zade)
        {
            //echo 'Data Inserted';
        }
        
 else {
           echo 'Data Not Inserted';
 }
 
 
 $tata = "select productname as model,description,sum(qtyout) as qty,unitprice,sum(qtyout*unitprice)-sum(qtyout * unitprice * 0.01 * discount) as amount from sales where recno = '$recno' And qtyout > 0 group by productname";
 
 $sisi = "select productname,sum(qtyout * unitprice * 0.01 * discount) as discount from sales where recno = '$recno' group by recno";
 
 $tadau = "select customername, productname,sum(qtyout*unitprice)-sum(qtyout * unitprice * 0.01 * discount) as amount from sales where recno = '$recno' group by recno ";
 
 $data = "select productname,sum(qtyout * unitprice) as extended from sales where recno = '$recno' group by recno";
 $all = "select productname,sum(qtyout) as qty,sum(qtyout * unitprice) as extended,sum(paid) as payment,sum(deposit) as deposits,sum(others) as others  from sales where recno = '$recno' group by recno";
 
 $tog = mysql_query($sisi);
 $fred = mysql_fetch_assoc($tog);
 
 $mydisc = $fred['discount'];
 $tall = mysql_query($all);
 $debit = mysql_query($tadau) or die('cant chilli');
 $dall = mysql_fetch_assoc($tall);
 
 $extended = $dall['extended'];
 $payment = $dall['payment'];
 $deposit = $dall['deposits'];
 $others = $dall['others'];
 $qtall = $dall['qty'];
 
 $alldebt = mysql_fetch_assoc($debit);
 //$edebt = $alldebt['amount'];
 //$tup = "update balances set balance = balance + $edebt where customername = '$customer'";
 //mysql_query($tup) or die('cant update balance');
 
 $edebt = $alldebt['amount'];
 //mysql_query($rek) or die('cant update balance');
 //echo 'Total is.........' .$edebt;
 //echo 'Customer--------------' .$customer;
 $rian = "select * from balances where customername = '$customer'";
 
 $arian = mysql_query($rian);
 
 $ras = mysql_fetch_assoc($arian);
 
 $cbal = $ras['balance'];
 $rayy = $qty * $sprice;
 $prodisc = $qty *$sprice * 0.01 * $disc;
 $pmt = $payment;
 
 
     $rax = "update balances set balance = balance - $paid where customername = '$customer'";
     mysql_query($rax);
     $era = "select * from balances where customername = '$customer'";
     
     $mera = mysql_query($era);
     
     $dera = mysql_fetch_assoc($mera);
     
     $fball = $dera['balance'];
     
      $rekia = "insert into dbalance(bdate,invno,customername,sales,payment,balance)values(curdate(),'$recno','$customer',0,0,'$fball')";
      mysql_query($rekia);
      $gbal = $fball - $paid;
      $rekid = "insert into dbalance(bdate,invno,customername,sales,payment,balance)values(curdate(),'$recno','$customer',0,0,'$gbal')";
      //mysql_query($rekid);
 
 
 
     

 $newball = $cbal + $rayy- $paid-$prodisc;
 //echo 'New Balance..............' .$newball;
 //$rayy = $qty * $rate;
 
 $rust = "update balances set balance = '$cbal'-$pmt-$rayy - $prodisc where customername = '$customer'";
 mysql_query($rust);
 
 $udo = "select * from balances where customername = '$customer' ";
 
 $x = mysql_query($udo);
 $y = mysql_fetch_assoc($x);
 
 $rball = $y['balance'];
 $rek = "insert into dbalance(bdate,invno,customername,sales,payment,balance)values(curdate(),'$recno','$customer','$rayy','$pmt','$newball')";
 
 mysql_query($rek) or die('cant update dynamin balance');
 
 //$edebt = $alldebt['amount'];
 //$rayy = $qty * $rate;
 $tup = "update balances set balance = balance + $rayy - $pmt where customername = '$customer'";
 mysql_query($tup) or die('cant update balance');
 
 
 
 $balance = $extended-$payment;
 $res = mysql_query($tata) or die('cant display');
 
 $sidi = mysql_query($data);
 $sid = mysql_fetch_assoc($sidi);
 
 $ext = $sid['extended'];
 
    $buns = mysql_num_fields($res);
    echo '<div>';
 echo '<table class = "table table-responsive table-striped table-hover table-bordered">';
 //echo '<tr>';
 echo '<thead>';
 //echo '<th>';
 //echo  '<h4 align = "center">EJHIL NIG.LTD. </h4>';
 //echo  '<h5 align = "center">Liquor Centre,Manufacturers Representatives,Merchandising,Suppliers,General Contractors</h5>';
 //echo  '<h5 align = "left">HEAD OFFICE</h5>' .'<nobr>';
 //echo  '<h5 align = "left">SHOP LS, 1194 ZUBA INTERNATIONAL MKT.</h5>'; 
 //echo  '<h5 align = "left">P.O.BOX 218, Gwagwalada, Area Council</h5>';
 //echo  '<h5 align = "left">08035047002,08074979776</h5>';
 //echo  '<h5 align = "left">07045161003,08188169198</h5>';
 //echo '<h4 align = "center"> </h4>';
 //echo '<h4 align = "center"><b>Credit</b> </h4>';
 
 //echo '<div class = "clearfix">';
 //echo '<div class = "pull-left">';                                                                                     
 
                                                                                                                  
                echo '<li class = "lax">WHITE IS WHITE</li>';
                echo '<li class = "lag">CASH & CARRY</li>';
                echo '<li>ELECTRONICS & FURNITURE MEGA CENTER</li>';
                echo '<li class = "lag">Plot 185,Gado Nasko Road,Opposite Abbatoir,Kubwa</li>';
                echo '<li class = "lag">08101545153,08052733741,08069643552</li>';
                //echo '<div class = "clearfix">';
                //echo '<div class = "pull-left">';
               
                echo '<h5>INVOICE</h5>';
                //echo '<div class = "container-fluid">';
                
                echo '<div class = "clearfix">';
                echo '<div class = "pull-left">';
                echo '<li class = "lag">ABUJA CITY OFFICE</li>';
                echo '<li>Suite A38,Danziyal Plaza</li>';
                echo '<li>Opp. NNPC Mega Filling Station</li>';
                
                echo '<li>Central Business Area</li>';
                echo '<li>' .'08034062966,07062741075'.'</li>';
                
               
                
                echo '</div>';
                
                
 
                //echo '<div class = "clearfix">';
                echo '<div class = "pull-right">';
                echo '<li>KUJE OFFICE</li>';
                echo '<li>Electronics House</li>';
                echo '<li>Opp. FCMB,Besides First Bank</li>';
                echo '<li>0706244239,07036060957</li>';
                echo '</div>';
                echo '</div>';
                
                echo '<hr>';
 echo '<tr>';
 echo '<td>';
 echo 'Invoice#';
 echo '</td>';
 echo '<td>';
 echo $recno;
 echo '</td>';
 echo '</tr>';
 
 
 
 echo '<tr>';
 echo '<td>';
 echo 'Customername';
 echo '</td>';
 echo '<td>';
 echo $customer;
 echo '</td>';
 echo '</tr>';
 
 
 echo '<tr>';
 echo '<td>';
 echo 'Invoiced By';
 echo '</td>';
 echo '<td>';
 echo $user;
 echo '</td>';
 echo '</tr>';
 
 
 
 
echo '<tr>';

echo '<tr>';
 echo '<td>';
 echo 'Date';
 echo '</td>';
 echo '<td>';
 echo $today;
 echo '</td>';
 echo '</tr>';
 
 
 
 
 
echo '<tr>';

for($i = 0;$i<$buns;$i++)
{
	echo '<th>' .mysql_field_name($res, $i).'</th>';
}
echo '</tr>';

while ($row = mysql_fetch_row($res))
{
	echo '<tr>';
	
	for($i = 0;$i<$buns;$i++)
	
	{
		echo '<td>';
                if(is_numeric($row[$i]))
                {
		echo $row[$i];
                }
 else {
                    echo $row[$i];
 }
	}   echo '</td>';
	echo '</tr>';
}
echo '<tr>';
echo '<td class = yili>';
echo "Total ";
echo '</td>';


echo '<td class = yili>';
echo number_format($ext,2);
echo '</td>';


echo '</tr>';






echo '<tr>';
echo '<td>';
echo "Total Payment";
echo '</td>';


echo '<td>';
echo number_format($payment,2);
echo '</td>';


echo '</tr>';


//echo '<tr>';
////echo '<td>';
//echo "Total Deposit";
//echo '</td>';


//echo '<td>';
//echo number_format($deposit,2);
//echo '</td>';


//echo '</tr>';

$totdisc = 0.01 * $cdisc * $extended + $mdisc;
echo '<tr>';
echo '<td class = bal>';
echo "Total Discount";
echo '</td>';

$fbal = $balance - $mydisc;
echo '<td class = bal>';
echo number_format($mydisc,2);
echo '</td>';


echo '</tr>';



echo '<tr>';
echo '<td class = bal>';
echo "Balance";
echo '</td>';


echo '<td class = bal>';
echo number_format($fbal,2);
echo '</td>';


echo '</tr>';

echo '<tr>';
echo '<td>';
echo "Total Quantity";
echo '</td>';


echo '<td>';
echo $qtall;
echo '</td>';


echo '</tr>';





echo '</table>';
//echo '<h5 align = "right">Customer Sign...........................        For:WHITE IS WHITE: Sign ...........</h5>';
  //echo '<h6 align = "center"> * * * *   Customer Sign*     *   *     Store Keeper`Sign    *     *    *     *           Manager`s Sign</h6>';
//echo '<thead>';
echo '<div class = "clearfix">';
echo '<div class = "pull-left">';
echo '<ul>';
echo '<li>.........................................</li>';
echo '<li>Customer`s Sign';
echo '</ul>';
echo '</div>';

echo '<div class = "pull-right">';
echo '<ul>';
echo '<li>.........................................</li>';
echo '<li>For:WHITE IS WHITE';
echo '</ul>';

echo '</div>';


echo '</div>';
echo '<tr>';
echo '<hr>';
                                                    
echo '<h5 align = "center">*Warranty Rules* Secure Purchase Receipt/Warranty Card* </h5>';
echo '<h5 align = "center">Use Only Our Service Personnel </h5>';

echo '<h5 align = "center">Goods Collected In Good Condition Not Returnable </h5>';

echo '<h5 align = "center">Thanks for your patronage </h5>';


echo '</tr>';

//echo '</thead>';
//echo '</div>';
        ?>
        
        </div>
    </body>
</html>
