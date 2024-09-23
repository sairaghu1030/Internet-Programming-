<?php
include 'process.php';
if(isset($_POST['submit'])){

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$country = $_POST['country'];

 
$query="insert into travelers (fullname,email,phone,username,password,address,country) values('$fullname', '$email', '$phone', '$username', '$password', '$address', '$country')";
if(mysqli_query($conn, $query))
{
  echo "<script>alert('data inserted')</script>";
}
else
{
  echo "error:".mysqli_error($conn);
}
mysqli_close($conn);
}

?>

