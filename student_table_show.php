<!DOCTYPE html>

<html>
<head>
<title>MPUAT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>



<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}


</style>



<body background="images/kpll.jpg">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div style="background-image: url(ch1.png)">
    <br>
     <h1 style="text-align:center;color:#FFFF00;font-size:350%"> <marquee direction=up; behavior=alternate> <center> COLLEGE OF TECHNOLOGY AND ENGINEERING UDAIPUR</center> </marquee></h1>
    <br><br><br><br><br><br><br><br><br><br>
</div>

      <div class="topnav">
        <a href="student_login.php">Student Result</a>
         <a href="admin_login.php"> Admin Logout</a>
        <a href="index.php">Home</a>
      </div>
<br>

<div class="wrapper row3">

<?php
error_reporting( 0 );
$conn=mysql_connect("Localhost","root","") or die(mysql_error());
mysql_select_db("result",$conn);
$table="student";

echo "<!DOCTYPE html>
<html>
<head lang='en'>
    <meta charset='UTF-8'>

    <title>show database data</title>

	<style type='text/css'>

		#name
		{
			//border:2px red ridge;
			position:fixed;
			top:40px;
			left:350px;
			font-size:24px;
			color:blue;
		}
		#links
		{
			//border:2px red ridge;
			position:fixed;
			top:150px;
			left:400px;
			font-size:20px;
		}

		th, td {		font-weight:normal;
							border: 1px dashed white;
							border-collapse: collapse;
						}
		th, td {
					padding: 2px;
				}
		#tr1 {
					font-weight:bold;
							border: 1px solid black;
							border-collapse: collapse;
					padding: 5px;
				}
		#tr2 {
					font-weight:bold;
							border: 3px solid black;
							border-collapse: collapse;
					padding: 5px;
				}

		#show
		{
			//border:2px red ridge;
			position:absolute;
			top:250px;
			left:40px;
			//font-size:23px;
			//height:400px;
			width:90%;

		}

	</style>

</head>

<body>

";

echo "<table style='width:950px; border:3px solid  black; margin-left:200px; text-align:center; border-collapse: collapse;'>";
echo " <tr id='tr2'>";
echo "<th id='tr2' colspan='11' align='center'>STUDENT TABLE</th>";
echo "</tr>";

$f=mysql_query("desc student");
echo "<tr id='tr1'>";
while($pr=mysql_fetch_array($f))
	{
		echo "<th id='tr1'>".$pr[0]."</th>";
	}
echo "</tr >";



$stu=mysql_query("select * from $table order by RollNo");


while($p=mysql_fetch_array($stu))
{
echo "<tr >";
for($i=0;$i<11;$i++)
{echo "<th>".$p[$i]."</th>";}

/*echo "<th>".$p[1]."</th>";
echo "<th>".$p[2]."</th>";
echo "<th>".$p[3]."</th>";
echo "<th>".$p[4]."</th>";
echo "<th>".$p[5]."</th>";
echo "<th>".$p[6]."</th>";
echo "<th>".$p[7]."</th>";
echo "<th>".$p[8]."</th>";
echo "<th>".$p[9]."</th>";
echo "<th>".$p[10]."</th>";
*/
echo "</tr>";

}
echo "</table>";

print "</div>
</body> </html>";
?>

</div>
<br>
<footer style="background-color:black">
  <br>
    <!-- ################################################################################################ -->
    <p style="text-align:center;color:white">Copyright &copy; 2019 - All Rights Reserved - <a href="#" style="color:#FFFFFF;">www.mpuat.ac.in</a></p>

    <!-- ################################################################################################ -->
<br>
</footer>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
