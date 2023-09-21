<?php
include('includes/db.php');
$title=$_POST['title'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$hname=$_POST['hname'];
$stname = $_POST['stname'];
$city=$_POST['city'];
$district=$_POST['district'];
$phno=$_POST['phno'];
$mailid=$_POST['mailid'];
$des = $_POST['designation'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$status = 'pending';

if($password==$cpassword)
{
    $sql = mysql_query("insert into hostel.sreg(title, sname, gender, hname, stname, city, district, sphno, smailid, designation, password, status) values('$title', '$name', '$gender', '$hname', '$stname', '$city', '$district',  '$phno', '$mailid', '$des', '$password', '$status')");
    if($sql==true)
    {
        echo "<script type='text/javascript'>
        alert('Registration successfull')
        </script>";
        header('Refresh:0.5; url=login.php');
    }
    else
    {
        echo ("Registration failed");
    }
}

else 
{
    echo ("Password doesn't match");
}
?>
