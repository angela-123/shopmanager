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
				url: "saveedit.php",
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
        $dbos = new DBController();
        $dbxx = new DBController();
         $san = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        $bcode = $_POST['bcode'];
  
  $gaga = "select * from stock where productname = '$bcode' ";
  $yago = "select * from products where productname = '$bcode'";
  $zax   = "select * from dstock where productname = '$bcode'";
  
 $rada = mysql_query($gaga);
        $faq = $dbhandle->runquery($gaga);
        $zaq = $dbos->runquery($yago);
        $yaf = $dbxx->runquery($zax);
        
        
        ?>
                <div class=" container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <h4> STOCK TABLE</h4>
        <table class="table table-responsive table-striped table-hover table-bordered">
            
            <thead>
            <th class="table-header">ItId</th>
            <th class="table-header">Productname</th>
            <th class="table-header">Model#</th>
            <th class="table-header">Decription</th>
              <th class="table-header">Rate</th>
            <th class="table-header">Unitcost</th>
             <th class="table-header">Stock</th>
           
            
            
            </thead>
            <tbody>
                 <?php
		  foreach($faq as $k=>$v) {
		  ?>
			  <tr class="table-row">
				<td><?php echo $k+1; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'productname','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["productname"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'model','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["model"]; ?></td>
                                <td contenteditable="true" onBlur="saveToDatabase(this,'description','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["description"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'rate','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["rate"]; ?></td>
                                <td contenteditable="true" onBlur="saveToDatabase(this,'unitcost','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["unitcost"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'stockbal','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["stockbal"]; ?></td>
				
                                
				
			  </tr>
		<?php
		}
		?>
                        
                          
                          
                          
            </tbody>
            
        </table>
                </div>
                        
                 
                        
                        
                        
                        
                        
                                         <div class="col-md-8">
                                             <h3>PRODUCTS TABLE</h3>
        <table class="table table-responsive table-striped table-hover table-bordered">
            
            <thead>
            <th class="table-header">ItId</th>
            <th class="table-header">Productname</th>
            <th class="table-header">Model#</th>
            <th class="table-header">Description</th>
            <th class="table-header">Rate</th>
              <th class="table-header">Unitcost</th>
            
           
            
            
            </thead>
            <tbody>
                 <?php
		  foreach($zaq as $k=>$v) {
		  ?>
			  <tr class="table-row">
				<td><?php echo $k+1; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'productname','<?php echo $zaq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $zaq[$k]["productname"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'model','<?php echo $zaq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $zaq[$k]["model"]; ?></td>
                                <td contenteditable="true" onBlur="saveToDatabase(this,'description','<?php echo $zaq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $zaq[$k]["description"]; ?></td>
				
                                <td contenteditable="true" onBlur="saveToDatabase(this,'rate','<?php echo $zaq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $zaq[$k]["rate"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'unitcost','<?php echo $zaq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $zaq[$k]["unitcost"]; ?></td>
				
                                
				
			  </tr>
		<?php
		}
		?>
                         
                          
                          
            </tbody>
            
        </table>
                </div>
                        
                        
                                  
                                         <div class="col-md-8">
                                             <h4>DYNAMIC STOCK TABLE</h4>
        <table class="table table-responsive table-striped table-hover table-bordered">
            
            <thead>
            <th class="table-header">ItId</th>
            <th class="table-header">Productname</th>
            <th class="table-header">Model#</th>
            <th class="table-header">Description</th>
           
            <th class="table-header">Opening Stock</th>
            <th class="table-header">Stockbalance</th>
            
           
            
            
            </thead>
            <tbody>
                 <?php
		  foreach($yaf as $k=>$v) {
		  ?>
			  <tr class="table-row">
				<td><?php echo $k+1; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'productname','<?php echo $yaf[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $yaf[$k]["productname"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'model','<?php echo $yaf[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $yaf[$k]["model"]; ?></td>
                                <td contenteditable="true" onBlur="saveToDatabase(this,'description','<?php echo $yaf[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $yaf[$k]["description"]; ?></td>
                                
				
				 <td contenteditable="true" onBlur="saveToDatabase(this,'opstock','<?php echo $yaf[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $yaf[$k]["opstock"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'stock','<?php echo $yaf[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $yaf[$k]["stock"]; ?></td>
                                
				
			  </tr>
		<?php
		}
		?>
                         
                          
                          
            </tbody>
            
        </table>
                </div>
                        
                        
                             
                        
                        
                        
                        
                        
                </div>
                </div>
    </body>
</html>
