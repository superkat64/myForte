<?php

include "../private_html/config.php";

if (!isset ($_POST['password'])) {
    $smarty->display('editProfile.tpl');
}

//var declarations
$error = false;

// check if fields are filled
if (!empty($_POST['password'])) {
  $hashPass = hash('sha512', $p);
} else {
  $error = true;

} if (!empty($_POST['gender'])) {
} else {
  $error = true;
}

if($error) {
  
}

// Updates user information in Database
if(!$error) {
  $sql = "UPDATE User SET Password = :p, Gender = :g WHERE Email = :e";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":p", $hashPass);
  $stmt->bindParam(":g", $_POST['gender']);
  $stmt->bindParam(":e", $_SESSION['email']);
  $stmt->execute();

  header('Location: profile.php');

} else {

}
?>
