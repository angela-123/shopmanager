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
                       <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
          <script src="js/bootstrap.min.js"></script>  
          <script src="js/jquery-1.11.3.js"></script>
        ‪<script src="js/bootstrap.min.js"></script>                       
 
        <style>
            th{
                color:  #122b40;
                border: 1px #1c94c4 solid;
                
            }
            
            
            td{
                border: 1px #8c8c8c solid;
                color:  blueviolet;
            }
            
        </style>
    </head>
    <body>
        <?php
         //require 'connection.php';
         $don = mysql_connect('localhost','staff','angela');
         mysql_select_db(whites) or die('cant connect');
         $can = $_POST['customer'];
         $addres = $_POST['add'];
         $phone = $_POST['phone'];
         
         $zx = "select * from customers where customername = '$cname'";
         $tx = mysql_query($zx);
         $nrow = mysql_num_rows($tx);
         if($nrow < 0)
         {
             return;
         }
                 
 else {
                 
          $seg = "insert into customers(customername,address,phoneno)values('$can','$addres','$phone')"; 
          
          $rey = mysql_query($seg);
          
          if($rey)
          {
              echo 'Customer Data Inserted';
          }
          
 else {
     
              echo 'No Data Inserted';
 }
 
 }
 $rax = "select customername,address,phoneno from customers where customername!=''";
 
 $res = mysql_query($rax);
 
 
  $buns = mysql_num_fields($res);
 
 echo '<table id = "diaga" class = "table table-responsive table-striped" table-bordered>';
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
