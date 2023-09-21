<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <style>
      
      select
      {
         width: 265px;
         height: 40px;
         margin-top: 10px;
         margin-bottom: 20px;
      }
      body{
         background-image: url('img/login.jpg');
         background-repeat: no-repeat;
         background-size: fill;
      }
      
      </style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login page</title>
</head>
<link rel="stylesheet" type="text/css" href="stylel.css" >
<body >
<div class="loginbox">
   <img src="icon4.png" class="icon" > 
   <h1>Login here</h1>
   <form method="post" action="loginval.php">
      <p>Usertype</p>
   <select name="usertype">
      <option disabled selected>SELECT USERTYPE</option>
      <option value="user">User</option>
      <option value="staff">Staff</option>
      <option value="admin">Admin</option>
   </select>
   <p>Username</p>
   <input type="text" name="user" placeholder="Enter your Username">
   <p>Password </p>
   <input type="password" name="password" placeholder="Enter Password">
   
   <input type="submit" name="submit" value="login">
   <a> Don't have an account?</a>&nbsp;
   <a href="reg.php">Sign Up</a>
   </form>
   </div>
</body>
</html>