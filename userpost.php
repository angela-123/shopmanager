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
            h4{
                
                color: darkblue;
            }
        </style>
    </head>
    <body>
        <?php
    $nas = mysql_connect('localhost','staff','angela');
         mysql_select_db(whites);
    $usname = addslashes($_POST['usname']);
    $pswd = addslashes($_POST['pswd']);
    $pswd = sha1($pswd);
    $status = addslashes($_POST['status']);
    $sta = addslashes($_POST['sta']);
    $loc = $_POST['loc'];
    
    $david = "insert into users(username,password,status)values('$usname','$pswd','$status')";
    if(mysql_query($david))
    {
        echo '<h4>User Created</h4>';
        echo '<h4>View Details</h4>';
    }
 else {
        echo '<h3>User Not Created</h3>';
}
    

$rta = "select username,password,status as status from users where username = '$usname'";

$res = mysql_query($rta);


                         $buns = mysql_num_fields($res);
 
 echo '<table id = "diaga" class = "table table-responsive table-striped table-bordered table-hover">';
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
		echo '<td contententeditable = "true">';
		echo $row[$i];
	}   echo '</td>';
	echo '</tr>';
}



echo '</table>';
    
        ?>
    </body>
</html>
