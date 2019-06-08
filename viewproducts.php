<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRODUCTS LIST</title>
                                        
                                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
        <?php
        $zonn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app) or die('cant connect');
        
        $dex = "select productname,rate,unitcost,discount from products";
        
        $res = mysql_query($dex);
        
        $buns = mysql_num_fields($res);
        
        
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
        <table class="table table-responsive table-striped tab-pane">
        <?php 
        
        
        for($i = 0;$i<$buns;$i++)
{
	//echo '<th>' .mysql_field_name($res, $i).'</th>'

        ?>
            
            <th>
                <?php echo mysql_field_name($res, $i); ?>
            </th>
            
<?php 

} ?>
            <tr>
            <?php 
while ($row = mysql_fetch_assoc($res))
{
            ?>
            
                <?php
                for($i = 0;$i<$buns;$i++)
	
	{
                    
                ?>
                
                <td>
                    <input type="text" value="<?php echo $row[i]; ?>">
                </td>
                
                
                
                
        <?php }?>
            
            
            <?php
}
            ?>
            </tr>
        </table>
                </div>
            </div>
        </div>
    </body>
</html>
