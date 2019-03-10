<?php
$page =basename(__FILE__, '.php').".php";
include('soft/gtl/config.php');
$result = $db->prepare("SELECT * FROM blog where pegurl='$page'");
$result->execute();
$xrow =$result->fetch();
include('blg_pg.php');
?>