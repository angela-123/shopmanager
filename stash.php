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
        $zonn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app);
        
        $loc = $_POST['loc'];
        
        $dar = "select productname,dept,stockbal from stock where location = '$loc'";
        
        $res = mysql_query($dar);
        
         
  $buns = mysql_num_fields($res);
   
 echo '<table id = "diaga" class = "table table-responsive table-striped">';
 echo '<tr>';
 echo '<td>';
 echo 'Stock Report For';
 echo '</td>';
 echo '<td>';
 echo $loc;
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
		echo $row[$i];
	}   echo '</td>';
	echo '</tr>';
}
echo '</table>';
        
        
        ?>
    </body>
</html>
