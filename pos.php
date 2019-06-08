<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SALES POINT</title>
                                               
                                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         
‪<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
        <?php
        $zonn = mysql_connect('localhost','magnelli_staff','kovachenko123');
        mysql_select_db(magenelli_app);
        $adele = "insert into receipts(rdate)values(curdate())";
        mysql_query($adele);
        
        $jan = "select MAX(recno) as recno from receipts";
        $ran = mysql_query($jan);
        
        $fam = mysql_fetch_assoc($ran);
        
        $rec = $fam['recno'];
        echo $rec;
        
        ?>
        <div class="container-fluid">
        <form role="form" class="form-group">
            <div class="col-sm-4 col-md-12 col-lg-10">
                
                <table class="table-responsive col-sm-4 col-md-6 col-lg-6 ">
                    <thead>
                    <th>
                    <tr>
                        <td>Date</td>
                        <td>Customername</td>
                        <td>Productname</td>
                        <td>Qty</td>
                        <td>Rate</td>
                        <td>Paid</td>
                    </tr>
                    </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="date" id="date" class="form-control" ></td>
                            <td><input type="text" id="cname" class="form-control" ></td>
                            <td><input type="text" id="pname" class="form-control"></td>
                            <td><input type="number" id="qty" class="form-control"></td>
                            <td><input type="number" id="rate" ></td>
                            <td><input type="number" id="paid"></td>
                            
                        </tr>
                    </tbody>
                    
                </table>
                
                
                <input type="button" id="btn" value="update" class="btn btn-primary">
            </div>
            <div id="ayo" class="col-sm-3 col-md-4 col-lg-4 col-lg-offset-4"></div>
            
        </form>
        </div>
        <?php
        // put your code here
        ?>
        
                                                            		                           <script type="text/javascript">
$("input#dept").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "drives.php",
data : data,
complete : function (xhr, result)
{
if (result !== "success") return;
var response = xhr.responseText;
var books = [];
$(response).filter ("li").each (function ()
{
books.push ($(this).text ());
});
callback (books);
}
});
}
});
</script>
    </body>
</html>
