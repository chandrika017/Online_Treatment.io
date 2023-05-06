<?php
include("connection.php");
error_reporting(0);


?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  
  <style>
  body{
  background:url("images (5).JPEG");
 background-repeat:no-repeat;
 background-size:cover;
  }
  table{
  background-size:cover;
  
  }
  
  
  </style>
</head>
<body>
 <form action="" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="user_name" value=""/></td>
   </tr>
    <tr>
    <td>Address:</td>
    <td><input type="text" name="user_address" value=""/></td>
   </tr>
   <td>Phone no :</td>
    <td> <input type="text" name="user_phone" value=""/></td>
     
   </tr>
   
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="user_gender" value="m" required>Male
     <input type="radio" name="user_gender" value="f" required>Female
    </td>
   </tr>
   <tr>
    <td>Age:</td>
    <td><input type="text" name="user_age" value=""/></td>
   </tr>
   <tr>
    <td>Doctor SL.:</td>
    <td><input type="text" name="user_doctorsl" value=""/></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td> <input type="text" name="user_password" value=""/></td>
     
   </tr>
   <tr>
    <td><input type="Submit" name="submit" value="Submit"></td>
   </tr>
  </table>
 </form>

<?php
if($_POST['submit'])
{
	
$name=$_POST['user_name'];
$address=$_POST['user_address'];
$phone=$_POST['user_phone'];
$gender=$_POST['user_gender'];
$age=$_POST['user_age'];
$Doctor=$_POST['user_doctorsl'];
$password=$_POST['user_password'];

	if($name!="" && $address!="" && $phone!="" && $gender!="" && $age!=""  && $Doctor!="" && $password!="")
	{
	
$sql="INSERT INTO user values ('$password','$name','$address','$phone','$gender','$age','$Doctor')";
$que=mysqli_query($conn,$sql);
if($que)
{
echo "data inserted into databage";
}	
		
	}
	else
	{
	echo "All fields are required";	
	}
	
}

?>


</body>
</html>