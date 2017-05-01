<!DOCTYPE html>
<head>
<title>SEND MAIL</title>
<style>
body
{
background:#f59576;
}
.menu
{
    height: 400px;
    width: 1366px;
    background: #f07934;
    margin: 0 auto;
    position: absolute;
    top: 150px;
    left: 0px;
    border-radius: 0px;
	}
.content
{
position:absolute;
top:462px;
left:0px;
background:#f680a8;
line-height:2.5;
}
.header
{
    height: 19px;
    width: 1366px;
    background: #e8582b;
    margin: 0 auto;
    position: absolute;
    top: 0px;
	left:0px;
	border-radius:0px;
}
.list li
{
list-style:none;
padding:0px;
float:left;
}
li a
{
    color: white;
    text-decoration: none;
    position: relative;
    left: 250px;
    top: 0px;
    font-weight: bold;
	border-right:solid 1px white;
	border-left:solid 1px white;
    padding: 15px;
}
table
{
    color: white;
    font-weight: bold;
    font-size: 20px;
	background:#f07934;
}
.menumain 
{
background:#e8582b;
color:black;
position:relative;
top:70px;
left:-10px;
height:50px;
width:1365px;
}
.menumain li a
{
position:relative;
top:20px;
color:white;
}
</style>
</head>
<body>
<div class="header">
</div>
<h1 style="position:absolute;left:200px;font-family:algerian;color:white"><center>DYNAMIC VACANCY PROFILE PROCESSING AND RECURSIVE SYSTEM</center></h1>
<div class="menumain">
<ul class="list">
<li><a href="adminindex.php">JOB SEEKER DETAILS</a><li>
<li><a href="providelink.php">PROVIDE LINK</a><li>
<li><a href="shortlist.php">SHORTLIST</a><li>
<li><a href="job_notification.php">SEND MAIL TO JOB SEEKER</a><li>
<li><a href="home.html">LOGOUT</a><li>
</ul>
</div>
<div class="menu">
<form method="post" action="">
<table border="0" align="center" cellpadding="20">
<caption>SEND JOB NOTIFICATION</caption>
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