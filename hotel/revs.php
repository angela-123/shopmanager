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
         
         $d1 = $_POST['dte1'];
         $d2 = $_POST['dte2'];
         $d3 = $_POST['dte3'];
         $room = $_POST['rm'];
         $amt = $_POST['amt'];
         $details = $_POST['details'];
         $cashier = $_SESSION['username'];
         $guest = $_POST['gname'];
         
         $ui = "insert into reserves(tdate,customer,resdate,resenddate,paid,cashier,room,details)values('$d1', '$guest','$d2', '$d3','$amt','$cashier','$room','$details')";
         $cash = "insert into dcash(date,ptype,details,customer,amount,cashier)values('$d1','Reservation','$details','$guest','$amt','$cashier')";
         mysql_query($ui) or die('cant insert');
         mysql_query($cash) or die('cant insert into cash');
         
         $tf = "update rooms set resvin = '$d2',resvout = '$d3',reserveamt = '$amt' where roomno = '$room'";
         mysql_query($tf) or die('cant reserve');
         
         $joshua = "insert into bills(date,customer,room,resamt)values('$d1','$guest','$room','$amt')";
         
         mysql_query($joshua) or die('cant insert into bills');
         
         $rt = "select * from reserves where customer = '$guest' and resdate = '$d2'";
         
         $res = mysql_query($rt);
         
                                             $buns = mysql_num_fields($res);
                echo '<table class = "table table-responsive table-hover table-striped table-bordered">';
                
                
                
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
    
    
    echo '</table>';
        
 
         
        ?>
    </body>
</html>
