<!DOCTYPE html>

<html>
<head>
<title>MPUAT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
	<?php


$conn=mysql_connect("Localhost","root","") or die(mysql_error());
mysql_select_db("result",$conn);

?>



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

<div style="background-image: url(kp.jpg)">
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


<div class="wrapper row3">
<h2 align="center"> Upload Student Record </h2>
<br>


<head>

  <meta charset='utf-8'>
  <title>Untitled</title>
  <link rel='stylesheet' type='text/css'/>
    <style type='text/css'>

        #name
        {
        //border:2px red ridge;
            position:absolute;
            top:40px;
            left:350px;
            font-size:24px;
            color:blue;
        }
        #links
        {
        //border:2px red ridge;
            position:absolute;
            top:150px;
            left:400px;
            font-size:20px;
        }
        #values
        {
        //border:2px red ridge;
            position:absolute;
            top:420px;
            left:400px;
            font-size:20px;
        }
        #label
        {
        //border:2px red ridge;
            position:absolute;
            top:240px;
            left:400px;
            font-size:23px;

        }
        #upload_file
        {
            position: absolute;
            top:400px;
            left: 300px;
        }
    #status
    {
      position:absolute;
      top:300px;
      left:700px;
      color:red;

    }

    </style>
</head>
         
	<body>
    <?php
    
    if(isset($_POST['button']))
    {
      $qry=" insert into student(Rollno,E_no,Name,Fname,Mname,Year,Semester,Session,Department_name,College_name)value('".$_POST['Rollno']."','".$_POST['E_no']."','".$_POST['Name']."','".$_POST['Fname']."','".$_POST['Mname']."','".$_POST['Year']."','".$_POST['Semester']."','".$_POST['Session']."','".$_POST['Department_name']."','".$_POST['College_name']."')";

      mysql_query($qry);
      echo '<script> 
      alert("student data enter sussfully");
      </script>';
      header('insertObtained.php');
    }
?>   
     <div><center>

   <form method="post" action="">
          	Rollno<input type="text" name="Rollno" value=""><br>
          	E_no<input type="text" name="E_no" value=""><br>
          	Name<input type="text" name="Name" value=""><br>
          	Fname<input type="text" name="Fname" value=""><br>
          	Mname<input type="text" name="Mname" value=""><br>
          	Year<input type="text" name="Year" value=""><br>
          	Semester<input type="text" name="Semester" value=""><br>
          	Session<input type="text" name="Session" value=""><br>
          	DepartmentName<input type="text" name="Department_name" value=""><br>
          	CollegeName<input type="text" name="College_name" value=""><br>
          	<input type="submit" name="button" value="save">
          	
          </form>
          </center>

  
	</div>


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
