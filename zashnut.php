
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
                font-family: tahoma;
                font-weight:bolder;
                color: black;
                font-size: 17pt;
                border: 2px #1c94c4 solid;
            }
            
            .lax{
                
                font-size: 2em;
            }

            h5{
                font-weight:bolder;
                color:black;
                font-family:tahoma;
                font-size:1.2em;
            }
            
            #hg{
                font-size: 18pt;
                font-family:tahoma;
                font-weight:bolder;
            }
            
            .maya{
                border: 2px black solid;
                font-size:1.5em;
            }
            
            td{
                
                border: 2px black solid;
                font-size: 17pt;
                font-family: tahoma;
                font-weight: bolder;
            }
            
            #tito{
                border: 2px black solid;
            }
            h4{
                text-align: center;
            }
            
            
            .po{
                text-align:  left;
            }
            
            #miv{
                
                width:100%;
            }
            
            bodyx{
                background-image: url("images/midea.png");
                background-repeat:  no-repeat;
                background-position-x: 50%;
                background-position-y: 50%;
                background-size: 50%;
            }
            
            #mookie{
                font-size: 1.35em;
                color: black;
            }
            
            
            .ick{
                
                font-size: 0.95em;
                font-family: tahoma;
                color: black;
                font-weight: bolder;  
            }
            
            
            .yili{
                
                font-size: 1.5em;
                color: black;
                border:2px black solid;
                font-weight:bold;
            }
            
            .po{
                
                font-size: 0.55em;
                font-weight: bold;
            }
            
            #may,#ma,#mos,#my,#maya,#mx,#ya,#yaya{
                border: 2px black solid;
            }
            
            .mino{
                
                border:2px #000 solid;
            }
            th{
                font-size: 15pt;
                border: 2px black solid;
                color:black;
            }
            
            
            .bal{
                
                font-size: 1.5em;
                color:  black;
                font-weight:bold; 
                    
            }
            
            h5{
                text-align: center;
                font-family: tahoma;
                font-size:16pt;
            }
            
             li{
                
                text-align:center;
                color:  black;
                font-size: 0.65em;
                list-style:  none; 
                font-family: tahoma;
                font-weight: bolder;
                border:0px black solid;
                
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
        $sno = $_POST['sno'];
        echo $rate;
        
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
        //echo $today;
        
        $dix = "select productname,model,description,dept,rate,unitcost from products where productname = '$product'";
        $fad = mysql_query($dix);
        
        $go = mysql_fetch_assoc($fad);
        $sprice = $go['rate'];
        $dept = $go['dept'];
        $disc = $go['discount'];
        $dsc = $go['description'];
        $cost = $go['unitcost'];
        $px = $go['model'];
        
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
        
        $yey = "insert into sales(sdate,productname,model,sno,description,salestype,customername,qtyout,unitprice,unitcost,paid,discount,staffname,naira,recno)values(curdate(),'$product', '$px','$sno',  '$dsc','$stype',  '$customer', '$qty','$sprice', '$cost', '$paid','$disk', '$user', '$naira', '$recno')";
        $rans = "insert into trans(transdate,productname,qtyin,qtyout,opstock,recno)values(curdate(), '$product',0.0,'$qty',0.0, '$recno')";
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
    
 
 
 $tata = "select model as productname,sum(qtyout) as qty,unitprice,sum(qtyout*unitprice)-sum(qtyout * unitprice * 0.01 * discount) as amount from sales where recno = '$recno' And qtyout > 0 group by productname";
 
 $sisi = "select model, productname,sum(qtyout * unitprice * 0.01 * discount) as discount from sales where recno = '$recno' group by recno";
 
 $tadau = "select customername, productname,sum(qtyout*unitprice)-sum(qtyout * unitprice * 0.01 * discount) as amount from sales where recno = '$recno' group by recno ";
 
 $data = "select model,sum(qtyout * unitprice) as extended from sales where recno = '$recno' group by recno";
 $all = "select model,sum(qtyout) as qty,sum(qtyout * unitprice) as extended,sum(paid) as payment,sum(deposit) as deposits,sum(others) as others,sum(naira) as ndiscount  from sales where recno = '$recno' group by recno";
 
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
 $ndisc = $dall['ndiscount'];
 
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
    
    ?>  
        
        <div class="container-fluid">
            
            <div class="row">
                <ul>
                    <li id="hg">JESSI MAKE-UP STUDIO & SALON</li>
                    
                    <li class="ick">2XL MALL,GWARIMPA</li>
                    <li class="ick">ABUJA</li>
                    <li class="ick">07030713852</li>
                    <li class="ick"><?php echo $today; ?></li>
                    <li class="ick"><?php echo $recno; ?></li>
  
                </ul>
                 
                
                
            </div>
           
           
           
           
          
            
        </div>
        
         
        
        
            
        
            
            
        
        
        
        
        <div class="row">
        <table class="table table-responsive table-bordered">
      
 <?php
 
echo '<tr>';

for($i = 0;$i<$buns;$i++)
{
	echo '<th class = "mino">' .mysql_field_name($res, $i).'</th>';
}
echo '</tr>';

while ($row = mysql_fetch_row($res))
{
	echo '<tr>';
	
	for($i = 0;$i<$buns;$i++)
	
	{
		echo '<td id = "tito">';
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
$nairadisc = $dall['naira'];
echo '<tr>';
echo '<td class = bal>';
echo "Total Discount";
echo '</td>';

$fbal = $balance - $mydisc-$nairadisc;
echo '<td class = bal>';
echo number_format($mydisc,2);
echo '</td>';


echo '</tr>';



echo '<tr>';
echo '<td class = "maya">';
echo "Balance";
echo '</td>';


echo '<td class = "maya">';
echo number_format($fbal,2);
echo '</td>';


echo '</tr>';

echo '<tr>';
echo '<td class = "maya">';
echo "Total Quantity";
echo '</td>';


echo '<td>';
echo $qtall;
echo '</td>';


echo '</tr>';





echo '</table>';
          echo'<h5>Goods Collected In Good Condition</h5>';
          echo'<h5>No Refunds After Payment</h5>';
          echo'<h5>Thanks for your patronage,please call again</h5>';
        ?>
        </table>
            
           
            
            
                
                
            
           
            
            
            
            
            
            
            
            
            
            
            
        </div>
       
    
    </body>
</html>
