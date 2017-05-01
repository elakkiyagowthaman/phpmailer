<!DOCTYPE html>
<head>
<title>PROVIDE LINK</title>
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
<li><a href="adminindex.php">JOB SEEKER DETAILS</a><li>
<li><a href="providelink.php">PROVIDE LINK</a><li>
<li><a href="shortlist.php">SHORTLIST RESUME</a><li>
<li><a href="job_notification.php">SEND MAIL TO JOB SEEKER</a><li>
<li><a href="home.html">LOGOUT</a><li>
</ul>
</div>
<div class="menu">
<img src="marketing_icon.png" height="300" width="400" style="position:absolute;left:10px;top:20px">
				<form name="form1" method="post">
				<table cellspacing="10" style="position:relative;left:500px">
<caption style="font-family:algerian">UPDATE SHORTLIST DETAILS</caption>
										<tr>
					<td>Resume Id</td><td><input type="text"  name="t1">
					</td>
					</tr>
					<tr>
					<td>Date</td><td><input type="date"  name="t2">
					</td>
					</tr>
					<tr>
					<td>EmailId</td><td><input type="text" name="t3">
					</td>
					</tr>
<tr>
<td><input style="position:absolute;left:100px" type="submit" name="sub" class="btn1" value="Submit">
<input style="position:absolute;left:200px" type="submit" name="view" class="btn1" value="View">
</td>
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
$db="maid";
$con=mysql_connect($host,$user,$pass);
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
if(!empty($_POST['t1']))
if(!empty($_POST['t2']))
if(!empty($_POST['t3']))
mysql_select_db($db);
$insert=mysql_query("INSERT INTO shortlist(rid,dat,mail) VALUES ('$a','$b','$c')");
{
    echo '<script language="javascript">';
    echo 'alert("Updated successfully")';
    echo '</script>';
}   
}
?>
<?php
if(isset($_POST['view']))
{
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass);
$db_select=mysql_select_db("maid");
$a=$_POST['t1'];
$select=mysql_query("select * from resume where id='$a'");
//$insert=mysql_query("INSERT INTO table_2(filename,link) VALUES ('$a','$b')");
echo "<table border='1' width='600'align='center' cellpadding='0' cellspacing='0' style='position:absolute;top:400px;left:450px'>";
echo "<th style='color:white;'>DATE</th>";
echo "<th style='color:white;'>JOB SEEKER NAME</th>";
echo "<th style='color:white;'>RESUME ID</th>";
echo "<th style='color:white;'>RESUME</th>";
while($row=mysql_fetch_assoc($select))
{
echo "<tr>";
echo "<td style='color:white;'>".$row['dat']."</td>";
echo "<td style='color:white;'>".$row['name']."</td>";
echo "<td style='color:white;'>".$row['id']."</td>";
echo "<td style='color:white;'><a href='uploads/$row[resume]'>$row[resume]</a></td>";
}
echo "</table>";
}
?>
</body>
</html>