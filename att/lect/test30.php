<?php
require_once('../com/connection.php');
require_once('../funcs/checkvalidity.php');
$date=$_GET['date'];
$year=$_GET['year'];
$section=$_GET['section'];
$sp=$_GET['period'];
$np=$_GET['noperiod'];
$subject_id=$_GET['subject'];
$r=array();$i=0;$no_stu=0;
if(!isValidSubjectCode($subject_id))
{
	echo "you entered invalid subject code.Redirecting you";
	header("refresh:5;url=view_tt.php");
}
$query="SELECT * FROM student_current_details WHERE current_sec='$section' AND (current_ele1='$subject_id' OR current_ele2='$subject_id' OR current_ele3='$subject_id') ORDER BY roll_number";
$result=mysql_query($query);
if($result)
{
	if(mysql_num_rows($result)>0)
	{
		while($row=mysql_fetch_array($result))
		{
			$no_stu++;
			$r[$i++]=$row['roll_number'];
		}
	}
	else
	{
		echo "some unknown error";
	}
	
}
else
{
	echo "some error encountered while quering";
}

$i=0;
$p=array();
$a=array();
$pre_count=0;
$abs_count=0;
while($i<$no_stu)
{
	if(isset($_GET[$r[$i]]))
	{
		$p[$pre_count]=$r[$i];
		$pre_count++;
	}	
	elseif(!isset($_GET[$r[$i]]))
	{
		$a[$abs_count]=$r[$i];
		$abs_count++;
	}
	$i++;
}
$pre=serialize($p);
$abs=serialize($a);
header("location:confirm_attele1.php?year=$year&subject=$subject_id&sec=$section&sp=$sp&np=$np&no_stu=$no_stu&no_pre=$pre_count&pre=$pre&no_abs=$abs_count&abs=$abs&date=$date");
?>