<!DOCTYPE html>
<head>
<title>FLAT ALLOTMENT DETAILS</title>
<link rel="stylesheet" href="blockdetails1.css">
</head>
<body>
<div class="header">
</div>
<h1><center>SMART FLAT ESTIMATION AND MANAGEMENT SYSTEM</center></h1>
<div class="mainmenu">
<ul class="list">
<li><a href="flatdetails.php">FLAT DETAILS</a><li>
<li><a href="blockdetails.php">BLOCK DETAILS</a><li>
<li><a href="flatownerdetails.php">FLAT OWNER DETAILS</a><li>
<li><a href="#">FLAT ALLOTMENT DETAILS</a><li>
<li><a href="report.php">INSTALLMENT DETAILS</a><li>
<li><a href="maintenance.php">MAINTENANCE DETAILS</a><li>
<li><a href="home.html">LOGOUT</a><li>
</ul>
</div>
<div class="menu">
<form method="post">
<table border="0" width="1000" align="center" cellpadding="8">
<caption>VIEW INSTALLMENT DETAILS</caption>
<tr><td align="center"><input type="submit" name="sub" class="btn1" value="VIEW"></td></tr>
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
$db_select=mysql_select_db("flat");
$select=mysql_query("select * from installment");
//$insert=mysql_query("INSERT INTO table_2(filename,link) VALUES ('$a','$b')");
echo "<table border='1' width='800'align='center' cellpadding='0' cellspacing='0' style='position:relative;left:200px;top:300px'>";
echo "<th style='color:white;'>OWNER ID</th>";
echo "<th style='color:white;'>TOTAL</th>";
echo "<th style='color:white;'>DUE DETAILS</th>";
echo "<th style='color:white;'>AMOUNT</th>";
echo "<th style='color:white;'>credit</th>";
echo "<th style='color:white;'>BALANCE</th>";
while($row=mysql_fetch_assoc($select))
{
echo "<tr>";
echo "<td style='color:white;'>".$row['id']."</td>";
echo "<td style='color:white;'>".$row['total']."</td>";
echo "<td style='color:white;'>".$row['duedetails']."</td>";
echo "<td style='color:white;'>".$row['amount']."</td>";
echo "<td style='color:white;'>".$row['credit']."</td>";
echo "<td style='color:white;'>".$row['balance']."</td>";
}
echo "</table>";
}
?>
</body>
</html>