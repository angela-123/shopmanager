<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

    #ntos,#kini,#btx{

        display:none;
    }
    </style>
    <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
               
‪<!-- Optional Bootstrap theme -->
‪
          <script src="js/bootstrap.min.js"></script>  
    
</head>

<script>
$(document).ready(function(){

    $("#bts").click(function(){
        $("#ntos").fadeIn(1000);
        $("#kini").fadeIn(1000);
        $("#female").fadeOut(1500);
        $("#cname").fadeIn(1000);
        $("#miki").fadeOut(1000);
        $("#btx").fadeIn(1000);
        $("#bts").fadeOut(1000);
        $("#btn").fadeOut(1000);
        $("#gender").fadeOut(1000);
        $("#cname").fadeOut(1000);
        $("#gen").fadeOut(1000);

    });

    $("#btn").click(function(){
        var gender = $("#gender").val();
        var cname = $("#cname").val();
        var phone = $("#phone").val();
        var nkround = $("#nkround").val();
        var sts = $("#sts").val();
        var waist = $("#waist").val();
        var hip = $("#hip").val();
        var sleeve = $("#sleeve").val();
        var height = $("#height").val();
        var lent = $("#lent").val();
        var inseam = $("#inseam").val();
        var amiable = $("#amiable").val();
        var neck = $("#neck").val();


        $.ajax({

            type:"post",
            url:"myeditts.php",
            data:"gender="+gender+"&cname="+cname+"&phone="+phone+"&nkround="+nkround+"&sts="+sts+"&waist="+waist+"&hip="+hip+"&sleeve="+sleeve+"&height="+height+"&lent="+lent+"&amiable="+amiable+"&inseam="+inseam+"&neck="+neck,

            success:function(data)
            {
                $("#yoyo").html(data);
            },

            error:function()
            {
                $("#yoyo").html('Not Connected');
            }

        });

    });


    $("#btx").click(function(){

        var ntos = $("#ntos").val();

        $.ajax({
            type:"post",
            url:"prodata.php",
            data:"ntos="+ntos,

            success:function(data)
            {
                $("#yoyo").html(data);
            },


            error:function()
            {
                $("#yoyo").html('Not Connected');
            }

        });

    });

});
    
</script>
<body>
<div class = "container-fluid">
<div class = "row">
<div id = "kolo">
<div class = "col-md-2" id = "femalee">
<label id = "gen">Gender</label>
<select id = "gender" class = "form-control">

<option value = "male">Male</option>
<option value = "female">Female</option>
</select>

<label id = "miki">Customer Name</label>
<input type = "text" id = "cname" class = "px form-control">
<label id = "kini">Name To Search</label>
<input type = "text" id = "ntos" class = "form-control">
<div id = "female">
<label>Phone#</label>
<input type = "text" id = "phone" class = "px form-control">
<label>Neck Round</label>
<input type = "text" id = "nkround" class = "form-control">
<label>Shoulder To Shoulder</label>
<input type = "text" id = "sts" class = "form-control">
<label>Waist Round/Waist Length</label>
<input type = "text" id = "waist" class = "form-control">
<label>Hip Round/Lenght</label>
<input type = "text" id = "hip" class = "form-control">
<label>Sleeve Round</label>
<input type = "text" id = "sleeve" class = "form-control">
<label>Height Of Garment</label>
<input type = "text" id = "height" class = "form-control">

<label>Sleeve Length</label>
<input type = "text" id = "lent" class = "form-control">
<label>Inseam Length</label>
<input type = "text" id = "inseam" class = "form-control" >
<label>Amiable Lenght</label>
<input type = "text" id = "amiable" class = "form-control">
<label>Neck Dept</label>
<input type = "text" id = "neck" class = "form-control">
</div>

<input type = "button" id = "btn" value = "Update" class = "btn btn-primary">
<input type = "button" id = "bts" value = "Search" class = "btn btn-primary">
<input type = "button" id = "btx" value = "Search Customer" class = "btn btn-primary">

</div>

<div id = "yoyo" class = "col-md-4"></div>
</div>
</div>
</div>
   
                                                                       		                           <script type="text/javascript">
$("input#ntos").autocomplete ({
source : function (request, callback)
{ 
var data = { term : request.term };
$.ajax ({
url : "custs.php",
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