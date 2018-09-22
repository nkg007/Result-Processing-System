<?php
error_reporting( 0 );
$conn=mysql_connect("Localhost","root","") or die(mysql_error());
mysql_select_db("result",$conn);
mysql_query('update subject set max_pr=30 where Credit_practical!=0 and Credit_theory!=0');
mysql_query('update subject set max_pr=0 where Credit_practical=0');
mysql_query('update subject set max_pr=80 where Credit_practical!=0 and Credit_theory=0');
mysql_query('update subject set max_mid=20');
mysql_query('update subject set max_th=100-max_mid-max_pr');
//mysql_query('update subject set max_th=80 where max_pr=0');
//mysql_query('update subject set max_th=50 where max_pr!=0');

mysql_query('update subject set Passing_th=0.40*max_th');
mysql_query('update subject set Passing_th=0.40*(max_th+max_mid)');
mysql_query('update subject set Passing_pr=0.40*max_pr');
mysql_query('update subject set Total_cr=Credit_theory+Credit_practical');
mysql_query('update subject set Passing_pr=0.40*max_pr');

header('Location:insertSubject.php');
?>