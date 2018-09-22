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



input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    color:black;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius: 10%;
}

.container {
    padding: 16px;
    margin-left: 400px;
    margin-right: 400px;
    text-align: center;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
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
        <a href="admin_login.php"> Admin-Login</a>
        <a href="student_login.php">Result</a>
         
        
      </div>

<br>

<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<h2 style="text-align:center;color:#FFFF00" >Admin Login Page</h2>

<form method="post" action="chk.php">
  <div class="imgcontainer">
    <img src="images/krishna.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" id="username" name="uname" placeholder="Enter User Name" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Your Password" name="pass" required>

    <button type="submit" name="login" value="Login">Login</button>

  </div>

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
