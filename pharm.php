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
            #diaga th{
                width: 60px;
                text-align: left;
                font-size: 11pt;
                border: 1px;
                font-weight: bolder;
                color:  #990033;
            }
            
            #gagad{
                position: absolute;
                bottom:0px;
                right:50px;
                width: 200px;
                background:wheat;
                font-size: 14pt;
                right: 300px;
                color:  #009999;
            }

td{

font-size:bolder;
}
            
            
            
                        
        </style>
    </head>
    <body>
        <?php
        /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$nas = mysql_connect('localhost','staff','angela');
mysql_select_db(pharmacy);
$dat = $_POST['tdate'];
$code = $_POST['code'];
//$cod = $_POST['mattype'];
$qt = $_POST['qty'];
//$rat = $_POST['rate'];
$rec = $_POST['recno'];
$cashier = $_POST['cashier'];
$disc = $_POST['disc'];
$naira = $_POST['naira'];
$stype = $_POST['stype'];
$cname = $_POST['cname'];
//echo $disc,$naira;
$daya = "select productname, rate from items where productcode = '$code'";
//$titi = "select date, productcode,balance from stock where productcode = '$code')";
$rose = mysql_query($daya);
//$stock = mysql_query($titi);

$dog = mysql_fetch_assoc($rose);
//$eso = mysql_fetch_assoc($stock);

$uprice = $dog['rate'];
$pname = $dog['productname'];
//$olbal = $eso['balance'];
//$newbal = $olbal - $qt;

$slix = $qt * $uprice;
$sql = "insert into dailies(ddate,productcode,productname,qtysold,unitprice,recno,cashier,disc,naira,salestype,customer)values('$dat','$code','$pname', '$qt','$uprice','$rec','$cashier','$disc','$naira','$stype','$cname')";
//$zal = "insert into stock(date,productcode,productname,qtyout,balance)values('$dat','$code','$pname','$qt','$newbal')";


if(mysql_query($sql))
{
    echo '';
}
 else {
    echo 'Data Not Saved';
}

//mysql_query($zal)or die('cant insert');

$rect = "select productname as PRODUCTNAME,sum(qtysold) as QTY,unitprice as UNITPRICE,sum(qtysold) * unitprice - disc * 0.01 * unitprice * sum(qtysold) As EXTENDED from dailies where recno = '$rec' GROUP BY productname ";
$teck = "select sum(disc * .01 * unitprice * qtysold)+ sum(naira) as totaldiscount from dailies";
$eel = "select SUM(qtysold * unitprice)-sum(disc * 0.01 *unitprice * qtysold) As Total from dailies where recno = '$rec'";
$over = "select SUM(qtysold * unitprice)-sum(naira) As Totalsales from dailies where ddate = '$dat' And cashier = '$cashier'";
$tsales =  mysql_query($over);
$mydisc = mysql_query($teck);
$pract = mysql_fetch_assoc($mydisc);
$totdisc = $pract['totaldiscount'];
//$daya = "select rate from restitems where menuitem = '$cod'";


$res = mysql_query($rect)or die('cant query');
$rdx = mysql_query($eel);
$drq = mysql_fetch_assoc($rdx);
$mysales = mysql_fetch_assoc($tsales);

        $buns = mysql_num_fields($res);
                echo '<table id = diaga>';
                
                echo '<tr>';
                echo '<td>';
                echo '<nobr>'. 'DUFLUX PHARMACY & STORES' .'</nobr>';
                echo '</td>';
                echo '</tr>';
                
                echo '<tr>';
                echo '<td>';
                echo '<nobr>';
                echo 'SUITE D1,HALIMA PLAZA';
                echo '</nobr>';
                echo '</td>';
                echo '</tr>';
                
                echo '<tr>';
                echo '<td>';
                echo '<nobr>';
                echo 'AREA 11,ABUJA';
                echo '</nobr>';
                echo '</td>';
                echo '</tr>';


                echo '<tr>';
                echo '<td>';
                echo '<nobr>';
                echo '0803-7881-619';
                echo '</nobr>';
                echo '</td>';
                echo '</tr>';

                 
                
                
                echo '<tr>';
                echo '<td>';
                echo 'Receipt#';
                echo '</td>';
                echo '<td>';
                echo $rec;
                echo '</td>';
                echo '</tr>';
                
                
                echo '<tr>';
                echo '<td>';
                echo 'Date';
                echo '</td>';
                
                echo '<td>';
                echo '<nobr>';
                echo $dat;
                echo '</nobr>';
                echo '</td>';
                echo '</tr>';
                
                echo '<tr>';
                echo '<td>';
                echo 'Cashier';
                echo '</td>';
                
                echo '<td>';
                echo '<nobr>';
                echo $cashier;
                echo '</nobr>';
                echo '</td>';
                echo '</tr>';
                
                
                
                
                
           
                echo '<tr>';
for($i = 0;$i<$buns;$i++)
{
	echo '<th>' .mysql_field_name($res, $i).'</th>';
}
echo '</tr>';

while ($row2 = mysql_fetch_row($res))
{
	echo '<tr>';
	
	for($i = 0;$i<$buns;$i++)
	
	{
		echo '<td>';
		if(is_numeric($row2[$i]))
		{
		echo number_format( $row2[$i],2);
		}
		
		else 
		{
			echo '<nobr>'. $row2[$i] . '</nobr>';
		}
	}   echo '</td>';
        
	echo '</tr>';
        
    }
      
    echo '<tr>';
      echo '<td>';
      
      echo '';
      echo '';
      echo '';
      echo '';
      
      
      
      
      
      
      
                echo 'Total';
                echo '</td>';
                
                echo '<td>';
                echo '<nobr>';
                echo number_format($drq['Total']-$naira);
                echo '</nobr>';
                echo '</td>';
                echo '</tr>';
        
    
    //echo '</table>';
	
    
    
    echo '</table>';
        ?>
    
        
        
        <script type="text/javascript">
	$("#diagaa").dialog(
			{
			show:"slide",
			    hide:"puff",
			    height:"auto",
			    width:"290",
			    position:"right center"
			    
			    	
			}
			
			);
	</script>
        
        <?php 
        $titi = "select date, productcode,balance from stock where productcode = '$code' And balance > 0";
        $stock = mysql_query($titi);
         while($eso = mysql_fetch_assoc($stock))
         {
         $olbal = $eso['balance'];
         }
        ?>
        
        <?php 
        
         $newbal = $olbal - $qt;
         $zal = "insert into stock(date,productcode,productname,qtyout,balance)values('$dat','$code','$pname','$qt','$newbal')";
         mysql_query($zal);
         
        ?>
        
        <?php 
        $sop = "select *  from stockbal where productcode = '$code'";
        $gas = mysql_query($sop);
        $zow = mysql_fetch_assoc($gas);
        $xbal = $zow['balance'];
        $coom = $xbal - $qt;
        //echo $coom;
        //echo $xbal;
        
        $update = "UPDATE stockbal SET balance = '$coom' where productcode = '$code'";
        mysql_query($update);
        ?>

    </body>
     
</html>
