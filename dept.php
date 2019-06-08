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
                                        
                                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <style>
            th{
                width: 200px;
                color:  #1b6d85;
            }
            p{
                
                text-align:  center;
                color:  darkblue;
                font-weight:  bolder;
            }
            td{
                border: 1px #d4d4d4 solid;
                color:  #c77405;
                font-weight:  bold;
            }
            
        </style>
    </head>
    <body>
        <?php
        $zonn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app);
        
        $dept = $_POST['dept'];
        
        $saw = "insert into depts(deptname)values('$dept')";
        
        $red = mysql_query($saw) or die('cant query');
        
        if($red)
        {
            //echo 'Data Inserted' .'<br>';
            echo  '<p>All Departments </p>';
            
            
        }
        
 else {
            echo 'No Show';
 }
 
 
 $fex = "select deptname as department from depts where deptname!=''";
 
  $res = mysql_query($fex);
  
  
  $buns = mysql_num_fields($res);
 
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
		echo $row[$i];
	}   echo '</td>';
	echo '</tr>';
}
echo '</table>';
 
        ?>
    </body>
</html>
