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
                                                                         
        
        
        
                
                                                                                 <script type="text/javascript" src = "libs/jquery-1.9.0.js"></script>
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/style.css">
                <script src="amcharts/amcharts.js"></script>
                <script src="amcharts/pie.js"></script>
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
               
‪<!-- Optional Bootstrap theme -->
‪
          <script src="js/bootstrap.min.js"></script>  
‪<!-- Optional Bootstrap theme -->
‪
               
‪<!-- Optional Bootstrap theme -->
‪
           
    </head>
    <body>
        <?php
         $zonn = mysql_connect('localhost','staff','angela');
         mysql_select_db(whites);
         
         $gx = "select productname,stockbal from stock where stockbal > 100";
         $res = mysql_query($gx);
         $encode = array();
         while ($rows = mysql_fetch_assoc($res))
         {
             $encode[] = $rows;
         }
         
         //echo json_encode($encode) .'<br>';
         
        ?>
          
        <script>
            var chart;
            //charData = <?php json_encode($encode); ?>
            var chartData = [
                {
                    "productname":"scf455",
                    "stockbal":345
                },
                
        {
            "productname":"achanger",
            "stockbal":657
        }
            ];
            AmCharts.ready(function(){
                
                chart = new AmCharts.AmPieChart();
                chart.addTitle("Products Stock",16);
                chart.dataProvider = charData;
                chart.titleField = "productname";
                chart.valueField = "stockbal";
                chart.sequencedAnimation = true;
                chart.startEffect = "elastic";
                chart.innerRadius = "30%";
                chart.startDuration = 2;
                chart.labelRadius = 15;
                chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
                // the following two lines makes the chart 3D
                chart.depth3D = 10;
                chart.angle = 15;

                // WRITE
                chart.write("chartdiv");
            });
        </script>
        
         <div id="chartdiv" style="width:600px; height:400px;"></div>
    </body>
</html>
