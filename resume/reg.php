<!DOCTYPE html>
<head>
<title>REGISTRATION</title>
<link rel="stylesheet" href="style.css">
<style>
body
{
background:#f59576;
}
.menu
{
    height: 400px;
    width: 1366px;
    background:#f8845f;
    margin: 0 auto;
    position: absolute;
    top: 100px;
    left: 0px;
    border-radius: 0px;
	}
.content
{
position:absolute;
top:462px;
left:0px;
background:#f86f44;
line-height:2.5;
}
.header
{
    height: 19px;
    width: 1366px;
    background: #e65f10;
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
	background:#f8845f;
	position:absolute;
	top:70px;
	left:500px;
}
table tr td .btn1, .btn2
{
background:brown;
border-radius:20px;
width:100px;
color:white;
font-weight:bold;
font-size:15px;
}

</style>
</head>
<body>
<div class="header">
</div>
<h1 style="position:absolute;left:200px;font-family:algerian;color:white"><center>DYNAMIC VACANCY PROFILE PROCESSING AND RECURSIVE SYSTEM</center></h1>
<div class="menu">
<img src="5187530_orig.png" height="300" width="300" style="position:absolute;left:20px;top:50px">
<form method="post">
<table border="0" align="center" cellpadding="5">
<caption style="color:white">JOB SEEKER REGISTRATION</caption>
<tr><td>Username</td><td><input type="text" name="t1"></td></tr>
<tr><td>Gender</td><td>Male<input type="radio" name="r1" value="male">Female<input type="radio" name="r1" value="Female"></td></tr>
<tr><td>Contact number</td><td><input type="text" name="t2" pattern="[0-9]{10}"></td></tr>
<tr><td>Emailid</td><td><input type="email" name="t3"></td></tr>
<tr><td>Password</td><td><input type="password" name="t4"></td></tr>
<tr><td>Confirm password</td><td><input type="password" name="t5"></td></tr>
<tr><td></td><td><input type="submit" name="sub" class="btn1" value="Submit"><input type="reset" name="res" class="btn2" value="Reset"></td></tr>
</table>
</form>
</div>
<?php
$host="localhost";
$user="root";
$pass="";
$db="maid";
$con=mysql_connect($host,$user,$pass);
if(isset($_POST['sub']))
{
$a=$_POST['t1'];
$b=$_POST['r1'];
$c=$_POST['t2'];
$d=$_POST['t3'];
$e=$_POST['t4'];
$f=$_POST['t5'];
if($_POST['t4']!== $_POST['t5'])
{
echo "<p style='position:absolute;top:400px;left:500px;color:white'>Password does not match!!!</p>";
}
if(!empty($_POST['t1']))
if(!empty($_POST['r1']))
if(!empty($_POST['t2']))
if(!empty($_POST['t3']))
if(!empty($_POST['t4']))
if(!empty($_POST['t5']))
if($_POST['t4']== $_POST['t5'])
{
mysql_select_db($db);
$insert=mysql_query("insert into registration(name,gender,contactno,email,password,confirm) values ('$a','$b','$c','$d','$e','$f')");
{
    echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="login.php"';
    echo '</script>';
}   
}
}
?>
</body>
</html>