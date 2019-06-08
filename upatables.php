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
            h1{
                position:  absolute;
                top:450px;
                left:300px;
            }
        </style>
        
               <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
                                       
                                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
        <form method="post" action="upatables.php">
            <label>Invoice#</label>
            <input type="number" class="form-control">
            <input type="submit" value="Load" class="btn btn-success" id="kataka">
            
        </form>
        <?php
        $ronn = mysql_connect('localhost','magnelli_staff','kovachenko123')or die('cant connect');
        mysql_select_db(magnelli_app);
        
        $recs = $_POST['kataka'];
        echo $recs;
        $sel = "select * from sales where  recno = '$recs'";
        
        $res = mysql_query($sel);
        
        $nrows = mysql_num_rows($res);
        
        echo 'Number of rows.....................' .$nrows;
        
        
        ?>
        
        <script>
            $(document).ready(function(){
                
                $("#btx").click(function(){
                    
                    $.ajax({
                        
                        type:"post",
                        url:"cheeks.php",
                        
                        
                        success:function(data)
                        {
                            $("#royo").html(data);
                        },
                        
                        error:function()
                        {
                            alert('Mammy');
                        }
                        
                    });
                    
                });
                
            });
        </script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
        <?php
        while ($row = mysql_fetch_array($res))
        {
        ?>
                        <form  method="post" action="upatables.php" >
                            
                            
            
        <table class="table table-responsive table-striped">
            
            <tr style=" color:  darkred;">
                <td><input type="text" value="<?php echo $row['customername']; ?>" name="customername[]"></td><td><input type="text" value="<?php echo $row['sdate']; ?>" name="sdate[]"></td><td><input type="text" value="<?php echo $row['phoneno']; ?>" name="phoneno[]"></td><td><input type="text" value="<?php echo $row['nextofkin']; ?>" name="nextofkin[]"></td><td><input type="text" value="<?php echo $row['nextofkinphone']; ?>" name="nextofkinphone[]"></td>
            </tr>
           
        </table>
        
        <?php }?>
        
            <input type="submit" value="Load" name="action" class=" btn btn-primary">
           
        </form>
                        <button id="btx" class="btn btn-primary">View Update</button>
                    </div>
                </div>
                
               
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="royo"></div>
                    
                </div>
                
            </div>
        </div>
        <?php 
        
        //$drivername = $_POST['drivername'];
        //$address = $_POST['address'];
        //$phone = $_POST['phoneno'];
        //$nextof = $_POST['nextofkinphone'];
        //$nxtkin = $_POST['nextofkin'];
        
        if($_POST["action"] == "Load")
        {
            echo '<h1>' .$nrows.'</h1>';
            
            for($i = 0;$i<$nrows;$i++)
            {
                $sql[$i] = "update drivers set address ='$address[$i]',phoneno = '$phone[$i]',nextofkinphone = '$nextof[$i]',nextofkin = '$nxtkin[$i]'  where drivername = '$drivername[$i]'";
                mysql_query($sql[$i]);
            }
        }
        ?>
    </body>
</html>
