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
                color: orangered;
            }
            
            
            td{
                
                color: darkblue;
                border: 1px #c7ddef solid;
                font-size: 0.75em;
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
        $zonn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app);
        $datex = $_POST['date'];
      
        $tef = "select recno as invoiceno,customername,staffname as invoicedby, sum(qtyout * unitprice) - sum(0.01 * qtyout * unitprice*discount) as totalsales,sum(paid) as payment,sum(qtyout * unitprice)-sum(0.01 * qtyout * unitprice * discount) -sum(paid) as balance from sales  where sdate = '$datex'   group by recno";
        
        $ras = "select sdate,productname,staffname, sum(qtyout * unitprice) as total,sum(paid) as payment,sum(0.01 * qtyout * unitprice * discount) as tdiscount,sum(qtyout * unitprice)-sum(0.01 * qtyout * unitprice *discount) as totbalance from sales where sdate = '$datex'  group by sdate";
        
        $tand = mysql_query($ras) or die('cant query');
        
        $daf = mysql_fetch_assoc($tand);
        
        $gtotal = $daf['total'];
        $payment = $daf['payment'];
        $bal = $daf['totbalance'];
        $disc = $daf['tdiscount'];
        $date = $daf['sdate'];
        
        $res = mysql_query($tef) or die('Cant query');
        
                           $buns = mysql_num_fields($res);
                echo '<table class = "table table-responsive table-striped table-borderd table-hover">';
                echo '<h4>EJHIL NIGERIA LIMITED</h4>';
                echo '<h4>DAILY INVOICE REPORT</h4>';
                echo '<h4>'  .$date .'</h4>';
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
    echo number_format($gtotal,2);
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
    
    
     
    echo '</table>';
        
 
          
        
        
        ?>
    </body>
</html>
