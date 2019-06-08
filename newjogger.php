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
                color: crimson;
                
            }
        </style>
                                           <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
               
‪<!-- Optional Bootstrap theme -->
‪
          <script src="js/bootstrap.min.js"></script>                                                
    </head>
    <body>
         <?php 
        
        session_start();
        ?>
        
        <?php
$don = mysql_connect('localhost','staff','angela');
mysql_select_db(whites);

$uname = $_POST['username'];
$pword = $_POST['password'];
$pwordd = sha1($pword);
$shift = $_POST['shift'];

session_start();
$_SESSION['username'] = $uname;
$xeq = "select * from users where username = '$uname' And password = '$pwordd'";
$rods = mysql_query($xeq);

$myrod = mysql_fetch_assoc($rods);
$mybase = $myrod['location'];
$myshift = $shift;
$_SESSION['loc'] = $mybase;
$_SESSION['shift'] = $shift;

$rej = mysql_query($xeq);
$numrows = mysql_num_rows($rej);
$back = ' <a href = "jogin.php"';

if($numrows >=1)
{
    echo "Access Granted";
    header('Location:jogger.php');
    //exit();
}

 else {
    echo '<h1>'. 'Access denied' .'</h1>';
    
    
    //exit();
}

        ?>
    </body>
</html>
