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
  float: left;
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
        <a href="index.php">Home</a>
        <a href="admin_login.php"> Admin Logout</a>
        <a href="student_login.php">Student Result</a>
         </div>


  <div>
<?php
error_reporting(0);
$conn=mysql_connect("Localhost","root","") or die(mysql_error());
mysql_select_db("result",$conn);
$go1=$_POST['go1'];
$go2=$_POST['go2'];
$Eno=$_POST['eno'];
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$year=$_POST['year'];
$sem=$_POST['sem'];
$session=$_POST['session'];

if(isset($_POST['go1']))
{

if($Eno!=null && $year!=null && $sem!=null)
{
echo "<table style='border:4px; margin-left:200px; margin-right:200px; height:5px; width:940px; color:red;'>";
echo "<tr ><th colspan='1' align='center'><img src='images\logo.png' width='40px' height='40px'></th><th colspan='7'><h2  align='center'> COLLEGE OF TECHNOLOGY AND ENGINEERING UDAIPUR</h2></th></tr>";

echo "<tr><td colspan='8' align='center'>STUDENT'S GRADE REPORT<hr></td></tr>";

$p=mysql_query("select * from student where E_no='$Eno' and Year='$year' and Semester='$sem'");

while($a=mysql_fetch_array($p))
{echo "<tr><td colspan='8'>";
echo "Roll No :" .$a[1]."";
echo "<br>";
echo "Enrolment NO : " .$a[2]."";
echo "<br>";
echo "Name : " .$a[3]."";
echo "<br>";
echo "Father's Name : " .$a[4]."";
echo "<br>";
echo "Semester :" .$a[7]."";
echo "<br>";
echo "Mother's Name: " .$a[5]."";
echo "<br>";
echo "Session : " .$a[8]."<br/>";
echo "</td></tr>";
}
$p=mysql_query("desc obtained_marks");

echo "<tr>";
echo "
<th style='text-align:center;'>Course No</th>
<th style='text-align:center;'>Title of the Course</th>
<th style='text-align:center;'>Marks Theory</th>
<th style='text-align:center;'>Marks Practical</th>
<th  style='text-align:center;'>Marks Mid Terms</th>
 <th  style='text-align:center;'>Total</th>
 <th  style='text-align:center;'>Grade Point</th>
 <th  style='text-align:center;'>Credit Points</th>
 <br/>";
echo "</tr>";

$p=mysql_query("select Course_No,Subject_Name,Obtained_sem,Obtained_practical,Obtained_mid,Subject_total,Subject_grade_points,Subject_credit_points from obtained_marks where E_no='$Eno' and Year='$year' and Semester='$sem'");
while($a=mysql_fetch_array($p))
{
echo "<tr style='border:1px;'>";
echo "<td style='text-align:center;' >".$a[0]."</td> <td style='text-align:center;'>".$a[1]."</td><td style='text-align:center;'> ".$a[2]."</td><td style='text-align:center;'> ".$a[3]."</td><td style='text-align:center;'> ".$a[4]."</td><td style='text-align:center;'> ".$a[5]."</td><td style='text-align:center;'> ".$a[6]."</td><td style='text-align:center;'> ".$a[7]."</td><br/>";
echo"</tr>";
}

$p=mysql_query("select Total_credit,Total_credit_obtained,SGPA,OGPA from result where E_no='$Eno' and Year='$year' and Semester='$sem'");


while($a=mysql_fetch_array($p))
{echo "<tr>";
echo "<th colspan='4' align='center'>Total</th><td colspan='3' style='text-align:center;'>$a[0]</td><td style='text-align:center;'>$a[1]</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan='7' align='center'>SGPA</th><td style='text-align:center;'><b>$a[2]</b></td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan='7' align='center'>OGPA</th><td style='text-align:center;'><b>$a[3]</b></td>";
echo "</tr>";

}

$p=mysql_query("select Backlog_details from result where E_no='$Eno' and Year='$year' and Semester='$sem'"); 


while($a=mysql_fetch_array($p))
echo "<td colspan='4' align='center'><b>Previous Backlog Details</b></td>  <td colspan='4'>$a[0] </td>";


echo "</table>";

}

if(isset($_POST['go2']))
{
if($Eno!=null && $year!=null && $sem!=null)
{


}


}


}

?>

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
