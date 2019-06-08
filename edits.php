<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
                                        
                                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
        
        <form method="post" action="edits.php">
            <label>Invoice#</label>
            <input type="number" name="inv">
            <input type="submit" name="Load"  value="Update">
            
        </form>
        <?php 
        
        
        
        
        ?>
        <div class="container-fluid">
            <div class="row">
                
            
        <?php
       $ronn = mysql_connect('localhost','magnelli_staff','kovachenko123')or die('cant connect');
        mysql_select_db(magnelli_app);
        $invoice = $_POST['inv'];
        
        $red = "select * from sales where recno = '$invoice'";
        
        $res = mysql_query($red);
        
                          $buns = mysql_num_fields($res);
                echo '<table id = diaga title = "PIZZA LIST">';
                
                
                echo '<tr>';
                
for($i = 0;$i<$buns;$i++)
{
	echo '<th>' .mysql_field_name($res, $i).'</th>';
}
echo '</tr>';

while ($row2 = mysql_fetch_row($res))
{
	echo '<tr>';
	
	for($i = 0;$i<$buns;$i++)
	
	{
		echo '<td>';
		
		{
			echo '<nobr>'. $row2[$i] . '</nobr>';
		}
	}   echo '</td>';
	echo '</tr>';
        
        
        
    }
    
    echo '<tr>';
    echo '<td>';
    echo 'Total Revenue';
    echo '</td>';
    
    echo '<td>';
    echo number_format($trev,2);
    echo '</td>';
    
    echo '</tr>';
     
    echo '</table>';
        
 
                
        
        ?>
            </div>
        </div>
    </body>
</html>
