<?php
//error_reporting( 0 );
$conn=mysql_connect("Localhost","root","") or die(mysql_error());
mysql_select_db("result",$conn);

//enrolment no and RollNo entry 

$f=mysql_query("select distinct E_no,RollNo,Year,Semester  from obtained_marks");
while($r=mysql_fetch_array($f))
{
			print $r[0]  ."&nbsp;&nbsp;". $r[1] ."&nbsp;&nbsp;". $r[2] ."&nbsp;&nbsp;".$r[3]. "<br /><br/>";
		mysql_query("insert into result (E_no,RollNo,Year,Semester)values('$r[0]',$r[1],'$r[2]','$r[3]') ");
		$no=0;
		$p=mysql_query("select Subject_credit_points from obtained_marks where E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]' ");
		
		while($d=mysql_fetch_array($p))
			{
			$no=$no+$d[0];
			}
/*
//Year and semester updation
		$y=mysql_query("select distinct Year,Semester from obtained_marks where E_no='$r[0]' and RollNo=$r[1] " );
		while($sem=mysql_fetch_array($y))
		{
			mysql_query("update result set Year='$sem[0]',Semester='$sem[1]' where E_no='$r[0]' and RollNo=$r[1]");
		}
*/
//Total_credit_obtained updation

		mysql_query("update result set Total_credit_obtained=$no where E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]'  ");
			$no=0;
		$a=mysql_query("select Subject_Name from obtained_marks where  E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]' ");
			while($d=mysql_fetch_array($a))
			{
					$m=mysql_query("select Total_cr from subject where Subject_Name='$d[0]'");
					$n=mysql_fetch_array($m);
					$no=$no+$n[0];
			}

//Total_credit updation 
		
			mysql_query("update result set Total_credit=$no where E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]' ");
			

// SGPA updation		

			mysql_query("update result set SGPA=Total_credit_obtained/Total_credit where E_no='$r[0]' and RollNo='$r[1]'and Year='$r[2]' and Semester='$r[3]' ");
	
//Current Backlog_details updation	

			$backcr=" ";
			$pass=mysql_query("select Course_No from obtained_marks where Subject_status!='pass' and E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]' ");
			$count1=0;
			while($a=mysql_fetch_array($pass))
			{ //print $a[0]."<br/>";
				$backcr=$backcr.$a[0];
				$backcr=$backcr.",";
				$count1++;
			}
			
			mysql_query("update result set Current_backlog='$backcr' where E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]' ");
		
//Backlog_details updation	

			$back=" ";
			$cr=0;
			//$pass=mysql_query("select Course_No from obtained_marks where Subject_status!='pass' and E_no='$r[0]' and RollNo>=$r[1]  ");
			
			if($r[3]=='2')
			{
			$pass=mysql_query("select Course_No from obtained_marks where Subject_status!='pass' and E_no='$r[0]' and RollNo<=$r[1]  ");
			}
			else 
			{
			$pass=mysql_query("select Course_No from obtained_marks where Subject_status!='pass' and E_no='$r[0]' and RollNo<$r[1]  ");
			$cr=1;
			}
			$count=0;
			
			while($a=mysql_fetch_array($pass))
			{ //print $a[0]."<br/>";
				$back=$back.$a[0];
				$back=$back.",";
				$count++;
			//	echo $back;
			}
			
			if($cr==1)
			{
			$back=$back.$backcr;
			$count=$count+$count1;
			}
			mysql_query("update result set Backlog_details='$back' where E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]' ");
			

	
//OGPA Updation		

			$no=0;
			$freq=0;
			
			if($r[3]=='2')
			{
						$OGPA=mysql_query("select SGPA from result where E_no='$r[0]' and RollNo<=$r[1]");

			}
			else 
			{
						$OGPA=mysql_query("select SGPA from result where E_no='$r[0]' and RollNo<$r[1]");

				$cr=1;
			}
			
			while($a=mysql_fetch_array($OGPA))
			{
				$no=$no+$a[0];
				$freq++;
			//	echo "freq:=".$freq."<br/>";
			}
			//print $no;
			
			if($cr==1)
			{	
				$SGPA=mysql_query("select SGPA from result where E_no='$r[0]' and RollNo=$r[1] and Semester='$r[3]'");
				//print $cr;
				$sgpa=mysql_fetch_array($SGPA);
				$no=$no+$sgpa[0];
				$freq++;
			}
			
		/*	echo "total: = ".$no."<br/>";
			echo "freq: = ".$freq."<br/>";
		*/
			// average finding
			$no=$no/$freq;
		
		//	echo "average=".$no."<br/>";
			
			mysql_query("update result set OGPA='$no' where E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]'");

			
//Final_STATUSofSEM updation	

			$pass=mysql_query("select Course_No from obtained_marks where Subject_status!='pass' and E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]'");
			if($a=mysql_fetch_array($pass))
			{
			mysql_query("update result set Final_STATUSofSEM='fail' where E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]' ");
			
			}
			else 
			mysql_query("update result set Final_STATUSofSEM='pass' where E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]' ");


//year_back_status updation	

			$back=" ";
			$temp=0;
			if($r[3]=='2')
				{
				$pass=mysql_query("select Course_No from obtained_marks where Subject_status!='pass' and E_no='$r[0]' and RollNo<=$r[1] ");
				}
			else 
				{
				$pass=mysql_query("select Course_No from obtained_marks where Subject_status!='pass' and E_no='$r[0]' and RollNo<$r[1] ");
				$temp=1;
				}
			$count=0;
			
			while($a=mysql_fetch_array($pass))
			{ 
				$count++;
			}
			
			if($temp==1)
			{	
				$pass1=mysql_query("select Course_No from obtained_marks where Subject_status!='pass' and E_no='$r[0]' and RollNo=$r[1] and Semester='$r[3]'");
				$a1=mysql_fetch_array($pass1);
				if($a1[0])
				{	
			
					$pass1=mysql_query("select Course_No from obtained_marks where Subject_status!='pass' and E_no='$r[0]' and RollNo=$r[1] and Semester='$r[3]'");
					
					while($a1=mysql_fetch_array($pass1))
							{ 
								$count++;
							}
				 
				}
				
			}
			mysql_query("update result set No_ofBack='$count' where E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]'");
			mysql_query("update result set year_back_status='yes' where E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]' and $count>=9 ");
			mysql_query("update result set year_back_status='no' where E_no='$r[0]' and RollNo=$r[1] and Year='$r[2]' and Semester='$r[3]' and $count<9");

			
	

}
/*
<?php
   $e="select form * result";
   $R=mysql_query($e);
   while($row=mysql_fetch_array($e))
   {
	$sno=$row['sno'];
   }
   ?>
   */



//mysql_query('update result set ');

header('Location:adminOptions.php');
?>