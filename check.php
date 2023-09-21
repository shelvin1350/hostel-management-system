<?php

$username=$_POST['username'];
$password=$_POST['password']; 
 
 include('includes/dbconnect.php');
	$result = mysql_query("SELECT * FROM login WHERE username='$username'AND password='$password' and status='1'",$con);
	$flag=0;
	$status='0';
	if($result)
	{
		while($row = mysql_fetch_array($result))
		{
	       $status=$row['status'];
	  	   if($status==1)
	       {
	        $flag=1;
	  	    session_start();
	        $type=$row['type'];
	  	    $_SESSION['user'] = $type;
	  	    $_SESSION['username'] = $username;
	      }
	  
		}
	}
  
    if($flag==1 && $type=="admin")
  echo "<script>location.href='admin/index.php'</script>";
  else if($flag==1 && $type=="public")
  echo "<script>location.href='public/index.php'</script>";
  else if($flag==1 && $type=="staff")
  echo "<script>location.href='staff/index.php'</script>";
  
  else if($status=='0')
	  echo"<script>alert('Your account is not validated');location.href='index.php';</script>";
  
 
 
  else
	  echo"<script>alert('Invalid Username or Password');location.href='index.php';</script>";
	   
 
mysql_close($con);
?>