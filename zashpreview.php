
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
                font-family: calibri;
                font-weight:bold;
                color: black;
                font-size: 1.2em;
                border: 2px #1c94c4 solid;
            }
            
            .lax{
                
                font-size: 2em;
            }
            
            #hg{
                font-size: 1.5em;
                font-family:calibri;
                font-weight:normal;
            }
            
            .maya{
                border: 2px black solid;
            }
            
            td{
                
                border: 2px black solid;
                font-size: 1em;
                font-family: calibri;
                font-weight: bold;
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
                font-family: calibri;
                color: black;
                font-weight: normal;  
            }
            
            
            .yili{
                
                font-size: 1em;
                color: black;
                border:2px black solid;
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
                font-size: 1em;
                border: 2px black solid;
            }
            
            
            .bal{
                
                font-size: .75em;
                color:  black;
                    
            }
            
            h5{
                text-align: center;
                font-family: calibri;
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
        
        $loc = $_POST['loc'];
        $customer = mysql_escape_string($_POST['customer']);
        
        $rayo = "select * from customers where customername = '$customer'";
        
        $tf = mysql_query($rayo);
        
        $drx = mysql_fetch_assoc($tf);
        
        $lim = $drx['limit'];
        
        
         $mydate = "select date_format(curdate(),'%d/%m/%y') as tdate";
        $rdate = mysql_query($mydate);
        $zdate = mysql_fetch_assoc($rdate);
        $today = $zdate['tdate'];
        
        $dix = "select productname,model,description,dept,rate,unitcost from products where model = '$product'";
        $fad = mysql_query($dix);
        
        $go = mysql_fetch_assoc($fad);
        $sprice = $go['rate'];
        $dept = $go['dept'];
        $disc = $go['discount'];
        $dsc = $go['description'];
        $cost = $go['unitcost'];
        
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
        
        $yey = "insert into sales(sdate,productname,model,sno,description,salestype,customername,qtyout,unitprice,unitcost,paid,discount,staffname,recno)values(curdate(),'$product', '$product','$sno',  '$dsc','$stype',  '$customer', '$qty','$uprice', '$cost', '$paid','$disk', '$user', '$recno')";
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
    
 
 
 $tata = "select productname as model,productname, sno as serialno,sum(qtyout) as qty,unitprice,sum(qtyout*unitprice)-sum(qtyout * unitprice * 0.01 * discount) as amount from sales where recno = '$recno' And qtyout > 0 group by productname";
 
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
    
    ?>  
        
        <div class="container-fluid">
            
            <div class="row">
                <ul>
                    <li id="hg">GLOBAL OKESONS NIGERIA</li>
                    
                    <li class="ick">ELECTRONICS DEALERS & DISTRIBUTORS OF VARIOUS PRODUCTS SUCH AS LG,THERMOCOOL,SAMSUNG,SKYRUN,NEXUS,ETC AND GENERAL CONTRACTORS</li>
                    <li class="ick"></li>
                    <li class="ick">08034099098,08072870548</li>
  <li class = "ick">globalokeson@yahoo.com</li>
                </ul>
                 
                
                <h4>INVOICE</h4>
            </div>
            <div class="row-fluid" title="AUTHORISED DEALERS OF">
                <div class="clearfix">
                    <div class="col-sm-4">
                        <img src="images/lgfull.png" width="10" height="10" class="pull-left img img-responsive">
                        <img src="images/skyrun.jpg" width="10" height="10" class="pull-left img img-responsive">
                        <img src="images/sharp.jpg" width="10" height="10" class="pull-left img img-responsive">
                
                    </div>
                    
                    <div class="col-sm-4">
                        <img src="images/toshiba.png" width="10" height="10" class="pull-right">
                        <img src="images/sony.png" width="10" height="10" class="pull-right">
                        <img src="images/midea.png" width="10" height="10" class="pull-right">
                    </div>
                
                      <div class="col-sm-4">
                          <img src="images/nexus.png" width="10" height="10" class="pull-right">
                          <img src="images/samsung.png" width="10" height="10" class="pull-right">
                        
                    </div>  
                
                </div>
            </div>
           
           
           
          
            
        </div>
        
         <div class="row-fluid" id="miv">
            <div class="clearfix">
            <div class="col-md-3 pull-left">
                
                <li>Date.......... <?php echo $today; ?></li>
                    
                     
            </div>
                
                
                
                <div class="col-md-3 pull-right">
                    
                    <li>Receipt#.....    <?php echo $recno; ?> </li>
                        
                     
                </div>
            
            
                
                
            
           
            
            
            
            
            
            </div>
        </div>
            
        
        <div class="row-fluid" id="miv">
            <div class="clearfix">
            
                <div class="col-md-3 pull-left">
                   
                <li>Invoiced By........... <?php echo $user; ?></li>
                    
                </div>
            
                
                
                
            
                
                
            
           
            
            <div class="col-md-3 pull-right">
                   
                <li>Bill To........... <?php echo $customer; ?></li>
                    
                </div>
            
            
            
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
//echo '<h5 align = "right">Customer Sign...........................        For:WHITE IS WHITE: Sign ...........</h5>';
  //echo '<h6 align = "center"> * * * *   Customer Sign*     *   *     Store Keeper`Sign    *     *    *     *           Manager`s Sign</h6>';
//echo '<thead>';
echo '<div class = "clearfix">';
echo '<div class = "pull-left">';
echo '<ul>';
echo '<li>.........................................</li>';
echo '<li class = "ick">Customer`s Sign';
echo '</ul>';
echo '</div>';
echo '<div class = "pull-right">';
echo '<ul>';
echo '<li>.........................................</li>';
echo '<li class = "ick">For:Global Okeson';
echo '</ul>';

echo '</div>';


echo '</div>';


//echo '</thead>';
//echo '</div>';
        ?>
        </table>
            
            <div class="row-fluid" id="miv">
            <div class="clearfix">
            <div class="col-md-4 pull-left">
                
                    <li>DUMP SITE</li>
                    <li>Guidna-Along Kubwa Express Road</li>
                     <li>Near NYSC Junction</li>
                    <li>Former New Market</li>
                     <li>KubwaAbuja</li>
                      <li>08034099098,08122066872</li>
            </div>
                
                
                <div class="col-md-4 pull-right">
                    
                        <li>ADDRESS</li>
                        <li>CM4, Off Gado Nasko Road</li>
                     <li>Kubwa,Abuja</li>
                     <li>08034099098</li>
                </div>
            
            
                
                
            
           
            
            <div class="col-md-4 pull-right">
                   
                        <li>Branch Office</li>
                    <li>Behind Jinifa Plaza,Off Emmanuel Ademulegun</li>
                     <li>Central Business Area,Abuja</li>
                     
                      <li>08038840952</li>
                </div>
            
            
            
            </div>
        </div>
            
            
            
            
            
            
            
            
            
        </div>
       
    
    </body>
</html>
