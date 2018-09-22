<!DOCTYPE html>

<html>
<head>
<title>MPUAT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left" style="color:#FFFFFF;">
      <ul class="nospace inline pushright">
	      <li><i class="fa fa-user" ></i> <a href="#" style="color:#FFFFFF;">0294-2470837</a></li>
        <li><i class="fa fa-user"></i> <a href="#" style="color:#FFFFFF;">info@mpuat.ac.in</a></li>
      </ul>
    </div>
    <div class="fl_right">
   
      <ul class="nospace inline pushright" style="color:#FFFFFF;">
	      <li><i class="fa fa-user"></i> <a href="index.php" style="color:#FFFFFF;" >Home</a></li>
      <li><i class="fa fa-sign-in"></i> <a href="student_login.php" style="color:#FFFFFF;">Student Result</a></li>
		 <li><i class="fa fa-user"></i> <a href="admin_login.php"  style="color:#FFFFFF;"> Admin Logout</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left" style="width:1200px; height:100px; margin-top:-21px;">
     <h5 style="font-size:20px; color:#FF0000;"> <a href="index.php"><img src="logo.png" width="10px" height="120px"></a>Maharana Pratap University of Agriculture & Technology, Udaipur  (Raj.)</h5>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <h2></h2>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->

  <!-- ################################################################################################ -->
  <div class="wrapper">
    <article  class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p style="color:#FFFFFF;"> Latest News:<marquee> </marquee></p>
      <!-- ################################################################################################ -->
    </article>
  </div>
 </div>
<div class="wrapper row3"><br><br>
<h2 align="center">Upload Obtained Marks Record CSV File Format </h2>
<br><br>

  <div id='upload_file'><center>
        <form method='post' action='#' enctype='multipart/form-data'>
					<input type='text'><input type='file' name='file' value='file' />
					<br/>			
					<input type='submit' name='insert'  value='insert student data'/>
					<input type='submit' name='cancel'  value='cancel'/>
					<input type='submit' name='skip'  value='skip'/>

					
			</form></center>
	</div>
	<div id='status'>
	<?php

error_reporting( 0 );
$conn=mysql_connect("Localhost","root","") or die(mysql_error());
mysql_select_db("result",$conn);

echo "<!Doctype html>";
if(isset($_POST['insert']))
	{
	
		
		$file=$_FILES['file']['name'];
		
		
		if($file==NULL)
			{
			echo "please choose a file";
			}
		else if($file=="student.csv")
		{
		echo "file name:=".$file."<br/>";
		$handle=fopen($file,"r");
		//echo $handle;
		//print_r("<br/>");
		
		$count=0;
		$ct=0;
		$err=0;
		while(($fileop = fgetcsv($handle,1000,","))!==false)
			{ 
					if($count==0)
							{ if($fileop[0]=='RollNo'&&$fileop[1]=='E_no'&&$fileop[2]=='Name'&&$fileop[3]=='Fname'&& $fileop[4]=='Mname'&&$fileop[5]=='Year'&&$fileop[6]=='Semester'&&$fileop[7]=='Session'&&$fileop[8]=='Department_name'&&$fileop[9]=='College_name')
								{$count=1;
								$ct++;
								continue;}
								else 
								{
								echo "<br/>please enter valid data in file ";
								break;
								}
								}
				 $sql=mysql_query("INSERT INTO student(RollNo,E_no,Name,Fname,Mname,Year,Semester,Session,Department_name,College_name)values($fileop[0],'$fileop[1]','$fileop[2]','$fileop[3]','$fileop[4]','$fileop[5]','$fileop[6]','$fileop[7]','$fileop[8]','$fileop[9]')");
					$ct++;
				 if($sql)
						{
						if($err==0)
						{echo 'data uplaoded successfully';
						header("location:insertObtained.php");
						}
						else 
						{
						echo "data entered from ".$ct ." no row of your csv file<br/>";
						}
						}
				else
				{		$err++;
						echo "data duplicasy occur at ".$ct ." no row of your csv file<br/>";
					}
			 }
		 }
		 else 
		 {
		 echo "please enter valid file it should be named as student.csv";
		 }
	}
else if(isset($_POST['cancel']))
	{
			header("location:upload_data.php");
	}

else if(isset($_POST['skip']))
	{
			header("location:insertObtained.php");
	}

echo "</div></body>";	

?>
<br><br><br>
<br><br>

</div>
<br>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left" style="color:#FFFFFF;">Copyright &copy; 2019 - All Rights Reserved - <a href="#" style="color:#FFFFFF;">www.mpuat.ac.in</a></p>
    <p class="fl_right" style="color:#FFFFFF;">Design By : <a target="_blank" href="http://www.mpuat.ac.in/" title="www.mpuat.ac.in" style="color:#FFFFFF;">CTAE 3 YEAR CSE STUDENT</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>