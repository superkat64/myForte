<?php
$tmp = explode(DIRECTORY_SEPARATOR, __DIR__);
unset($tmp[count($tmp)-1]);
define('BASE_PATH', implode(DIRECTORY_SEPARATOR, $tmp) . DIRECTORY_SEPARATOR);
define('PUBLIC_HTML', BASE_PATH . "public_html/");
define('PRIVATE_HTML', BASE_PATH . "private_html/");

require_once PUBLIC_HTML . "Smarty/libs/Smarty.class.php";

$smarty = new Smarty();
$smarty->setTemplateDir(PUBLIC_HTML . "template");
$smarty->setCompileDir(PUBLIC_HTML . "Smarty/demo/templates_c");
$smarty->setCacheDir(PUBLIC_HTML . "Smarty/demo/cache");
$smarty->setConfigDir(PUBLIC_HTML . "Smarty/configs");

$username = 'root';
$password = '';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=myforte_DB;', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

session_start();

if (isset($_SESSION['firstName']) && isset($_SESSION['lastName'])) {
  $name = $_SESSION['firstName'] . " " . $_SESSION['lastName'];
  $smarty->assign("name", $name);
}

if (isset($_SESSION['userID'])) {
  $id = $_SESSION['userID'];
}

?>
