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
        $zx = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_staff);
        
        $dept = $_POST['dept'];
        
        $sade = "insert into depts(deptname)values('$dept')";
        
        $rad = mysql_query($sade);
        if($rad)
        {
            echo 'Data Inserted';
        }
        
 else {
            echo 'Data Not Inserted';
 }
 
 
 $popo = "select * from depts";
  $rada = mysql_query($popo);
  
                       $buns = mysql_num_fields($rada);
                echo '<table id = diaga class =  table-responsive table-striped>';
                
                
                
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
    
    
   
     
    echo '</table>';
 
 
  
  
        
        ?>
    </body>
</html>
