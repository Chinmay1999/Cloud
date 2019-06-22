<?php

if(isset($_REQUEST['register']))
{
	$a=$_REQUEST['voterid'];
	$b=$_REQUEST['name'];
	$c=$_REQUEST['s1'];
	$d=$_REQUEST['s2'];
	$e=$_REQUEST['Address'];
	$f=$_FILES['s3']['name'];
	$conn=mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'evm');
		if(move_uploaded_file($_FILES['s3']['tmp_name'],"voters-img//".$_FILES['s3']['name']))
		{
	$q="insert into voters(voterid,name,state,gender,Address,photo) values('$a','$b','$c','$d','$e','$f')";
	$rs=mysqli_query($conn,$q)or die("Enable to execute ".mysqli_error($conn));
	if($rs>0)
	{
		echo"data entered sucessfully";
		
	}
	else
	{
		echo"something is wrong";
	}
		}
}



?>