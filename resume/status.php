<!DOCTYPE html>
<head>
<title>CHECK STATUS</title>
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
<li><a href="edu.php">EDUCATIONAL DETAILS</a><li>
<li><a href="link.php">GET LINK</a><li>
<li><a href="uploadresume.php">UPLOAD RESUME</a><li>
<li><a href="#">CHECK JOB DETAILS</a><li>
<li><a href="home.html">LOGOUT</a><li>
</ul>
</div>
<div class="menu">
<img src="marketing_icon.png" height="300" width="400" style="position:absolute;left:10px;top:20px">
<form name="form1" method="post" action="#" enctype="multipart/form-data">
				<table cellspacing="10" style="position:relative;left:500px">
<caption style="font-family:algerian">CHECK STATUS</caption>
					<tr>
					<td>Date</td><td><input type="date"  name="t1">
					</td>
					</tr>	
					<tr>
					<td>ResumeID</td><td><input type="text"  name="t2">
					</td>
					</tr>							
					<tr>
					<td><input style="position:absolute;left:200px" type="submit" name="sub" class="btn1" value="Submit"></td>
					</tr>					
					</table>
</form>
</div>
<?php
if(isset($_POST['sub']))
{
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass);
$db_select=mysql_select_db("maid");
$a=$_POST['t1'];
$b=$_POST['t2'];
$select=mysql_query("select * from status where date='$a' and id='$b'");
//$insert=mysql_query("INSERT INTO table_2(filename,link) VALUES ('$a','$b')");
echo "<table border='1' width='500'align='center' cellpadding='0' cellspacing='0' style='position:absolute;top:300px;left:450px'>";
echo "<th style='color:white;'>RESUME ID</th>";
echo "<th style='color:white;'>STATUS</th>";
echo "<th style='color:white;'>LINK</th>";
while($row=mysql_fetch_assoc($select))
{
echo "<tr>";
echo "<td style='color:white;'>".$row['rego']."</td>";
echo "<td style='color:white;'>".$row['resumeid']."</td>";
echo "<td style='color:white;'><a href='uploadresume.php'>$row[up]</a></td>";
}
echo "</table>";
}
?>
</body>
</html>