

 <?php 
        
        session_start();
        ?>



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    echo '<h1 style{"position:absolute;top:300px;left:350px;color:darkred;color:red;"}>'. 'Permission denied' .'</h1>';
    
    
    //exit();
}

?>