<?php ob_start(); session_start(); ?>

        <?php
       $conn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app)or die('Cant connect');

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
$_SESSION['username'] = $mystatus;
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