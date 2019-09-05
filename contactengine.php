<?php

if (isset($_POST['Submit'])) {
$name = $_POST['Name'];
$subject = $_POST['Subject'];
$mailFrom = $_POST['Email'];
$message = $_POST['Message'];

$mailTo = "hello@frnk.co.za";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}


?>
