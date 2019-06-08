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
                position: absolute;
                top: 300px;
                left:300px;
            }
        </style>
                                       
                                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
        
        <div class="container-fluid">
            <div class="row col-sm-5 col-md-6 col-lg-6">
        <?php
        $don = mysql_connect('localhost','magnelli_staff','kovachenko123');
       mysql_select_db(magnelli_app);

session_start();
$uname = $_POST['username'];
$pword = $_POST['password'];
$pwordd = sha1($pword);
//$shift = $_POST['shift'];

$_SESSION['username'] = $uname;
$xeq = "select * from users where username = '$uname' And password = '$pwordd'";
$rods = mysql_query($xeq);

$myrod = mysql_fetch_assoc($rods);
$mystatus = $myrod['username'];
$myloc = $myrod['location'];
$_SESSION['status'] = $mystatus;
$_SESSION['loc'] = $myloc;

$rej = mysql_query($xeq);
$numrows = mysql_num_rows($rej);
$back = ' <a href = "jogin.php"';

if($numrows >=1)
{
    echo "Access Granted";
    header('Location:jogger.php');
    exit();
}

 else {
    echo '<h1>'. 'Permission denied' .'</h1>';
    
    
    //exit();
}

        ?>
            </div>
        </div>
    </body>
</html>
