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
         $jon = mysql_connect('localhost','staff','angela')or die('cant connect');
         mysql_selectdb(hotels)or die('cant select');
         
         $cc = $_POST['cc'];
         $fx = $_POST['date'];
         $fy = $_POST['datex'];
         echo $fx;
         
         $rdx = "select expdate as date,costcenter,receivedby,details,amount from expenses where costcenter = '$cc'";
         $gx = "select sum(amount) as total from expenses where costcenter = '$cc'";
         $tx = mysql_query($gx);
         $ux = mysql_fetch_assoc($tx);
         $amt = $ux['total'];
         
         $res = mysql_query($rdx);
         
                                
                  $buns = mysql_num_fields($res);
                echo '<table class = "table table-responsive table-bordered table-striped table-hover">';
                echo '<tr>';
                echo '<td>';
                echo 'Expenditure Analysis';
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
		
		{
			echo '<nobr>'. $row2[$i] . '</nobr>';
		}
	}   echo '</td>';
	echo '</tr>';
        
        
    }
     echo '<tr>';
        echo '<td>';
        echo 'Total Expenses';
        echo '</td>';
        echo '<td>';
        echo number_format($amt,2);
        echo '</td>';
        
        
        echo '</tr>';
        
    echo '</table>';
        
         
        ?>
    </body>
</html>
