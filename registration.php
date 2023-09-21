<?php
include('includes/db.php');
$sur=$_POST['sur'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$hname=$_POST['hname'];
$sname=$_POST['sname'];
$city=$_POST['city'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$phno=$_POST['phno'];
$mailid=$_POST['mailid'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$status = 'pending';
$a = '123';

if($password==$cpassword)
{
    $sql = mysql_query("insert into hostel.ureg(surname, name, gender, house_name, street_name, city, district, phno, mailid, Password, status) values('$sur', '$name', '$gender', '$hname', '$sname', '$city', '$district', '$phno', '$mailid', '$password', '$status')");
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
