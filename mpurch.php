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
            th{
                font-weight: bold;
                font-size: 1.2em;
                color: brown;
            }
            
            td{
                
                border: 1px #adadad solid;
                color: black;
                font-style:  italic;
                font-family:calibri;
                font-size:1em;
            }
        </style>
                                          
        
    </head>
    <body>
        <?php
        $zonn = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        
        $date = $_POST['date'];
        $yr = $_POST['yr'];
        
        $dex = "select pdate as date,suppliername,model as productname,qtyin,unitcost,qtyin * unitcost as amount,paid,deposit,others from purchases where MONTHNAME(pdate) = '$date' AND YEAR(pdate) = '$yr'";
        $tara = "select pdate, sum(qtyin) as qtysold,sum(qtyin*unitcost) as sales,sum(paid) as payment,sum(deposit) as deposits,sum(others) as others from purchases where MONTHNAME(pdate) = '$date' And YEAR(pdate) = '$yr' group by pdate";
        $mum = mysql_query($tara);
        
        $zobo = mysql_fetch_assoc($mum);
        $totqty = $zobo['qtysold'];
        $totsales = $zobo['sales'];
        $pmt = $zobo['payment'];
        $dpx = $zobo['deposits'];
        $othx = $zobo['others'];
        
        
        $res = mysql_query($dex);
        
        if($res)
        {
            //echo 'Preview Returned Data';
        }
 else {
     
            echo 'No Data Returned';
 }
 
    $buns = mysql_num_fields($res);
    echo '<div class = "table-responsive table-striped">';
 
 echo '<table id = "diaga" class = " table table-responsive table-bordered table-stripe table-hover">';
 echo '<tr>';
 echo '<td>';
 echo 'Purchases For';
 echo '</td>';
 
 echo '<td>';
 echo $date;
 echo '</td>';
 //echo '</tr>' .'<br>';
 
 
 echo '<td>';
 echo $yr;
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
                if(is_numeric($row[$i]))
                {
		echo number_format($row[$i]);
                }
                
 else {
                    echo $row[$i];
 }
	}   echo '</td>';
	echo '</tr>';
}


echo '<tr>';
echo '<td>';
echo 'Total Purchases';
echo '</td>';
echo '<td>';
echo number_format($totsales,2);
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo 'Total Cash Purchases';
echo '</td>';
echo '<td>';
echo number_format($pmt,2);
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo 'Total Deposits';
echo '</td>';
echo '<td>';
echo number_format($dpx,2);
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo 'Other Expenses';
echo '</td>';
echo '<td>';
echo number_format($othx,2);
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo 'Total Quantity';
echo '</td>';
echo '<td>';
echo $totqty;
echo '</td>';
echo '</tr>';

echo '</table>';
 
echo '</div>';
 
 
        ?>
    </body>
</html>
