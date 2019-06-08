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
                font-size: 1.1em;
                width: 40%;
                border: 1px #c0c0c0 solid;
            }
            
            td{
                font-size: 0.95em;
                color:darkblue;
                font-weight:  bold;
                border:1px #adadad solid;
            }
            
            
            input[type = "text"]
            {
                font-size: 0.85em;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
        $zonn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app);
        
        $bcode = $_POST['bcode'];
        $pname = $_POST['pname'];
        $sub = $_POST['subdep'];
        $dep = $_POST['dep'];
        $rate = $_POST['rate'];
        $ucost = $_POST['ucost'];
        $opstock = $_POST['opstock'];
        $loc = $_POST['loc'];
        
        $fred = "select * from products where productname = '$pname'";
        $saz = mysql_query($fred);
        
        $xer = mysql_fetch_assoc($saz);
        $dep = $xer['dept'];
        $rate = $xer['rate'];
        $ucost = $xer['unitcost'];
        
        $rak = "insert into stock(productname,location,dept,rate,unitcost,stockbal)values('$pname', '$loc','$dep','$rate','$ucost','$opstock')";
        $stock = "insert into products(productname,dept,rate,unitcost)values('$pname','$dep','$rate','$ucost')";
        $sales = "insert into trans(transdate,location,productname,qtyin,qtyout,opstock)values(curdate(), '$loc','$pname',0.0,0.0,'$opstock')";
        $dstock = "insert into dstock(stdate,location,productname,opstock,qtyin,qtyout,stock)values(curdate(),'$loc','$pname','$opstock',0.0,0.0,'$opstock')";
        
        
        $fes = mysql_query($rak)or die('cant insert into stock');
        //$tax = mysql_query($stock) or die('cant insert into products');
        $ros = mysql_query($sales) or die('cant update trans');
        //$vlac = mysql_query($dstock) or die('cant insert into dstock');
        
        if($fes)
        { 
            echo 'Data Inserted';
        }
        
 else {
            echo 'Data  Not Inserted';
 }
 
 $zak = "select productname,dept,rate,unitcost,stockbal,location from stock where productname = '$pname' ";
 $ratz = "select sum(stockbal) as totalstock from stock where productname = '$pname'";
 $amarachi = mysql_query($ratz);
 
 $amara = mysql_fetch_assoc($amarachi);
 $tstock = $amara['totalstock'];
     
     
 $res = mysql_query($zak);
 
   $buns = mysql_num_fields($res);
 
 echo '<table id = "diaga" class = "table table-responsive table-striped">';
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
		echo $row[$i];
	}   echo '</td>';
	echo '</tr>';
}

echo '<tr>';
echo '<td>';
echo 'Total Stock';
echo '</td>';

echo '<td>';
echo $tstock;
echo '</td>';

echo '</tr>';
echo '</table>';
 
 
        ?>
    </body>
</html>
