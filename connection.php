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
    </head>
    <body>
        <?php
        // a simple php class to connect to nwinco_app mysql database
        class Connection
        {
            public $localhost = 'localhost';
            public $username = 'magnelli_staff';
            public $password = 'kovachenko123';
            public $dbname = 'magnelli_app';


            public function connect()
            {
              $conn =  mysql_connect($this->localhost,  $this->username,  $this->password);
              
              return $conn;
            }
            
            
            public function selectdb()
            {
                $db = mysql_select_db($this->dbname);
                
                return $db;
            }
        }
        ?>
    </body>
</html>
