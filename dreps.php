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
                font-weight: normal;
                font-size: 1.2em;
                color: darkblue;
            }
            
            td{
                
                border: 0px #adadad solid;
                color: black;
                font-style:  italic;
            }
        </style>
                                    
                                       
                                                
                                                            <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
               
‪<!-- Optional Bootstrap theme -->
‪
          <script src="js/bootstrap.min.js"></script>  
        
    </head>
    <body>
        <?php
        $zonn = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        
        $date = $_POST['date'];
        $loc = $_POST['loc'];
        
        $dex = "select customername, productname,sum(qtyout) as qty,recno from sales where sdate = '$date' and qtyout >0 group by customername,productname";
        $tara = "select sdate, sum(qtyout) as qtysold,sum(qtyout*unitprice) as sales,sum(paid) as payment,sum(deposit) as deposits,sum(others) as others from sales where sdate = '$date' group by sdate";
        $mum = mysql_query($tara);
        
        $zobo = mysql_fetch_assoc($mum);
        $totqty = $zobo['qtysold'];
        $totsales = $zobo['sales'];
        $pmt = $zobo['payment'];
        $dpx = $zobo['deposits'];
        $othx = $zobo['others'];
        
        $totalcash = $pmt +$dpx;
        
        
        $res = mysql_query($dex);
        
        if($res)
        {
            //echo 'Preview Returned Data';
        }
 else {
     
            echo 'No Data Returned';
 }
 
    $buns = mysql_num_fields($res);
    //echo '<div class = "table-responsive table-striped">';
 
 echo '<table id = "diaga" class = " table table-responsive table-hover table-striped table-bordered">';
 
 echo '<tr>';
echo '<td>';
echo 'Total Sales For';
echo '</td>';
echo '<td>';
echo $date;
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
		echo $row[$i];
                }
                
 else {
                    echo $row[$i];
 }
	}   echo '</td>';
	echo '</tr>';
}












echo '</table>';
 
//echo '</div>';
 
 
        ?>
    </body>
</html>
