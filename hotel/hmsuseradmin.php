
<?php 

   
 $zon = mysql_connect('localhost','staff','angela');
    mysql_selectdb(ajpos);
    $user = $_SESSION['username'];
$wela = "select username,password,page from users where username = '$user'";
	$tas = mysql_query($wela);
	$message = "Access Denied";
	while ($vid = mysql_fetch_assoc($tas))
	{
		$perm = $vid['page'];
	}
	
	//if($perm!='pharmacy') 
	if($perm!='admin')
	{   print '<div id = "jim">';
		print '<h1>' .$message.'</h1>';
		print '</div>';
		
		exit();
	}

?>

<?php
$user = $_SESSION['username'];
$usname = addslashes($_POST['usname']);
$pswd = addslashes($_POST['pswd']);
$pswd = sha1($pswd);
$dte = addslashes($_POST['dte']);
$sta = addslashes($_POST['sta']);
$loc =$_POST['loc'];

$konn = mysql_connect('localhost','staff','angela')or die('Cannot connect');
    mysql_selectdb('ajpos')or die('cannot connect to database');
    
   
    
    $sql = "insert into users(username,password,page,location)values('$usname','$pswd','$sta','$loc')";
   
    mysql_query($sql,$konn)or die('bros, the query no execute');
    
    header('Location:hmsuseradmin.html' );
    
?>