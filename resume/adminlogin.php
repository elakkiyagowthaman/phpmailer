<!DOCTYPE html>
<head>
<title>ADMIN LOGIN</title>
<style>

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
background:#f59576;
line-height:2.5;
}
.header
{
    height: 19px;
    width: 1366px;
    background: #f680a8;
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
	background:#f59576;
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
<body style="background:#f59576">
<div class="header" style="background:#f59576">
</div>
<h1 style="position:absolute;left:200px;font-family:algerian;color:white"><center>DYNAMIC VACANCY PROFILE PROCESSING AND RECURSIVE SYSTEM</center></h1>
<div class="menu">
<img src="admin.ico" width="400">
<form method="post">
<table border="0" align="center" cellpadding="5">
<caption>ADMIN LOGIN</caption>
<tr><td>Username</td><td><input type="text" name="t1"></td></tr>
<tr><td>Password</td><td><input type="password" name="t2"></td></tr>
<tr><td></td><td><input type="submit" name="sub" class="btn1" value="Login"><input type="reset" name="res" class="btn2" value="Reset"></td></tr>
</table>
</form>
</div>
<?php 
if(isset($_POST['sub']))
{
	if(!empty($_POST['t1']=="Admin")&&($_POST['t2']=="Admin"))
	{
	    echo '<script language="javascript">';
    echo 'location.href="adminindex.php"';
    echo '</script>';
	}
	else
	{
	    echo '<script language="javascript">';
    echo 'alert("Invalid username or Password"); location.href="adminlogin.php"';
    echo '</script>';
	}
}
?>
</body>
</html>