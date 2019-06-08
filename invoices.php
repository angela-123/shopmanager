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
                
                background: #c4e3f3;
                font-size: 1.2em;
                font-weight: normal;
                color:darkblue;
            }
            
            
            td{
                
                color:black;
                border: 1px #c7ddef solid;
                font-size: 1em;
                font-weight:bold;
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
        $datex = $_POST['date'];
        $dat = $_POST['datts'];
      
        $tef = "select sdate as date, model as productname,sum(qtyout) as qtyout,unitprice,unitcost, sum(qtyout * unitprice) - sum(0.01 * qtyout * unitprice*discount) as totalsales,sum(paid) as payment, sum(qtyout * unitprice)-sum(qtyout * unitcost )  as profit,sum(qtyout * unitprice)-sum(0.01 * qtyout * unitprice * discount) -sum(paid) as balance from sales  where sdate between '$datex' And '$dat' And staffname!='0'  group by description,unitprice,recno";
        
        $ras = "select productname,staffname, sum(qtyout * unitprice)-sum(qtyout * unitprice *0.01 *discount)  as total,sum(paid) as payment,sum(0.01 * qtyout * unitprice * discount) as tdiscount,sum(qtyout * unitprice)-sum(0.01 * qtyout * unitprice *discount)-sum(paid) as totbalance from sales where sdate between '$datex' And '$dat' GROUP BY sdate";
        $prof = "select sum(qtyout * unitprice) as gtotal, sum(qtyout * unitcost) as tcost, sum(qtyout * unitprice)-sum(qtyout * unitcost) as tprofit from sales where sdate between '$datex' And '$dat'";
        $rop = mysql_query($prof);
        
        $baca = mysql_fetch_assoc($rop);
        $myprof = $baca['tprofit'];
        $tsales = $baca['gtotal'];
        $tcost = $baca['tcost'];
        $tand = mysql_query($ras) or die('cant query ONE');
        
        $daf = mysql_fetch_assoc($tand);
        
        $gtotal = $daf['total'];
        $payment = $daf['payment'];
        $bal = $daf['totbalance'];
        $disc = $daf['tdiscount'];
        $date = $daf['sdate'];
        
        $res = mysql_query($tef) or die('Cant query');
        
                           $buns = mysql_num_fields($res);
                echo '<table class = "table table-responsive table-striped table-borderd table-hover">';
                echo '<h4>JESSI BEAUTY STUDIO</h4>';
                echo '<h4> SALES REPORT BETWEEN</h4>';
                echo '<h4>'  .$datex .'</h4>';
                echo 'And';
                echo '<h4>'  .$dat .'</h4>';
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
		
		{      
			echo '<nobr>'. $row2[$i] . '</nobr>';
		}
	}   echo '</td>';
	echo '</tr>';
        
        
        
    }
    
    echo '<tr>';
    echo '<td>';
    echo 'Total Sales For The Day';
    echo '</td>';
    echo '<td>';
    echo number_format($tsales,2);
    echo '</td>';
    
    
    echo '</tr>';
    
    
    echo '<tr>';
    echo '<td>';
    echo 'Total Cash Sales';
    echo '</td>';
    echo '<td>';
    echo number_format($payment,2);
    echo '</td>';
    
    
    echo '</tr>';
    
    
    echo '<tr>';
    echo '<td>';
    echo 'Total Balance';
    echo '</td>';
    echo '<td>';
    echo number_format($bal,2);
    echo '</td>';
    
    
    echo '</tr>';
    
    
    echo '<tr>';
    echo '<td>';
    echo 'Total Discount';
    echo '</td>';
    echo '<td>';
    echo number_format($disc,2);
    echo '</td>';
    
    
    echo '</tr>';
    
    
    echo '<tr>';
    echo '<td>';
    echo 'Total Profit';
    echo '</td>';
    echo '<td>';
    echo number_format($myprof,2);
    echo '</td>';
    
    
    echo '</tr>';
    
     
    echo '</table>';
        
 
          
        
        
        ?>
    </body>
</html>
