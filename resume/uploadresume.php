<!DOCTYPE html>
<head>
<title>UPLOAD RESUME</title>
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
color:white;
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
<li><a href="edu.php">EDUCATIONAL DETAILS</a><li>
<li><a href="link.php">GET LINK</a><li>
<li><a href="#">UPLOAD RESUME</a><li>
<li><a href="home.html">LOGOUT</a><li>
</ul>
</div>
<div class="menu">
<img src="uploadicon.jpg" height="200" width="200" style="position:absolute;left:50px;top:20px">
				<form name="form1" method="post" action="#" enctype="multipart/form-data">
				<table cellspacing="10" style="position:relative;left:500px">
<caption style="font-family:algerian">UPLOAD RESUME</caption>
					<tr>
					<td>Date</td><td><input type="date"  name="t1">
					</td>
					</tr>	
					<tr>
					<td>Jobseeker Name</td><td><input type="text"  name="t2">
					</td>
					</tr>	
					<tr>
					<td>Resume ID</td><td><input type="text"  name="t3" required>
					</td>
					</tr>	
					<tr>
					<td>Choose Resume to upload</td>
					<td><input type="file" name="upload" id="choose" onchange="updateFileName()"><input type="hidden" id="f_name" name="filename"></td>
					</tr>			
<tr>
<td><input style="position:absolute;left:300px" type="submit" name="sub" class="btn1" value="Upload"></td>
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
//file directory
$directory="uploads/";
//print_r($_FILES);
$target_file=$directory .($_FILES["upload"]["name"]);
$uploadok=1;
$imagefiletype=$_FILES["upload"]["type"];
move_uploaded_file($_FILES['upload']['tmp_name'],$target_file);
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['filename'];
if(!empty($_POST['t1']))
if(!empty($_POST['t2']))
if(!empty($_POST['t3']))
if(!empty($_POST['filename']))
{
mysql_select_db($db);
$insert=mysql_query("insert into resume(dat,name,id,resume) values ('$a','$b','$c','$d')");
{
    echo '<script language="javascript">';
    echo 'alert("Successfully Upload...Check Your mail for Job notification")';
    echo '</script>';
}   
}
}
?>
</body>
</html>