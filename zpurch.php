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
                font-weight: normal;
                color:  #0f0f0f;
                font-size: 1.1em;
                border: 1px #1c94c4 solid;
            }
            
            td{
                
                border: #1b6d85 solid 1px;
            }
        </style>
                                        
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
        <?php
        $zonn = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        $date = $_POST['date'];
        $supplier = $_POST['cname'];
        $product = $_POST['pname'];
        $qty = $_POST['qty'];
        $rate = $_POST['uprice'];
        $paid = $_POST['paid'];
        $recno = $_POST['rec'];
        $dep = $_POST['dep']; 
        $other = $_POST['other'];
        $inv = $_POST['inv'];
        $crd = $_POST['crd'];
        $part = $_POST['part'];
        $bal = $_POST['bal'];
        
        $tar = "select * from stock where productname = '$product'";
        $metro = mysql_query($tar);
        
        $ch = mysql_fetch_assoc($metro);
        $dsk = $ch['description'];
        $pnm = $ch['model'];
        $yey = "insert into purchases(pdate,suppliername,invno,productname,model,description,qtyin,unitcost,paid,particulars,deposit,others,recno,opbal)values('$date','$supplier','$inv','$product', '$pnm', '$dsk', '$qty','$rate','$paid','$part', '$dep','$other','$recno','$bal')";
        $rupts = "update stock set unitcost = '$rate' where productname = '$product'";
        
        $zade = mysql_query($yey)or die('cant insert purchases');
        mysql_query($rupts) or die('cant update unitcost');
        
        $ups = "update stock set stockbal = stockbal + $qty where productname = '$product'";
        //mysql_query($ups) or die('cant update stock table');
        
        
       
        
        
        
        if($zade)
        {
            //echo 'Data Inserted';
        }
        
 else {
            echo 'Data Not Inserted';
 }
 
 
 
 
 
 $tata = "select pdate as date,model as productname,productname,description,qtyin,unitcost,qtyin*unitcost as amount,paid as payment,particulars,deposit,others as expenses,opbal  from purchases where recno = '$recno' and qtyin+ paid+deposit+others+opbal> 0";
 $mita = "select suppliername,sum(qtyin * unitcost) as amount,sum(paid) as payment,sum(deposit) as deposits,sum(others) as others,sum(creditnote) as credits,sum(opbal) as opbal from purchases where recno = '$recno' group by recno";
 $zita = mysql_query($mita) or die('cant do summation');
 $res = mysql_query($tata) or die('cant display');
 $rans = "insert into trans(transdate,productname,qtyin,qtyout,opstock)values('$date','$product','$qty',0.0,0.0)";
 $dstock = "insert into dstock(stdate,productname,model,description,qtyin,qtyout,stock)values('$date','$product','$product', '$qty',0,0)";
        
       $ups = "update stock set stockbal = '$qty' + stockbal where productname = '$product'";
        mysql_query($ups) or die('cant update stock table');
        $trice = mysql_query($rans) or die('cant insert trans table');
        mysql_query($dstock);
        
 
 $zxa = mysql_fetch_assoc($zita);
 $amount = $zxa['amount'];
 $payments = $zxa['payment'];
 $depo = $zxa['deposits'];
 $oths = $zxa['others'];
 $crd = $_POST['crd'];
 $creds = $zxa['credits'];
 $bala = $zxa['opbal'];
 $ox = "select productname,stockbal from stock where productname = '$product'";
        
        $box = mysql_query($ox);
        $vox = mysql_fetch_assoc($box);
        $gstock = $vox['stockbal'];
        
        $deji = "select * from products where productname = '$product'";
        $nyaji = mysql_query($deji);
        $tots = mysql_fetch_assoc($nyaji);
        $desc = $tots['description'];
        
        $fiu = "insert into dstock(stdate,productname,description,model,opstock,qtyin,qtyout,stock)values('$date','$product','$product', '$desc',0.0,'$qty',0.0,$gstock)";
        
        //mysql_query($fiu) or die('cant insert into stock counter');
 
 
 
 
 
    $buns = mysql_num_fields($res);
    echo '<div>';
 echo '<table id = "diaga" class = "table table-responsive table-bordered table-hover table-striped">';
 echo '<tr>';
 
 echo '<td>';
 echo "Supplier Name";
 echo '</td>';
 
 
 echo '<td>';
 echo $supplier;
 echo '</td>';
 echo '</tr>';
 
 
 echo '<tr>';
 echo '<td>';
 echo "Invoice#";
 
 
 echo '<td>';
 echo $inv;
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
		echo $row[$i];
	}   echo '</td>';
	echo '</tr>';
}



echo '<tr>';
echo '<td>';
echo 'Opening Balance';
echo '</td>';

echo '<td>';
echo number_format($bala,2);
echo '</td>';


echo '</tr>';







echo '<tr>';
echo '<td>';
echo 'Total Purchases';
echo '</td>';

echo '<td>';
echo number_format($amount,2);
echo '</td>';


echo '</tr>';


echo '<tr>';
echo '<td>';
echo 'Total Payment';
echo '</td>';

echo '<td>';
echo number_format($payments,2);
echo '</td>';


echo '</tr>';

echo '<tr>';
echo '<td>';
echo 'Total Deposit';
echo '</td>';

echo '<td>';
echo number_format($depo,2);
echo '</td>';


echo '</tr>';

$bbal = $amount -$payments -$depo + $oths +$oths+$bala;





echo '<tr>';
echo '<td>';
echo 'Total Expenses';
echo '</td>';

echo '<td>';
echo number_format($oths,2);
echo '</td>';


echo '</tr>';








echo '<tr>';
echo '<td>';
echo 'Total Balance';
echo '</td>';

echo '<td>';
echo number_format($bbal,2);
echo '</td>';


echo '</tr>';





echo '</table>';
echo '</div>';
        ?>
    </body>
</html>
