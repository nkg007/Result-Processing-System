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
  background-color:#333;
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
.bimage{
  background-image: url("151.jpg");
   background-repeat: no-repeat;
   background-position: center;
   background-size: cover;

}


</style>



<body background="images/kpll.jpg">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="bimage">
    <br>
    <h1 style="text-align:center;color:#FFFF00;font-size:350%"> <marquee direction=up; behavior=alternate> <center> COLLEGE OF TECHNOLOGY AND ENGINEERING UDAIPUR</center> </marquee></h1>
    <br><br><br><br><br><br><br><br><br><br>
</div>

      <div class="topnav">
         <a href="index.php">Home</a>
         <a href="admin_login.php"> Admin-Logout</a>
        <a href="student_login.php"> Result</a>
         
       
      </div>
<br>

<div> <br><br><br>
<h2 align="center" style="color:#006600;"><b>Enter details</b></h2>

		<form name="f2" method="POST" action="studentresult.php">
	<div style="margin-left:0px; margin-right:0px; width:100%">
	 
	<div align="center"><input autofocus class="input-large span10" style="width:160px; height:50px; margin-left:5px; text-align:center;" name="eno" placeholder="Enrollment Number" id="enrollment_number" type="text" /></div><br>
    <div align="center"><input autofocus class="input-large span10" name="year" placeholder="Year" id="year1" type="text" style="width:160px; text-align:center; height:50px; margin-left:10px;" /> </div><br>
    <div align="center"><input autofocus class="input-large span10" name="sem" style="width:160px; text-align:center; height:50px; margin-left:10px;"placeholder="Semester" id="semester1" type="text" /></div><br>
     <div style="color:#FF00FF ; colspan="3" ><center> <input type="submit" color: #000000;  name="go1" value="Display Result"></center></div>
		
		</div>

		</form>
  

			<br><br>

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
