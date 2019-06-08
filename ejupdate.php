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
            #jimi{
                color: crimson;
                font-size: 2em;
            }
        </style>
    </head>
    
            <?php session_start(); ?>
        
                       
        
        
        
                              <?php
                
        
         $zon = mysql_connect('localhost','staff','angela');
    mysql_selectdb(ejhil_app);
    $user = $_SESSION['username'];
$wela = "select username,password,status,location from users where username = '$user'";
	$tas = mysql_query($wela);
	$message = "Access Denied, You Have No Business Here";
	$vid = mysql_fetch_assoc($tas);
	
		$perm = $vid['status'];
                $loc = $vid['location'];
	
	
	//if($perm!='pharmacy') 
	if($perm!='admin')
	{   print '<div id = "jimi" class = "col-sm-4 col-md-6 col-lg-10">';
		print '<h1><blink>' .$message.'</blink></h1>';
		print '</div>';
		
		exit();
	}
        
        ?>
        
        
    <body>
        <?php
        $zonn = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        
        $bcode = $_POST['bcode'];
        $pname = $_POST['pname'];
        $sub = $_POST['subdep'];
        $dep = $_POST['dep'];
        $rate = $_POST['rate'];
        $ucost = $_POST['ucost'];
        $opstock = $_POST['opstock'];
        $disc = $_POST['disc'];
        
        $saga = "update products set rate = '$rate', unitcost = '$ucost' where productname = '$bcode'";
        
        $draga = "update stock set stockbal = '$opstock',rate = '$rate',unitcost = '$ucost' where productname = '$bcode'";
        $rag = mysql_query($draga) or die('cant update stock');
        
        $era = mysql_query($saga);
        
        
        if($era)
        {
            echo 'Records Updated';
        }
        
 else {
     
            echo 'Records Not Updated';
 }
 
 
 $tar = "select * from products where productname = '$pname'";
 
 $res = mysql_query($tar);
 
 
   $buns = mysql_num_fields($res);
 
 echo '<table id = "diaga" class = "table table-responsive table-striped table-bordered">';
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
