<?php
include "../private_html/config.php";
session_abort();
$smarty->display("login.tpl");
?>
