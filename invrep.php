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
                font-size: .85em;
                border: 0px #1c94c4 solid;
            }
            
            td{
                
                border: #1b6d85 solid 0px;
                font-size: .75em;
            }
            
            
            .yili{
                
                font-size: 0.75em;
                color: darkred;
            }
            
            
            .bal{
                
                font-size: .75em;
                color:  black;
                    
            }
            
             li{
                
                text-align:center;
                color:  #000066;
                font-size: 1em;
                list-style:  none; 
                
            }
            
            h2{
                
                color: crimson;
            }
            
        </style>
                     
    </head>
    <body>
        <?php
         $zonn = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites) or die('cant connect');
        
        $recno = $_POST['invoice'];
  $tata = "select productname,sum(qtyout) as qty,discount,unitprice,sum(qtyout*unitprice)-sum(qtyout * unitprice * 0.01 * discount) as amount from sales where recno = '$recno'  group by productname";
 
 $sisi = "select productname,sum(qtyout * unitprice * 0.01 * discount) as discount from sales where recno = '$recno' group by recno";
 
 $tadau = "select customername, productname,sum(qtyout*unitprice)-sum(qtyout * unitprice * 0.01 * discount) as amount from sales where recno = '$recno' group by recno ";
 
 $data = "select productname,sum(qtyout * unitprice) as extended from sales where recno = '$recno' group by recno";
 $all = "select customername,staffname, productname,sum(qtyout) as qty,sum(qtyout * unitprice) as extended,sum(paid) as payment,sum(deposit) as deposits,sum(others) as others  from sales where recno = '$recno' group by recno";
 
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
 $custname = $dall['customername'];
 $staff = $dall['staffname'];
 
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
 $pmt = $payment;
 $newball = $cbal + $rayy - $pmt;
 //echo 'New Balance..............' .$newball;
 //$rayy = $qty * $rate;
 $rek = "insert into dbalance(bdate,invno,customername,sales,payment,balance)values(curdate(),'$recno','$customer','$rayy','$pmt','$newball')";
 
 //mysql_query($rek) or die('cant update dynamin balance');
 
 //$edebt = $alldebt['amount'];
 //$rayy = $qty * $rate;
 $tup = "update balances set balance = balance + $rayy - $pmt where customername = '$customer'";
 //mysql_query($tup) or die('cant update balance');
 
 
 
 $balance = $extended-$payment;
 $res = mysql_query($tata) or die('cant display');
 
 $sidi = mysql_query($data);
 $sid = mysql_fetch_assoc($sidi);
 
 $ext = $sid['extended'];
   
    $buns = mysql_num_fields($res);
    echo '<div>';
 echo '<table class = "table table-striped">';
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
 
                                                                                                                  
                echo '<li clsas = "lag">GLOBAL OKESON</li>';
                echo '<li></li>';
                //echo '<li class = "lag">Head Office</li>';
                echo '<div class = "clearfix">';
                echo '<div class = "pull-left">';
                echo '<li class = "lag">Head Office</li>';
                echo '<li>KUBWA.</li>';
                echo '<li>P.O</li>';
                echo '<li>' .'08035047002,080749979776'.'</li>';
                //echo '<li>' .$mydate.'</li>' ;
                echo '</div>';
                
                
 
                //echo '<div class = "clearfix">';
                echo '<div class = "pull-right">';
                echo 'Branch Office';
                echo '<li>SHOP No. 325-326 Cabda Market</li>';
                echo '<li>Mararaba,Nasssarawa State</li>';
                echo '<li>09030352273</li>';
                echo '</div>';
                echo '</div>';
                
                echo '..........';
                echo '...........';
                echo '...........';
                echo '...........';
                echo '............';
                echo '.............';
                echo '............';
                echo '............';
                echo '...........';
                echo '...........';
                echo '...........';
                echo '............';
 
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
 echo $custname;
 echo '</td>';
 echo '</tr>';
 
 
 echo '<tr>';
 echo '<td>';
 echo 'Invoiced By';
 echo '</td>';
 echo '<td>';
 echo $staff;
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
		echo number_format($row[$i],2);
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
echo number_format($qtall,2);
echo '</td>';


echo '</tr>';





echo '</table>';
echo '<h5 align = "right">Customer Sign...........................       Storekeeper Sign................. Manager`s Sign ...........</h5>';
  //echo '<h6 align = "center"> * * * *   Customer Sign*     *   *     Store Keeper`Sign    *     *    *     *           Manager`s Sign</h6>';
echo '<thead>';
echo '<tr>';
echo '<hr>';
                                                    
echo '<h5 align = "center">Received above goods in good condition </h5>';
echo '<h5 align = "center">No refund of money after payment </h5>';

echo '<h5 align = "center">Motto:Gods time the best </h5>';

echo '<h6 align = "center">Thanks for your patronage </h6>';


echo '</tr>';
echo '<tr>';
 echo '<td>';
 echo 'Limit.............................';
 echo '</td>';
 echo '<td>';
 echo number_format($lim,2);
 echo '</td>';
 echo '</tr>';
//echo '</thead>';
echo '</div>';
        ?>
    </body>
</html>
