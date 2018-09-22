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



<body background="images/kpl.jpg">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div style="background-image: url(kp.jpg)">
    <br>
     <h1 style="text-align:center;color:#FFFF00;font-size:350%"> <marquee direction=up; behavior=alternate> <center> COLLEGE OF TECHNOLOGY AND ENGINEERING UDAIPUR</center> </marquee></h1>
    <br><br><br><br><br><br><br><br><br><br>
</div>

      <div class="topnav">
         <a href="index.php">Home</a>
         <a href="admin_login.php"> Admin Login</a>
        <a href="student_login.php">Student Result</a>
         
       
      </div>

<br>

<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div><br><br>
<h2 align="center" style="color:#006600;"><b>Admin Login</b></h2>
<p style="color:red;" align="center">Please Enter Valid Username and Password Combination </p>
			<form name="f2" method="post" action="chk.php"><br>
			<table style="margin-left:200px; margin-right:200px; height:120px; width:970px;color: black">
			<tr>
			<td align="center"><b style="color:#009999; margin-left:80px;">Username:</b></td><td><input type="text" id="username" name="uname" placeholder="Enter User Name" style="width:300px; height:40px; margin-left:70px; text-align:center;" required></td></tr>
			<tr>
			<td align="center"><b style="color:#009999; margin-left:80px;">Password</b></td><td><input type="password" placeholder="Enter Your Password" name="pass" style=" width:300px; height:40px; margin-left:70px; text-align:center;"  required></td></tr>
			<tr>
			<td></td><td align="center"><input class="sendButton"  type="submit" name="login" value="Login" style="width:150px;"></td></tr>

			</table>
			 <br><br><br><br>

			</form>
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
