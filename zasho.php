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
                font-size: 1.2em;
                border: 1px #1c94c4 solid;
            }
            
            td{
                
                border: #1b6d85 solid 1px;
                font-size: 1.2em;
            }
            
            
            .yili{
                
                font-size: 1.6em;
                color: darkred;
            }
            
            
            .bal{
                
                font-size: 1.3em;
                color:  darkblue;
                    
            }
        </style>
                                        
                                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
        <?php
        $zonn = mysql_connect('localhost','nwinco_staff','kovachenko123');
        mysql_select_db(nwinco_app) or die('cant connect');
        
        $product = $_POST['pname'];
        $qty = $_POST['qty'];
        $rate = $_POST['rate'];
        $paid = $_POST['pmt'];
        $recno = $_POST['recno'];
        
        $loc = $_POST['loc'];
        
        
         $mydate = "select curdate() as tdate";
        $rdate = mysql_query($mydate);
        $zdate = mysql_fetch_assoc($rdate);
        $today = $zdate['tdate'];
        
        $dix = "select productname,dept,rate from products where productname = '$product'";
        $fad = mysql_query($dix);
        
        $go = mysql_fetch_assoc($fad);
        $sprice = $go['rate'];
        $dept = $go['dept'];
        
        $ox = "select productname,stockbal from stock where productname = '$product'";
        
        $box = mysql_query($ox);
        $vox = mysql_fetch_assoc($box);
        $gstock = $vox['stockbal'];
        $pstock =$gstock - $qty;
        
        if($pstock <= 0 or $gstock <=0)
        {
            echo '<h2><blink>Product Out Of stock</blink></h2>';
            $qty = 0;
        }
        
 else {
        
        $yey = "insert into sales(sdate,location,productname,qtyout,unitprice,paid,recno)values(curdate(),'$loc','$product','$qty','$rate','$paid',   '$recno')";
        $rans = "insert into trans(transdate,productname,location,qtyin,qtyout,opstock,recno)values('$today', '$product',  'emab',0.0,'$qty',0.0,'$recno')";
        $dstock = "insert into dstock(stdate,location,productname,qtyin,qtyout,stock)values('$date','$loc','$product','$qty',0,0)";
        
        $ups = "update stock set stockbal = stockbal - $qty where productname = '$product' and location = '$loc'";
        mysql_query($ups) or die('cant update stock table');
        
        $zade = mysql_query($yey)or die('cant insert now');
        $trice = mysql_query($rans) or die('cant insert trans table');
 }
        if($zade)
        {
            //echo 'Data Inserted';
        }
        
 else {
            echo 'Data Not Inserted';
 }
 
 
 $tata = "select productname,sum(qtyout) as qty,unitprice,sum(qtyout*unitprice) as amount from sales where recno = '$recno' group by productname";
 $data = "select productname,sum(qtyout * unitprice) as extended from sales where recno = '$recno' group by recno";
 $all = "select productname,sum(qtyout * unitprice) as extended,sum(paid) as payment,sum(deposit) as deposits,sum(others) as others from sales where recno = '$recno' group by recno";
 
 
 $tall = mysql_query($all);
 
 $dall = mysql_fetch_assoc($tall);
 
 $extended = $dall['extended'];
 $payment = $dall['payment'];
 $deposit = $dall['deposits'];
 $others = $dall['others'];
 $balance = $extended-$payment;
 $res = mysql_query($tata) or die('cant display');
 
 $sidi = mysql_query($data);
 $sid = mysql_fetch_assoc($sidi);
 
 $ext = $sid['extended'];
 
    $buns = mysql_num_fields($res);
    echo '<div class = "table-responsive">';
 echo '<table id = "diaga" class = "table col-sm-4 col-md-6 col-lg-7">';
 echo '<tr>';
 echo '<thead>';
 echo '<tr>';
 echo  '<h4 align = "center">SAMSUNG EXPERIENCE CENTER </h4>';
 echo  '<h5 align = "center"> Suite C1A,Emab Plaza,Wuse 2</h5>';
 echo  '<h5 align = "center">Abuja</h5>';
 echo  '<h5 align = "center">08033154342</h5>';
 
 echo '<h4 align = "center"> </h4>';
 echo '<h4 align = "center"><b>Cash Receipt</b> </h4>';
 
 
 echo '</tr>';
 echo '</thead>';
 
 
 
 
 echo '<tr>';
 echo '<td>';
 echo 'Invoice#';
 echo '</td>';
 echo '<td>';
 echo $recno;
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






echo '<tr>';
echo '<td class = bal>';
echo "Balance";
echo '</td>';


echo '<td class = bal>';
echo number_format($balance,2);
echo '</td>';


echo '</tr>';





echo '</table>';
echo '<thead>';
echo '<tr>';
echo '<h5 align = "center">Received above goods in good condition </h5>';
echo '<h5 align = "center">No refund of money after payment </h5>';
echo '<h2 align = "center">Thanks for your patronage </h2>';
echo '<h2 align = "center">.....Magnelli Telecom </h2>';

echo '</tr>';
echo '</thead>';
echo '</div>';
        ?>
        
        
    </body>
</html>
