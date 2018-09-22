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



<body background="images/kkpl.jpg">
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

<br>

<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div><br><br>

<br><br>

<?php
error_reporting(0);
session_start();
if(isset( $_COOKIE['x'])&&isset( $_SESSION['y']))
{
//if(isset( $_SESSION['y']))
//{
/*$p=$_COOKIE['name'];
$p1=$_COOKIE['name1'];
$r=$_SESSION['y'];
print $r;
print $p;
print $p1;

*/
print "<!DOCTYPE html>
<style>
.btn-group button {
    background-color: black;
        border: 1px solid green;
    color: white;
    padding: 20px 24px;
    
    cursor: pointer;
    width: 25%;
    float:left;
    
    margin-left:90px;
    display: block;

}

.btn-group button:not(:last-child) {
    border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color:white;
}
</style>
<body>


<div class='btn-group'>
  <button><a href='insertStudent.php'>Enter Student Details</a></button>
  <button><a href='insertObtained.php'>Enter Obtained Marks </a></button>
   <button><a href='insertSubject.php'>Enter Subject Record</a></button>

</div>


</body>
</html>";
}
else
{
header('location:admin_login.php');
}


?>
<br><br><br>
<br><br>

</div>

<br>
<footer style="background-color:black">
  <br>
    <!-- ################################################################################################ -->
    <p style="text-align:center;color:white">Copyright &copy; 2019 - All Rights Reserved - <a href="#" style="color:#FFFFFF;">www.mpuat.ac.in</a></p>

    <!-- ################################################################################################ -->
<
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
