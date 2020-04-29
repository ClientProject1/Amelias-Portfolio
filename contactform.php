<?php

  //Does not work because it is localhost????
  //does not work because it is gmail????

  if(isset($_POST['submit'])) {
    $fname = $_POST['first-name'];
    $sname = $_POST['second-name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "amelia.butler98@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$fname." ".$sname.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: contact.php?mailsend");
  }

?>
