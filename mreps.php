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
                color:black;
            }
            
            td{
                
                border: 1px #adadad solid;
                color: black;
                font-style:  italic;
            }
        </style>
                                   
                    <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
           
          <script src="js/jquery-1.11.3.js"></script>
        ‪<script src="js/bootstrap.min.js"></script>                           

        
    </head>
    <body>
        <?php
        $zonn = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        
        $date = $_POST['date'];
        $yr = $_POST['yr'];
        $loc = $_POST['loc'];
        
        $dex = "select productname,qtyout,unitprice,qtyout * unitprice as amount,qtyout * unitprice -qtyout * unitcost as profit,paid,deposit from sales where MONTHNAME(sdate) = '$date' AND YEAR(sdate) = '$yr'";
        $tara = "select sdate, sum(qtyout) as qtysold,sum(qtyout*unitprice) as sales,sum(paid) as payment,sum(deposit) as deposits,sum(others) as others from sales where MONTHNAME(sdate) = '$date' AND YEAR(sdate) = '$yr' group by sdate";
        
        $maya = "select sum(qtyout * unitprice) - sum(qtyout * unitcost) as profit from sales where MONTHNAME(sdate) = '$date' AND YEAR(sdate) = '$yr' group by MONTHNAME(sdate)";
        $dart = mysql_query($maya);
        $dara = mysql_fetch_assoc($dart);
        $profit = $dara['profit'];
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
 
 echo '<table id = "diaga" class = " table table-responsive table-striped table-bordered table-hover">';
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
echo 'Total Sales';
echo '</td>';
echo '<td>';
echo number_format($totsales,2);
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo 'Total Cash Sales';
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
echo 'Total Profit';
echo '</td>';
echo '<td>';
echo number_format($profit,2);
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
