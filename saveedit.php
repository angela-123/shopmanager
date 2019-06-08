<?php
require_once("dbcontroller.php");
$db_handle = new DBController();

$result = $db_handle->executeUpdate("UPDATE newcustomers set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  custid=".$_POST["id"]);
//$resultx = $db_handle->executeUpdate("UPDATE stock set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  itid=".$_POST["id"]);
//$results = $db_handle->executeUpdate("UPDATE dstock set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  itid=".$_POST["id"]);

?>