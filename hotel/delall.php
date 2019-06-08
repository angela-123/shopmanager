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
                
                
                font-size: 1.2em;
                font-style: normal;
                color: black;
            }
            
            td{
                
                border: 1px #888 solid;
                font-size: 1.1em;
                font-weight:  bolder;
            }
            
            #lag{
                font-size: 1.2em;
            }
            
            #laga{
                
                font-style: italic;
            }
            
            .muje{
                
                font-size: 1.1em;
            }
            
            li{
                
                text-align:center;
                color:  #000066;
                font-size: 1em;
                list-style:  none;  
            }
            
            thead{
                
                text-align: left;
            }
            
            nobr{
                
                text-align:  center;
            }
            
            h2x{
                
                position: absolute;
                bottom: 20px;
                left:  600px;
            }
            
            #diaga{
                alignment-baseline:  middle;
            }
        </style>
    </head>
    <body>
        <?php
        $nas = mysql_connect('localhost','staff','angela');
         mysql_select_db(ajpos);
         $recno = $_POST['recno'];
         $item = $_POST['item'];
         $recn = 1 +$recno;
         
         $raq = "delete from payments where refno = '$recn'";
         
         
         
         if(mysql_query($raq))
         {
             //echo '<h4>Sale Deleted</h4>';
             //echo $recno;
         }
         
         
         $jol = "delete from lookup where recno = '$recn'";
         $tara = "delete from sales where refno = '$recn'";
         
         mysql_query($jol) or die('cant lookup');
         mysql_query($tara) or die('cant sales');
         
         
         $trx = "select itemname,sum(qty) as qty,rate,sum(qty * rate) as extended from payments where refno = '$recn' group by itemname";
         $sax = "select sum(qty * rate) as total from payments where refno = '$recn'";
         
         $st = mysql_query($sax);
         
         $dol = mysql_fetch_assoc($st);
         
         $total = $dol['total'];
         
         $res = mysql_query($trx) or die('cant select');
         
         
         
                                                    $buns = mysql_num_fields($res);
                echo '<table class = "table table-responsive table-bordered table-striped">';
                echo '<ul align = "left">';
                echo '<li class = "lag">STEAM LIFESTYLE</li>';
                 echo '<li class = "lag">16,Ademola Adetokunbo Crescent</li>';
                echo '<li class ="lag">Wuse 2,Abuja</li>';
                
                   
                //echo '<li class ="lag">Royal Indomie Road</li>';
                //echo '<li class ="lag">Gaduwa,Abuja</li>';
                //echo '<nobsp>';
                //echo '<li class ="lag">NassarawaState</li>';
                //echo '<li class ="lag">08105576644</li>';
                //echo '<li>Area 3,Garki,Abuja</li>';
                //echo '<li>ABUJA</li>';
                //echo '<li>' .'08099388887,07032305841'.'</li>';
                echo '<li class = "tidi"> Date............' .$dat.'Receipt#..............'.$rec ;
                echo '<li class = "tidi">Cashier..' .$cashier.'...........Waiter.......'.$waiter ;
                //echo '<li>Waiter..' .$waiter.'</li>' ;
                //echo '<li class = "tidi">Receipt#..' .$rec.'</li>' ;
                echo '<li class = "tidi">' .$mytime.'</li>' ;
                echo '<li class = "lagz">08028076606,08083226897</li>' ;
                echo '</ul>';
                echo '</ul>';
              
                echo '</ul>';
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
    echo 'Total';
    echo '</td>';
    echo '<td>';
     echo '<h3>'. number_format($total,2).'</h3>';
    echo '</td>';
    echo '</tr>';
    
    
    echo '</table>';
        
    
 
         echo '<li class = "muje">Inclusive Of 5% Vat</li>';
    echo '<li class = "muje">Thanks for your patronage</li>';
    echo '<li class = "muje">Please call again</li>';
    
    
        ?>
    </body>
</html>
