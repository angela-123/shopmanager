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

            h4{
                text-align:center;
                color:orangered;
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
        //$dbos = new DBController();
       // $dbxx = new DBController();
         $san = mysql_connect('localhost','staff','angela');
        mysql_select_db(whites);
        $gender = $_POST['gender'];
        $bcode = $_POST['cname'];
        $phone = $_POST['phone'];
        $nkround = $_POST['nkround'];
        $sts = $_POST['sts'];
        $waist = $_POST['waist'];
        $hip = $_POST['hip'];
        $sleeve = $_POST['sleeve'];
        $height = $_POST['height'];
        $lent = $_POST['lent'];
        $inseam = $_POST['inseam'];
        $amiable = $_POST['amiable'];
        $neck = $_POST['neck'];

        $peace = "insert into newcustomers(gender,customer,phone,rneck,shoulder,waist,hip,sleeve,height,slength,inseam,amiable,neckdept)values('$gender','$bcode','$phone','$nkround','$sts','$waist','$hip','$sleeve','$height','$lent','$inseam','$amiable','$neck')";
        //mysql_query($peace) or die('Cant insert');
  
  $gaga = "select * from newcustomers where customer!='' ";
  //$yago = "select * from products where productname = '$bcode'";
  //$zax   = "select * from dstock where productname = '$bcode'";
  
 $rada = mysql_query($gaga);
        $faq = $dbhandle->runquery($gaga);
        //$zaq = $dbos->runquery($yago);
        //$yaf = $dbxx->runquery($zax);
        
        
        ?>
                <div class=" container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>MEASUREMENTS</h4>
        <table class="table table-responsive table-striped table-hover table-bordered">
            
            <thead>
            <th class="table-header">Id</th>
            <th class="table-header">Gender</th>
            <th class="table-header">Customer</th>
            <th class="table-header">Phone#</th>
              <th class="table-header">Neck Round</th>
            <th class="table-header">ShoulderToShoulder</th>
             <th class="table-header">Waist Round</th>

             <th class="table-header">Hip Round</th>
            <th class="table-header">Sleeve Round</th>
            <th class="table-header">Height/Garment</th>
            <th class="table-header">Sleeve Length</th>
              <th class="table-header">Inseam Length</th>
            <th class="table-header">Amiable Length</th>
             <th class="table-header">Neck Dept</th>
           
            
            
            </thead>
            <tbody>
                 <?php
		  foreach($faq as $k=>$v) {
		  ?>
			  <tr class="table-row">
				<td><?php echo $k+1; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'gender','<?php echo $faq[$k]["custid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["gender"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'customer','<?php echo $faq[$k]["custid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["customer"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'phone','<?php echo $faq[$k]["custid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["phone"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'rneck','<?php echo $faq[$k]["custid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["rneck"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'shoulder','<?php echo $faq[$k]["custid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["shoulder"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'waist','<?php echo $faq[$k]["custid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["waist"]; ?></td>

				<td contenteditable="true" onBlur="saveToDatabase(this,'hip','<?php echo $faq[$k]["custid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["hip"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'sleeve','<?php echo $faq[$k]["custid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["sleeve"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'height','<?php echo $faq[$k]["custid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["height"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'slength','<?php echo $faq[$k]["custid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["slength"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'inseam','<?php echo $faq[$k]["custid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["inseam"]; ?></td>
				<td contenteditable="true" onBlur="saveToDatabase(this,'amiable','<?php echo $faq[$k]["custidid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["amiable"]; ?></td>
                 <td contenteditable="true" onBlur="saveToDatabase(this,'neckdept','<?php echo $faq[$k]["custidid"]; ?>')" onClick="showEdit(this);"><?php echo $faq[$k]["neckdept"]; ?></td>



                                
				
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
                    this.style.backgroundColor = "pink";
                    

                })


                $("td").mouseout(function(){
                    this.style.backgroundColor = "white";
                    

                })
                    
                </script>
    </body>
</html>
