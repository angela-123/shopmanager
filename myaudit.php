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
        $nas = mysql_connect('localhost','magnelli_staff','kovachenko123');
         mysql_select_db(magnelli_app);
         
         $kode = $_POST['kode'];
         $loc = $_POST['loc'];
         
         $caya = "select transdate as date,location,productname,qtyin,qtyout,opstock from trans where productname = '$kode'";
         $kool = "select productname,sum(opstock) as initialstock,sum(qtyin) as purchases,sum(qtyout) as sales,sum(opstock) +sum(qtyin)-sum(qtyout) as stockbal from trans where productname= '$kode'  group by productname";
         $das = mysql_query($kool)or die('cant query');
         
         $zaya = mysql_fetch_assoc($das);
         $stockbalance = $zaya['stockbal'];
         $ops = $zaya['initialstock'];
         $purch = $zaya['purchases'];
         $sales = $zaya['sales'];
         
         $res = mysql_query($caya);
         
         
         if($res)
         {
             echo '';
             echo 'Computed Stock Balance' +$stockbalance;
         }
         
         
 else {
             echo 'No Returned Records';
 }
 
 
         $buns = mysql_num_fields($res);
//$file_path = 'http://localhost/wmg/images/';

    	echo '<table id = "diaga" title = "STOCK BALANCE" class = "table table-responsive table striped">';
            
//echo '<caption>DAILY EXPENSES</caption>';
echo '<tr>';
for($i = 0;$i<$buns;$i++)
{
	echo '<th>' .mysql_field_name($res, $i).'</th>';
}
echo '</tr>';

while ($row2 = mysql_fetch_row($res))
{
	echo '<tr >';
	
	for($i = 0;$i<$buns;$i++)
	
	{
		echo '<td>';
		if(is_numeric($row2[$i]))
		{
		echo number_format( $row2[$i],2);
		}
		
		else 
		{
			echo '<nobr>'. $row2[$i] . '</nobr>';
		}
	}   echo '</td>';
	echo '</tr>';
    }
      echo '</tr>'; 
      
      
       echo '<tr>';
      echo '<td>';
      echo 'Opening Stock';
      echo '</td>';
      echo '<td>';
      echo $ops;
      echo '</td>';
      
      echo '</tr>';
      
       echo '<tr>';
      echo '<td>';
      echo 'Total Sales';
      echo '</td>';
      echo '<td>';
      echo $sales;
      echo '</td>';
      
      echo '</tr>';
      
       echo '<tr>';
      echo '<td>';
      echo 'Total Purchases';
      echo '</td>';
      echo '<td>';
      echo $purch;
      echo '</td>';
      
      echo '</tr>';
      
      
      
      
      echo '<tr>';
      echo '<td>';
      echo 'Authentic Stock Balance';
      echo '</td>';
      echo '<td>';
      echo $stockbalance;
      echo '</td>';
      
      echo '</tr>';
    
    echo '</table>';
 
 
        ?>
    </body>
</html>
