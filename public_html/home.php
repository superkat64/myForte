<?php

include "../private_html/config.php";

// var declarations
$error = false;

if (!isset ($_POST['email'])) {
  $smarty->display('login.tpl');
}

// check if fields are filled
if (!empty($_POST['email'])) {
  $_SESSION['email'] = $_POST['email'];
} else {
    $error = true;

} if (!empty($_POST['password'])) {
  // hashes passwords for database security
  $hashPass = hash('sha512', $_POST['password']);
} else {
  $error = true;
}

// Pull password from database
if (!$error) {
  $sql = "SELECT * FROM User WHERE Email = :e";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":e", $_SESSION['email']);
  $stmt->execute();
  $row = $stmt->fetch();

  if ($_POST['password'] == $row['Password']) {
    $_SESSION['firstName'] = $row['First_Name'];
    $_SESSION['lastName'] = $row['Last_Name'];
    $_SESSION['userID'] = $row['User_OID'];

    header('Location: profile.php');

  } else {
    // Password was incorrect
    $errorMessage = "incorrectly entered your password.";
    $smarty->assign("errorMessage", $errorMessage);
    $smarty->display("error.tpl");
  }
} else {
  // There was an error in the form
}
?>
