<?php

include "../private_html/config.php";

// var declarations
$length = 5;
$error = false;
$p = "";

// Creates a random password for the registration
while (strlen($p) != $length) {
    $case = rand(1, 3);
    if ($case == 1) {
        $p .= rand(0, 9);

    } if ($case == 2) {
        $letter = rand(97, 122);
        $p .= chr($letter);

    } if ($case == 3) {
        $letter = rand(65, 90);
        $p .= chr($letter);
    }
}

// Hashes the password
$hashPass = hash('sha512', $p);

// Displays the registration page
if(!isset($_POST['email'])) {
    $smarty->display("reg.tpl");
}

if(!empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $error = true;
}

if(!empty($_POST['firstName'])) {
} else {
    $error = true;
}

if(!empty($_POST['lastName'])) {
} else {
    $error = true;
}

if ($error == false) {
  $subject = "Welcome to myForte!";
  $message = "Welcome to myForte! This is the password you
      can use to login: " . $p . " Enjoy! - The myForte Team";
  $header = "FROM: "
      . "Katie Piette<kp1269@messiah.edu> \r\n";

  if (mail($email, $subject, $message, $header)) {

      // Email was successful & insert info into database
      $sql = "INSERT INTO   User(Password, Email, First_Name, Last_Name)
              VALUES        (:p, :e, :f, :l)";

      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(":p", $p);
      $stmt->bindParam(":e", $_POST['email']);
      $stmt->bindParam(":f", $_POST['firstName']);
      $stmt->bindParam(":l", $_POST['lastName']);
      $stmt->execute();

      header('Location: home.php');
   }
} else {
    // error with registration information
}
