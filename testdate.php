<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
    <?php 
    $zonn = mysql_connect('localhost','staff','angela');
    mysql_select_db(whites);
    $pen = "select curdate() as dtx ";
    $sx = mysql_query($pen);
    $cat = mysql_fetch_assoc($sx);
    $date = $cat['dtx'];
    echo $date;
    ?>
    </body>
</html>