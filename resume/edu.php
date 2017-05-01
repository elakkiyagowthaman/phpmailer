<!DOCTYPE html>
<head>
<title>EDUCATIONAL DETAILS</title>
<link rel="stylesheet" href="style.css">
<script>

    function updateFileName() {
        var upload = document.getElementById('choose');
        var f_name = document.getElementById('f_name');
        var fileNameIndex = upload.value.lastIndexOf("\\");

        f_name.value = upload.value.substring(fileNameIndex + 1);
    }
</script>
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
<li><a href="#">EDUCATIONAL DETAILS</a><li>
<li><a href="link.php">GET LINK</a><li>
<li><a href="#">UPLOAD RESUME</a><li>
<li><a href="home.html">LOGOUT</a><li>
</ul>
</div>
<div class="menu">
<img src="marketing_icon.png" height="300" width="400" style="position:absolute;left:10px;top:20px">
				<form name="form1" method="post" action="#" enctype="multipart/form-data">
				<table cellspacing="10" style="position:relative;left:500px">
<caption style="font-family:algerian">UPDATE EDUCATIONAL DETAILS</caption>
					<tr>
					<td>Full Name</td><td><input type="text"  name="t1">
					</td>
					</tr>	
					<tr>
					<td>Register no (UG/PG)</td><td><input type="text" name="reg">
					</td>
					</tr>
					<tr>
					<td>Graduation</td><td><select  name="s1"><option value="UG">UG</option><option value="PG">PG</option></select>
					</td>
					</tr>		
					<tr>
					<td>Year of Passing (UG/PG)</td><td><input type="month" name="t2">
					</td>
					</tr>
					<tr>
					<td>University</td><td><input type="text" name="t3">
					</td>
					</tr>	
					<tr>
					<td>CGPA</td><td><input type="text" name="t4">
					</td>
					</tr>		
					<tr>
					
					<td>SSLC (%)</td><td><input type="text" name="t5">
					</td>
					</tr>		
					<tr>
					<td>HSC (%)</td><td><input type="text" name="t6">
					</td>
					</tr>						
<tr>
<td><input style="position:absolute;left:200px" type="submit" name="sub" class="btn1" value="Submit">
<input style="position:absolute;left:300px" type="submit" name="sub" class="btn2" value="Reset">
</td>
</tr>					
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
$b=$_POST['reg'];
$c=$_POST['s1'];
$d=$_POST['t2'];
$e=$_POST['t3'];
$f=$_POST['t4'];
$g=$_POST['t5'];
$h=$_POST['t6'];
if(!empty($_POST['t1']))
if(!empty($_POST['reg']))
if(!empty($_POST['s1']))
if(!empty($_POST['t2']))
if(!empty($_POST['t3']))
if(!empty($_POST['t4']))
if(!empty($_POST['t5']))
if(!empty($_POST['t6']))
{
mysql_select_db($db);
$insert=mysql_query("insert into education(name,reg,graduation,passing,university,cgpa,sslc,hsc) values ('$a','$b','$c','$d','$e','$f','$g','$h')");
{
    echo '<script language="javascript">';
    echo 'alert("Successfully Update")';
    echo '</script>';
	echo '<script language="javascript">';
    echo 'alert("Please wait for link to upload resume")';
    echo '</script>';
}   
}
}
?>
</body>
</html>