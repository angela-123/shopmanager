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
                                        
                                                                   <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
               
‪<!-- Optional Bootstrap theme -->
‪
          <script src="js/bootstrap.min.js"></script>  
        <style>
            #diag{
                
                background:  lightseagreen;
                
            }
        </style>
    </head>
    <body>
        <?php
         $ram = mysql_connect('localhost','staff','angela');
         mysql_select_db(whites);
         
         $can = $_POST['cname'];
         $addres = $_POST['address'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
                 
          $seg = "insert into suppliers(suppliername,address,phoneno,email)values('$can','$addres','$phone','$email')"; 
          
          $res = mysql_query($seg);
          
          if($res)
          {
              echo 'Suppler Data Inserted';
          }
          
 else {
     
              echo 'No Data Inserted';
 }
 
 
 $rxd = "select * from suppliers";
 
 $res = mysql_query($rxd);
 
  $buns = mysql_num_fields($res);
  //echo '<div class = "col-sm-4 col-md-6 col-lg-8">';
 echo '<table class = "table table-responsive  table-striped table-hovered">';
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

//echo '</div>';
        ?>
    </body>
</html>
