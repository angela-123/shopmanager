<?php
$term = $_REQUEST["term"];
$term = utf8_decode ($term);
$bd = mysql_connect ('localhost', 'magnelli_staff', 'kovachenko123');
$ret = mysql_select_db ("magnelli_app", $bd);
$query = sprintf (
"SELECT * FROM products WHERE productname  LIKE '%%%s%%' And productname != ''",
mysql_real_escape_string($term));
$result = mysql_query($query);
if ($result)
{
// Use the result (sent to the browser)
while ($row = mysql_fetch_assoc($result))
{
echo ("<li>" . utf8_encode ($row["productname"]) . "</li>");
//echo ("<li>"  . utf8_encode($row["genericname"]). "</li>");
} 
mysql_free_result($result);
}
mysql_close ($bd);
?>