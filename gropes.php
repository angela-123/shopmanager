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
     $d1 = $_POST['date'];
     $d2 = $_POST['datts'];
     $grops = "select salestype, sum(qtyout * unitprice) as sales from sales where sdate between '$d1' and '$d2' and salestype != 'payments' group by salestype";
     $res = mysql_query($grops);
     
     
        
     $buns = mysql_num_fields($res);
//echo //'<div class = "container-fluid">';
//echo '<div class = "row">';
//echo '<div class = "row">';
//echo '<div class = "col-md-4">';
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
 $pnamex = mysql_escape_string($_POST['customer']);
        
 $set = "select sdate as date,productname,qtyout,unitprice, qtyout * unitprice as debit,paid as credit,deposit,others,opbal as opbal from sales where sdate between '$d1' and '$d2'";
 $totals = "select sum(qtyout * unitprice) as debit,sum(paid) as credit,sum(deposit) as deposit,sum(others) as others,sum(opbal) as bal,sum(0.01 * qtyout * unitprice * discount) as discount,sum(0.01 * qtyout * unitprice * pdisc) as pdiscount from sales where sdate between '$d1' and '$d2'";


 
 $res = mysql_query($set);
 $tessy = mysql_query($totals);
 
 $tosin = mysql_fetch_assoc($tessy);
 $debit = $tosin['debit'];
 $credit = $tosin['credit'];
 $deposit = $tosin['deposit'];
 $others = $tosin['others'];
 $xbal = $tosin['bal'];
 $zdisc = $tosin['discount'];
 $prdisc = $tosin['pdiscount'];
 //echo $debit;
 //echo $credit,$deposit;
 if($res)
 {
     //echo 'Ledger';
 }
 
else {
     echo 'Nopee';
}
$buns = mysql_num_fields($res);
//echo '<div class = "table-responsive">';
echo '<table class = "table table-responsive table-striped-table-bordered col-md-7">';

echo '<tr>';
echo '<td>';
echo 'total sales for the day';
echo '</td>';

echo '<td>';
//echo $pnamex;
echo '</td>';
echo '</tr>';




// echo '<tr>';


    //echo '<td>';
    //echo 'Opening Balance';
    //echo '</td>';
    //echo '<td>';
    //echo number_format($xbal,2);
    //echo '</td>';
    //echo '</tr>';



    echo '<td>';
    echo 'Total Sales';
    echo '</td>';
    echo '<td>';
    echo number_format($debit,2);
    echo '</td>';
    echo '</tr>';
    
    
    echo '<tr>';
    echo '<td>';
    echo 'Total Payment';
    echo '</td>';
    echo '<td id = "munax">';
    echo number_format($credit,2);
    echo '</td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<td>';
    echo 'Total Deposit';
    echo '</td>';
    echo '<td id = "muna">';
    echo number_format($deposit,2);
    echo '</td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<td>';
    echo 'Other Expenses';
    echo '</td>';
    echo '<td>';
    echo number_format($others,2);
    echo '</td>';
    echo '</tr>';
    
    $ydisc = $prdisc + $zdisc;
    echo '<tr>';
    echo '<td>';
    echo 'Total Discount';
    echo '</td>';
    echo '<td>';
    echo number_format($ydisc,2);
    echo '</td>';
    echo '</tr>';
    
    
    
    
    
    
    $bal = $debit - $credit  +$others + $xbal - $zdisc - $prdisc;
    
   echo '<tr>';
    echo '<td class = "liki">';
    echo 'Total Balance-Unpaid';
    echo '</td>';
    echo '<td class = "liki">';
    echo number_format($bal,2);
    echo '</td>';
    echo '</tr>';
echo '</table>';



     ?>

     <div id = "tuna" class = "col-md-7"></div>
     <script>
     $(document).ready(function(){
         $("#muna").mouseover(function(){

             this.style.backgroundColor = "black";
             this.style.fontSize ='2em';
             this.style.color = 'white';
             $("#tuna").fadeIn(100);

             $.ajax({

                 type:"post",
                 url:"payments.php",

                 success:function(data)
                 {
                     $("#tuna").html(data);
                 },

                 error:function()
                 {
                     alert('Not Connected');
                 }

             })
         })


         $("#muna").mouseout(function(){
             this.style.backgroundColor = 'white';
             this.style.fontSize = '1em';
             this.style.color = 'black';
             $("#tuna").fadeOut(1000);

         })

     })
         
     </script>
</body>
</html>