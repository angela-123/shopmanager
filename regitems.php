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
                border: 0px #c0c0c0 solid;
                font-weight: normal;
                background:  #49afcd;
            }
            
            td{
                font-size: 0.95em;
                color:darkblue;
                font-weight:  bold;
                border:1px #adadad solid;
            }
            
            h3{
                color: red;
                position: absolute;
                
            }
            
            
            .vili{
                
                font-size: 2em;
                color:  #990033;
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
        $zonn = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        
        $pcode = $_POST['bcode'];
        $pname = $_POST['pname'];
        $sub = $_POST['subdep'];
        $dep = $_POST['dep'];
        $rate = $_POST['rate'];
        $ucost = $_POST['ucost'];
        $opstock = $_POST['opstock'];
        //$disc = $_POST['disc'];
        $del  = $_POST['del'];
        $model = $_POST['model'];
        
        //$dex = "select * from newproducts where code = '$pcode'";
        //$sed = mysql_query($dex);
       // $cage = mysql_fetch_assoc($sed);
        //$xc = $cage['description'];
       //$stockk = $cage['stock'];
        //$ucost  = $cage['cost'];
       // $dept = $cage['dept'];
        
        
            
        
        $rak = "insert into stock(productname,model,dept,rate,unitcost,stockbal)values('$pcode','$pname', '$dep','$rate','$ucost','$opstock')";
        $stock = "insert into products(productname,model,dept,rate,unitcost)values('$pcode','$pname','$dept','$rate','$ucost')";
        $sales = "insert into trans(transdate,productname,model,qtyin,qtyout,opstock)values(curdate(),'$pcode','$pname',0.0,0.0,'$opstock')";
        $dstock = "insert into dstock(stdate,productname,model,qtyin,qtyout,stock)values(curdate(),'$pcode','$pname'  ,0.0,0.0,'$opstock')";
        
        
        $fes = mysql_query($rak)or die('<h3>Product Already Registered</h3>');
        $tax = mysql_query($stock) or die('cant insert into products');
        $ros = mysql_query($sales) or die('cant update trans');
        $vlac = mysql_query($dstock) or die('cant insert into dstock');
        
        if($fes)
        { 
            echo '';
        }
        
 else {
            echo '';
 }
 
 $zak = "select productname,model,description,dept,rate,unitcost,dealer from products where model = '$pcode'";
 $graf = "select sum(rate * stockbal) as stockworth,sum(unitcost * stockbal) as stockcost from stock";
 $graffa = mysql_query($graf);
 
 //$rafa = mysql_fetch_assoc($graffa);
 
 $stwth = $rafa['stockworth'];
 $stcost = $rafa['stockcost'];
         
 $res = mysql_query($zak);
 
   $buns = mysql_num_fields($res);
 
 echo '<table class = "table table-responsive table-striped table-hover">';
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
echo '</table>';
       
 
        ?>
    </body>
</html>
