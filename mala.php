<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 ob_start();
        $con = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magnelli_app)or die('Cant connect');
        //session_start();
        $usname = $_POST['usname'];
        $pswd = $_POST['pswd'];
        $pass = sha1($pswd);
        
        $sel = "select * from users where username = '$usname' and password = '$pass'";
        
        
        
        $res = mysql_query($sel);
        
        
        $dash = mysql_num_rows($res);
        
        if($dash >= 1)
        {
            //echo 'Successful';
            header('Location:jorge.php');
            exit();
        }
 else {
            echo '<a href = "index.php">'. 'Wrong Password Or Username,Reload Page To Re-enter Login' .'</a>';
            //header('Location:login.php');
            
 }
        
         
        ?>
