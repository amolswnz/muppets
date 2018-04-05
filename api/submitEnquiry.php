<?php
  $response = $_POST["g-recaptcha-response"];
  $secret = "6LfxLVEUAAAAAMJKesDJG4_i80hA6cbJL4fGbttB";
  $dav = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response");
  $res = json_decode($dav,true);

  if(!$res["success"]) {
    echo json_encode(
      array("error" => "Captcha verification failed.")
    );
    die();
  }
  unset($_POST["g-recaptcha-response"]);

  $to = "hello@amolwankhede.com";

  $subject = "Website Enquiry";

  $headers = "From: " . strip_tags($_POST["email"]) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($_POST["email"]) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $message = "<html><body>";
  $message .= "<h1>From $_POST[email]</h1>";
  $message .= $_POST['enquiry'];
  $message .= "</body></html>";

  mail($to, $subject, $message, $headers);
  echo json_encode(
    array('success' => 'Message sent successfully.')
  );
