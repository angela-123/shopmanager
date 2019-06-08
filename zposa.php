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
                font-size: .95em;
                border: 1px #1c94c4 solid;
            }
            
            td{
                
                border: #1b6d85 solid 1px;
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
        $date = $_POST['date'];
        $customer = $_POST['cname'];
        $product = $_POST['pname'];
        $qty = $_POST['qty'];
        $rate = $_POST['uprice'];
        $paid = $_POST['paid'];
        $recno = $_POST['rec'];
        $dep = $_POST['dep'];
        $other = $_POST['other'];
        $stype = $_POST['stype'];
        
        $dix = "select productname,dept,rate from products where productname = '$product'";
        $fad = mysql_query($dix);
        
        $go = mysql_fetch_assoc($fad);
        $sprice = $go['rate'];
        $dept = $go['dept'];
        
        $ox = "select productname,stock from stock where productname = '$product'";
        
        $box = mysql_query($ox);
        $vox = mysql_fetch_assoc($box);
        $gstock = $vox['stock'];
        $pstock =$gstock - $qty;
        
        $yey = "insert into sales(sdate,salestype,customername,productname,qtyout,unitprice,paid,deposit,others,recno)values('$date', '$stype','$customer','$product','$qty','$sprice','$paid','$dept','$other','$recno')";
        $rans = "insert into trans(transdate,productname,qtyin,qtyout,opstock)values('$date','$product',0.0,'$qty',0.0)";
        $dstock = "insert into dstock(stdate,productname,qtyin,qtyout,stock)";
        
        $ups = "update stock set stock = '$pstock' where productname = '$product'";
        mysql_query($ups) or die('cant update stock table');
        
        $zade = mysql_query($yey)or die('cant insert now');
        $trice = mysql_query($rans) or die('cant insert trans table');
        
        if($zade)
        {
            //echo 'Data Inserted';
        }
        
 else {
            echo 'Data Not Inserted';
 }
 
 
 $tata = "select productname,qtyout,unitprice,qtyout*unitprice as amount,paid,deposit,others from sales where recno = '$recno' and qtyout+paid+deposit+others > 0";
 $data = "select productname,sum(qtyout * unitprice) as extended from sales where recno = '$recno' group by recno";
 $all = "select customername,productname,sum(qtyout * unitprice) as extended,sum(paid) as payment,sum(deposit) as deposits,sum(others) as others from sales where customername = '$customer' group by customername";
 $tall = mysql_query($all);
 
 $dall = mysql_fetch_assoc($tall);
 
 $extended = $dall['extended'];
 $payment = $dall['payment'];
 $deposit = $dall['deposits'];
 $others = $dall['others'];
 $balance = $extended +$others -$payment - $deposit;
 $res = mysql_query($tata) or die('cant display');
 
 $sidi = mysql_query($data);
 $sid = mysql_fetch_assoc($sidi);
 
 $ext = $sid['extended'];
 
    $buns = mysql_num_fields($res);
    //echo '<div class = "table-responsive">';
 //echo '<table id = "diaga" class = "table col-sm-4 col-md-6 col-lg-7">';
 //echo '<tr>';
 //echo '<td>';
 //echo $customer;
 //echo '</td>';
 //echo '</tr>';
 
 
 //echo '<tr>';
 //echo '<td>';
 //echo $recno;
 //echo '</td>';
 //echo '</tr>';
 
 
 
 
//echo '<tr>';
//for($i = 0;$i<$buns;$i++)
//{
	//echo '<th>' .mysql_field_name($res, $i).'</th>';
//}
//echo '</tr>';

//while ($row = mysql_fetch_row($res))
//{
	//echo '<tr>';
	
	//for($i = 0;$i<$buns;$i++)
	
	//{
		//echo '<td>';
                //if(is_numeric($row[$i]))
                //{
		//echo number_format($row[$i],2);
                //}
 //else {
                    //echo $row[$i];
 //}
	//}   echo '</td>';
	//echo '</tr>';
//}
//echo '<tr>';
//echo '<td class = yili>';
//echo "Total Amount For Invoice";
//echo '</td>';


//echo '<td class = yili>';
//echo number_format($ext,2);
//echo '</td>';


//echo '</tr>';



//echo '<tr>';
//echo '<td>';
//echo "Total Debit";
//echo '</td>';


//echo '<td>';
//echo number_format($extended,2);
//echo '</td>';


//echo '</tr>';


//echo '<tr>';
//echo '<td>';
//echo "Total Credit";
//echo '</td>';


//echo '<td>';
//echo number_format($payment,2);
//echo '</td>';


//echo '</tr>';


//echo '<tr>';
//echo '<td>';
//echo "Total Deposit";
//echo '</td>';


//echo '<td>';
//echo number_format($deposit,2);
//echo '</td>';


//echo '</tr>';


//echo '<tr>';
//echo '<td>';
//echo "Other Expenses";
//echo '</td>';


//echo '<td>';
//echo number_format($others,2);
//echo '</td>';


//echo '</tr>';



//echo '<tr>';
//echo '<td class = bal>';
//echo "Balance";
//echo '</td>';


//echo '<td class = bal>';
//echo number_format($balance,2);
//echo '</td>';


//echo '</tr>';





//echo '</table>';
//echo '</div>';
        ?>
        
        
        
        <div class="table-responsive"></div>
        
        
        <table>
            
            <?php 
                
                        $grow = mysql_fetch_assoc($res) ;
                            
                        
               ?>  
                
            <thead>
            <tr>
                <td>Customer</td>
                <td><input type="text" value="<?php $grow['customername']; ?>"></td>
            </tr>
            <tr>
                <td>Receipt#</td>
                <td><input type="number" value="<?php $grow['recno']; ?>"></td>
            </tr>
            </thead>
            
            <?php 
                
                        while ($row = mysql_fetch_assoc($res)) {
                            
                        
                 
                ?>
            <thead>
                <tr>
                    <th>Productname</th>
                    <th>Quantity</th>
                    <th>Unitprice</th>
                    <th>Extended</th>
                </tr>
            </thead>
            
            
            
            <tbody>
                <tr>
                    <td><input type="text" value="<?php $row['productname']; ?>"></td>
                    <td><input type="number" value="<?php $row['qtyout'] ?>"></td>
                    <td><input type="number" value="<?php $row['unitprice'] ?>"></td>
                    <td><input type="number" value="<?php $row['qtyout']*$row['unitprice'] ?>"></td>
                    
                </tr>
            </tbody>
                        <?php }?>
            
        </table>
    </body>
</html>
