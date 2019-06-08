<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>payments</title>
    <style>
    th{
        font-size:1em;
    }

    td{
        font-size:0.98em;
    }
    </style>
</head>
<body>
    <?php
     $zonn = mysql_connect('localhost','staff','angela');
     mysql_select_db(whites);
     $grops = "select sdate as date,customername,  deposit as deposit from sales where sdate = curdate() and deposit > 0";
     $res = mysql_query($grops);
          $buns = mysql_num_fields($res);
echo '<div class = "container-fluid">';
//echo '<div class = "row">';
echo '<div class = "row">';
echo '<div class = "col-md-7">';
//echo '<label class = "form-control">PRICE LIST</label>';
echo '<table id = "diaga" class = " table table-responsive table-striped table-bordered table-hover col-md-7">';





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
//echo '<a href = #'. $row[$i]> .'</a>'; 
  echo '<a href = priceupdate.php class = xira>' .$row[$i].'</a>' ;
}   echo '</td>';
echo '</tr>';
}

//echo '<tr>';
//echo '<td>';
//echo 'Tota Stock Worth.............';
//echo '</td>';

//echo '<td>';
//echo number_format($stwth);
//echo '</td>';


//echo '</tr>';

//echo '<br>';

//echo '<tr>';
//echo '<td>';
//echo 'Tota Stock Cost.............';
//echo '</td>';

//echo '<td class = "vili">';
//echo number_format($stcost);
//echo '</td>';



echo '</table>';
     
     ?>
</body>
</html>