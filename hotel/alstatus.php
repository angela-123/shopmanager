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
        
        $jx = "select date,roomno,hstatus as status from status where date = curdate()";
        $kx = "select date,count(roomno) as checkins from status where date = curdate() and hstatus = 'checkin' group by date";
        $dig = mysql_query($kx);
        $fig = mysql_fetch_assoc($dig);
        $cin = $fig['checkins'];
        
        $kxx = "select date,count(roomno) as checkins from status where date = curdate() and hstatus = 'checkout' group by date";
        $digg = mysql_query($kxx);
        $figg = mysql_fetch_assoc($digg);
        $cout = $figg['checkins'];
        
        
        $res = mysql_query($jx);
            
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
    echo '<tr>';
    echo '<td>';
    echo 'Number Of Checkins';
    echo '</td>';
    echo '<td>';
    echo $cin;
    echo '</td>';
    echo '</tr>';
    
    
    echo '<tr>';
    echo '<td>';
    echo 'Number Of Checkouts';
    echo '</td>';
    echo '<td>';
    echo $cout;
    echo '</td>';
    echo '</tr>';
    
    
    echo '</table>';
        
 
        
        ?>
    </body>
</html>
