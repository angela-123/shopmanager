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
            td{
                font-weight: bold;
                color: darkblue;
            }
        </style>
    </head>
    <body>
        <?php
        $zonn = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        
        $ref = "select model as productname , productname as code,dept,unitcost,rate, stockbal as stock, unitcost * stockbal as stockcost,rate *stockbal as stockworth from stock  order by model asc";
        $rx = "select sum(stockbal * rate) as total from stock";
        $yem = mysql_query($rx);
        $sat = mysql_fetch_assoc($yem);
        $tworth = $sat['total'];
        
        $res = mysql_query($ref);
          $buns = mysql_num_fields($res);
 
 echo '<table id = "diaga" class = "table table-responsive table-striped table-hover table-bordered">';
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
		echo $row[$i];
	}   echo '</td>';
	echo '</tr>';
        
        
}


echo '<tr>';
echo '<td>';
echo 'Total Stock Worth';
echo '</td>';

echo '<td>';
echo number_format($tworth,2);
echo '</td>';

echo '</tr>';
echo '</table>';
       
 
        
        ?>
    </body>
</html>
