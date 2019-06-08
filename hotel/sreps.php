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
    </head>
    <body>
        <?php
        $nas = mysql_connect('localhost','staff','angela');
         mysql_select_db(hotels);
         $start = $_POST['start'];
         $end = $_POST['end'];
         $cash = $_POST['cashier'];
         $hiat = "select date,customer,room,paid as payment,bpmt,refund,resamt from bills where date between '$start' and '$end' and cashier = '$cash' and paid+bpmt+refund+resamt >0";
         $rba = "select sum(paid) as payment,sum(bpmt) as bpmt,sum(refund) as refund,sum(resamt) as rvation from bills where date between '$start' and '$end' and cashier = '$cash'";
         
         $rada = mysql_query($hiat);
         
         $chaks = mysql_query($rba);
         $fach = mysql_fetch_assoc($chaks);
         $pmt = $fach['payment'];
         $bpmt = $fach['bpmt'];
         $ref = $fach['refund'];
         $enef = $fach['rvation'];
         
           //$rada = mysql_query($rax);
         
         
                             $buns = mysql_num_fields($rada);
                echo '<table id = diaga class = "table table-responsive table-striped table-bordered table-hover">';
                //echo '<thead>';
                //echo '<tr>';
               // echo '<td><nobr>FoodStop</nobr></td>';
                //echo '</tr>';
                
                //echo '<tr>';
                //echo '<td><nobr>DBM Plaza</nobr></td>';
                //echo '</tr>';
                
                //echo '</thead>';
                //echo '<p>FoodStop</p>';
                //echo '<nobsp>';
                //echo '<p>DBM Plaza,Wuse Zone 1</p>';
                
                
                echo '<tr>';
                
for($i = 0;$i<$buns;$i++)
{
	echo '<th>' .mysql_field_name($rada, $i).'</th>';
}
echo '</tr>';

while ($row2 = mysql_fetch_row($rada))
{
	echo '<tr>';
	
	for($i = 0;$i<$buns;$i++)
	
	{
		echo '<td>';
		
		{
			echo '<nobr>'.$row2[$i] . '</nobr>';
		}
	}   echo '</td>';
	echo '</tr>';
        
        
        
    }
    
    echo '</tr>';
    
    echo '<tr>';
    echo '<td>';
    echo 'Total Amount Collected';
    echo '</td>';
    echo '<td>';
    echo number_format($pmt,2);
    echo '</td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<td>';
    echo 'Total Balance Payment';
    echo '</td>';
    echo '<td>';
    echo number_format($bpmt,2);
    echo '</td>';
    echo '</tr>';
     
    echo '<tr>';
    echo '<td>';
    echo 'Total Refund';
    echo '</td>';
    echo '<td>';
    echo number_format($ref,2);
    echo '</td>';
    echo '</tr>';
    
    
    echo '<tr>';
    echo '<td>';
    echo 'Reservation';
    echo '</td>';
    echo '<td>';
    echo number_format($enef,2);
    echo '</td>';
    echo '</tr>';
    
    
    
    echo '</table>';
   
    
         
         
         
         
         
         
         
         
        ?>
    </body>
</html>
