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
            button{
                width: 8em;
                height: 4em;
            }
        </style>
    </head>
    <body>
        <?php
        $jon = mysql_connect('localhost','staff','angela')or die('cant connect');
         mysql_selectdb(hotels)or die('cant select');
         
         $date = $_POST['date'];
         $datee = $_POST['datee'];
        ?>
        <script>
            $(document).ready(function(){
                
                       $('.tulip').bind('click',function(){
                    $("#roomno").val($(this).attr('id'));
                 
                  
                    
                    var cc = $(this).attr('id');
                    
                   
                   
                    $.ajax({
                        
                        type:"post",
                        url:"myexp.php",
                        data:"cc="+cc,
                        
                        success:function(data)
                        {
                            $("#rito").html(data);
                        },
                        
                        error:function()
                        {
                            $("#rito").html('Not Connected');
                        }
                        
                    });
                    
    });
    
    
    
                
            });
        </script>
        <?php
        
         
         $zaq = "select costcenter,sum(amount) as amount from expenses where expdate between '$date' and '$datee' group by costcenter";
         $taq = "select SUM(amount) as Amount from expenses where expdate between '$date' and '$datee'";
         
         $iran = mysql_query($taq);
         $dow = mysql_fetch_assoc($iran);
         $total = $dow['Amount'];
         $res = mysql_query($zaq);
         
         if($res)
         {
             //echo 'Preview Expenses';
         }
         
 else {
             echo 'No Preview';
 }
 
 
 
 $buns = mysql_num_fields($res);
                echo '<table class = "table table-responsive table-hover table-">';
                
               
                
                
                
                
                
           
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
	
	{            echo '<td>';
		echo '<button  class = "tulip" id='.$row2[$i].  '>' .$row2[$i] . '</button>';
                echo '</td>';
	}   
        
	echo '</tr>';
        
    }
      
    
    
    echo '<tr>';
    echo '<td>';
    echo 'Total Expenses';
    echo '</td>';
    echo '<td>';
    echo number_format($total,2);
    echo '</td>';
    
    echo '</tr>';
	
    
    
    echo '</table>';
 
         
        ?>
        <div id="gito" class="col-md-4"></div>
    </body>
</html>
