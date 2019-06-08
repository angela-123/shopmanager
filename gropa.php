<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FABCRUSH</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
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
     $grops = "select salestype, sum(qtyout * unitprice) as sales from sales where sdate = curdate() and salestype != 'payments' group by salestype";
     $res = mysql_query($grops);
     
     
        
     $buns = mysql_num_fields($res);
echo '<div class = "container-fluid">';
//echo '<div class = "row">';
echo '<div class = "row">';
echo '<div class = "col-md-4">';
//echo '<label class = "form-control">PRICE LIST</label>';
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

     <?php 
 
     ?>
     
</body>
</html>