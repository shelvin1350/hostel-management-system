<?php
include('includes/db.php');
$user = $_POST['user'];
$pass = $_POST['password'];
$usertype=$_POST['usertype'];
$_SESSION['user'] = $user;
$_SESSION['password'] = $pass;
if($usertype=='user')
{
   $sql=mysql_query("select * from ureg where mailid='$user' and Password='$pass'");
   $s = mysql_fetch_array($sql);
   $status = $s['status'];
   if ($status == 'confirmed') 
   {

      $sql4 = mysql_query("insert into hostel.login values('$user', '$pass', '$usertype')");

      if ($s == true) {
         header('Refresh:0.5; url=student/index.php');

      } else {
         echo ("User Incorrect login credentials...");
      }
   }
   else if($status=='pending')
   {
      echo "<script type='text/javascript'>
            alert('User registration approval is pending at the side of the admin. Try again later.')
            </script>";
      header('Refresh: 0.1; URL=index.php');
   }
   else
   {
      echo "<script type='text/javascript'>
            alert('!!The user registration is rejected by the admin. So unable to login.!!')
            </script>";
      header('Refresh: 0.1; URL=index.php');
   }
}
else if($usertype=='staff')
{
   $sql=mysql_query("select * from sreg where smailid='$user' and password='$pass'");
   
   $s1 = mysql_fetch_array($sql);
   $status = $s1['status'];
   if ($status == 'confirmed') 
   {
      $sql1 = mysql_query("insert into hostel.login values('$user', '$pass', '$usertype')");
      if ($s1 == true) {
         header('Refresh: 0.5; url=staff/index.php');
      } else {
         echo ("Staff incorrect login credentials...");
      }
   }
   else if($status=='pending')
   {
      echo "<script type='text/javascript'>
            alert('User registration approval is pending at the side of the admin. Try again later.')
            </script>";
      header('Refresh: 0.1; URL=index.php');
   }
   else
   {
      echo "<script type='text/javascript'>
            alert('!!The user registration is rejected by the admin. So unable to login.!!')
            </script>";
      header('Refresh: 0.1; URL=index.php');
   }
}
else
{
   $sql2 = mysql_query("select * from admin where userid='$user' and password='$pass'");
   $s2 = mysql_fetch_array($sql2);
   if($s2==true)
   {
      header('Refresh:0.5; url=admin/index.php');
   }
   else
   {
      echo ("Admin incorrect login credentials...");
   }
}
?>