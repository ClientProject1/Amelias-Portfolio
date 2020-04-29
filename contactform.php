<?php

  if(isset($_POST['submit'])) {
    $fname = $_POST['first-name'];
    $sname = $_POST['second-name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "james.phelps1995@live.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$fname." ".$sname.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: contact.php?mailsend");
  }

?>
