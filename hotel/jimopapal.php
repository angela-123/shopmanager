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
            td{
                
                font-size: 1.1em;
                font-weight: bold;
                font-style: italic;
            }
            
            h4{
                font-size: 1.2em;
                font-weight: bold;
                font-style:  italic;
            }
        </style>
    </head>
    <body>
        <?php
         $jon = mysql_connect('localhost','staff','angela')or die('cant connect');
         mysql_selectdb(ajpos)or die('cant select');
         
         $date = $_POST['date'];
         $cash = $_SESSION['username'];
         $vu = "select room,rate, paid from bills where cashier = '$cash' and date = '$date'";
         $edr = "select sum(paid) as cash from bills where cashier = '$cash' and date = '$date'";
         
         $ts = "select room, datediff(date2,date1) * rate as extended from bills where cashier = '$cash' and date = '$date'";
         
         $pok = mysql_query($edr);
         
         $tx = mysql_fetch_assoc($pok);
         $sales = $tx['cash'];
         
         $polka = mysql_query($ts);
         $px = mysql_fetch_assoc($polka);
         $extended = $px['extende'];
         
         //echo $extended;
         
         
         
         
         
        
         $res = mysql_query($vu);
         //$tsales = mysql_fetch_assoc($rold); 
          
         $totals = $rold['extended'];
         //echo $totals;
         
         //$mk = mysql_query($sfed);
         
         //$res = mysql_query($fed);
         $tra= 0.0;
         
                     
         //echo $tra;  
         
         if($res)
         {
             //echo 'Sales Records Retrieved';
             //echo $date;
             //echo $loc;
         }
         
 else {
             echo 'Sales Records Not Retrieved';
      }
      
      
                      
                  $buns = mysql_num_fields($res);
                echo '<table class = "table table-responsive table-hover table-bordered">';
                echo '<tr>';
                echo '<td id = jili>';
                echo '<nobr>'. 'Total Sales For' .'</nobr>';
                echo '</td>' ;
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo $date;
                echo '</td>';
                
                echo '</tr>';
                
                echo '<tr>';
                echo '<td>';
                echo 'Cashier';
                echo '</td>';
                echo '<td>';
                echo $cash;
                echo '</td>';
                
                
                echo '</tr>';
                
                
                
                
                
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
		
		{     if(is_numeric($row2[$i]))
                {
			echo '<nobr>'. number_format($row2[$i],2) . '</nobr>';
		}
                
 else {
     echo '<nobr>'. $row2[$i] . '</nobr>';
 }
                }
	}   echo '</td>';
	echo '</tr>';
        
       
        
    }
    
     echo '<tr>';
        echo '<td>';
        echo 'Total Cash sales For The Day';
        echo '</td>';
        
        echo '<td>';
        echo number_format($sales,2);
        echo '</td>';
        
        echo '</tr>';
    
        
        
        
        echo '<tr>';
        echo '<td>';
        echo 'Total sales For The Day';
        echo '</td>';
        
        echo '<td>';
        echo number_format($extended,2);
        echo '</td>';
        
        echo '</tr>';
     
    echo '</table>';
    
    
    
   
    //$dasg = mysql_query($jaxfed);
    
    //$rack = mysql_query($jxfed);
    
    
?>
    </body>
</html>
