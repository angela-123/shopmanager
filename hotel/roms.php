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
         $conn = mysql_connect('localhost','staff','angela');
        mysql_select_db(hotels)or die('Cant connect');
        
        $room = $_POST['room'];
        $cat = $_POST['cat'];
        $rate = $_POST['rate'];
        
        $sav = "insert into rooms(category,roomno,rate,status)values('$cat','$room','$rate','Vacant')";
        
        $rt = mysql_query($sav);
        
        $fg = "select * from rooms";
        
        $res = mysql_query($fg) or die('cant query');
        
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
