<?php

// name var
$name = $_POST['name'];

// email var
$email = $_POST['email'];

// message var
$message = $_POST['message'];

// from
$from = "xx@xx.xx";

//destination adress
$to = "xx@xx.xx";

// email tittle
$title = "contact from www.xx.xx";

// insert message
$email = "";
$email .= "Imie i nazwisko: " . $name . "\n";
$email .= "Email: " . $email . "\n";
$email .= "Wiadomość: " . $message . "\n";

// send
$success = mail($to, $title, $email, "Od: <$from>");

// forward to confirmation
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=confirm\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>
