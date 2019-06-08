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

            td{
                font-weight:bolder;
                color:black;
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
				url: "prodedits.php",
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
        //$dbos = new DBController();
       // $dbxx = new DBController();
         $san = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        

       // $peace = "insert into newcustomers(gender,customer,phone,rneck,shoulder,waist,hip,sleeve,height,slength,inseam,amiable,neckdept)values('$gender','$bcode','$phone','$nkround','$sts','$waist','$hip','$sleeve','$height','$lent','$inseam','$amiable','$neck')";
        //mysql_query($peace) or die('Cant insert');
  
  $gaga = "select * from  products where productname!='' ";
  //$yago = "select * from products where productname = '$bcode'";
  //$zax   = "select * from dstock where productname = '$bcode'";
  
 $rada = mysql_query($gaga);
        $faq = $dbhandle->runquery($gaga) or die('cant query');
        //$zaq = $dbos->runquery($yago);
        //$yaf = $dbxx->runquery($zax);
        
        
        ?>
                <div class=" container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class = "col-md-5 col-md-offset-6">PRODUCTS AND SERVICES</h4>
        <table class="table table-responsive table-striped table-hover table-bordered col-md-5 col-md-offset-4">
            
            <thead>
            <th class="table-header">Id</th>
            <th class="table-header">Productname</th>
            <th class="table-header">Code</th>
            <th class="table-header">Rate</th>
            <th class="table-header">Unitcost</th>
            <th class="table-header">Dept</th>

            
           
            
            
            </thead>
            <tbody>
                 <?php
		  foreach($faq as $k=>$v) {
		  ?>
			  <tr class="table-row">
				<td><?php echo $k+1; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'model','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["model"]; ?></td>
				<td contenteditable="false" onBlur="saveToDatabase(this,'productname','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["productname"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'rate','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["rate"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'unitcost','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["unitcost"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'dept','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["dept"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'waist','<?php echo $faq[$k]["itid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["waist"]; ?></td>

				

                                
				
			  </tr>
		<?php
		}
		?>
                        
                          
                          
                          
            </tbody>
            
        </table>
                </div>
                        
                 
                        
                        
                        
                        
                        
       
                </div>
                        
                        
                             
                        
                        
                        
                        
                        
                </div>
                </div>

                <script>
                $("td").mouseover(function(){
                   this.style.color = 'darkred';
                   this.style.fontSize = '1.3em';

                });

                $("td").mouseout(function(){
                    this.style.color = 'black';
                    this.style.fontSize = '1em';
                })
                    
                </script>
    </body>
</html>
