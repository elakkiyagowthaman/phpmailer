<!DOCTYPE html>
<head>
<title>SEND MAIL</title>
</head>
<body>
<div class="header">
</div>
<div class="menu">
<form method="post" action="">
<table border="0" align="center" cellpadding="20">
<tr><td>ADMIN MAILID</td><td><input type="email" name="mail"></td></tr>
<tr><td>PASSWORD</td><td><input type="password" name="pass"></td></tr>
<tr><td>TO:EMAIL ID (JOBSEEKER) </td><td><input type="email" name="tomail"></td></tr>
<tr><td>SUBJECT</td><td><input type="text" name="subject"></td></tr>
<tr><td>ENTER YOUR MESSAGE</td><td><textarea name="key"></textarea></td></tr>
<tr><td colspan="5" align="center"><input type="submit" name="send" class="btn1" value="Send"></td></tr>
</table>
</form>
</div>
<?php
require 'PHPMailerAutoload.php';
if(isset($_POST['send']))
{
// Fetching data that is entered by the user
$email = $_POST['mail'];
$password = $_POST['pass'];
$to_id = $_POST['tomail'];
$message = $_POST['subject'];
$subject = $_POST['key'];

// Configuring SMTP server settings
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;

// Email Sending Details
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);

// Success or Failure
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else 
{
	    echo '<script language="javascript">';
    echo 'alert("MAIL SEND!!!")';
    echo '</script>';
}
}
?>
</body>
</html>