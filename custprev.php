<?php session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <title>CUSTOMERS</title>
        <style>
            td{
                
                font-size:1em;
                font-weight: bold;
                color:darkblue;
                font-style:italic;
            }
        </style>
                                         
      <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
          <script src="js/bootstrap.min.js"></script>  
          <script src="js/jquery-1.11.3.js"></script>
        ‪<script src="js/bootstrap.min.js"></script>
    </head>
    <body>


        
                 <?php      
     $don = mysql_connect('localhost','staff','angela');
         mysql_select_db(whites) or die('cant connect');
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
        












        <?php
        
         $don = mysql_connect('localhost','staff','angela');
         mysql_select_db(whites) or die('cant connect');
      
 $rax = "select customer,phone from newcustomers where customer!=''";
 
 $res = mysql_query($rax);
 
 
  $buns = mysql_num_fields($res);
  echo '<div class = "container-fluid">';
  echo '<div class = "row">';
  echo '<div class = "col-md-6 col-md-offset-3">';
 
 echo '<table id = "diaga" class = "table table-responsive table-striped table-hover table-bordered">';
 echo '<tr>';
 echo '<td>';
 echo '<p>CUSTOMERS LIST</p>';
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
		echo $row[$i];
	}   echo '</td>';
	echo '</tr>';
}
echo '</table>';
 
echo '</div>';
echo '</div>';
echo '</div>';
 
        ?>
    </body>
</html>
