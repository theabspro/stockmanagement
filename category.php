<?php
include "db.php";
error_reporting(0);

$q = strtolower($_GET["q"]);
if (!$q) return;
$db->query("SELECT * FROM category_details");
  while ($line = $db->fetchNextObject()) {
  
  	if (strpos(strtolower($line->category_name), $q) !== false) {
		echo "$line->category_name\n";
	
 }
 }

?>