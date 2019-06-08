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
            th{
                background: orange;
            }
        </style>
                               <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
    </head>
    <body>
        
        <script>
		function showEdit(editableObj) {
			$(editableObj).css("background","#FFF");
                        
		} 
		
		function saveToDatabase(editableObj,column,id) {
			$(editableObj).css("background","#FFF url(loaderIcon.gif) no-repeat right");
                        
			$.ajax({
				url: "saveeditcc.php",
				type: "POST",
				data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
				success: function(){
					$(editableObj).css("background","#FDFDFD");
				}        
		   });
		}
		</script>
        
        
        
        
        <?php
        require_once('dbcontroller.php');
        $dbhandle = new DBController();
         $san = mysql_connect('localhost','staff','angela');
        mysql_select_db(hotels);
        $cc = $_POST['cc'];
        
        $rq = "insert into cc(costcenter)values('$cc')";
        
        $zag = mysql_query($rq);
        
        $tas = "select * from cc where costcenter!=''";
 //$rada = mysql_query($rq);
 //$rada = mysql_query($gaga);
        $faq = $dbhandle->runquery($tas);
        
        
        ?>
        
        <table class="table table-responsive table-striped table-hover">
            
            <thead>
            <th class="table-header">cid</th>
            <th class="table-header">Cost Center</th>
            
           
            
            
            </thead>
            <tbody>
                 <?php
		  foreach($faq as $k=>$v) {
		  ?>
			  <tr class="table-row">
				<td><?php echo $k+1; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'costcenter','<?php echo $faq[$k]["cid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["costcenter"]; ?></td>
				
                                
				
			  </tr>
		<?php
		}
		?>
                          
                          
                          
                          
            </tbody>
            
        </table>
    </body>
</html>
