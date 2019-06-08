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
        mysql_select_db(ajpos)or die('Cant connect');
        
        $cname = $_POST['cname'];
        $add = $_POST['add'];
        $phone = $_POST['phone'];
        
        $dx = "insert into customers(date,customername,address,phoneno)values(curdate(),'$cname','$add','$phone')";
        
        mysql_query($dx);
        
        
        $raj = "select date,customername,address,phoneno from customers where customername = '$cname' and date = curdate()";
        
        $res = mysql_query($raj);
        
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
